<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Compound;
use App\Models\Income;
use App\Models\plan;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Illuminate\Support\Str;
use Redirect;
use Hash;
use Helper;
use DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode; // composer require simplesoftwareio/simple-qrcode

class Invest extends Controller
{

  private $downline = "";

    public function index()
    {
     $userInfo = auth()->user(); // Get authenticated user
        $refId = $userInfo->username;

        $url = 'https://api.cryptapi.io/bep20/usdt/create/';
        $queryParams = [
            'callback'      => 'https://helixfund.live/dynamicUpiCallback?refid=' . $refId,
            'address'       => '0x3D297d99cCC6C872F6770978c5C1E794Da79f735',
            'pending'       => 0,
            'confirmations' => 1,
            'email'         => 'string',
            'post'          => 0,
            'priority'      => 'default',
            'multi_token'   => 0,
            'multi_chain'   => 0,
            'convert'       => 0,
        ];

        // Log the request being sent
       /* Log::info('Sending request to CryptAPI', [
            'url' => $url,
            'params' => $queryParams,
            'user' => $userInfo->id ?? null,
        ]);*/

        $response = Http::get($url, $queryParams);

      

        $data = $response->json();

        // Log decoded JSON
        // Log::info('Parsed response from CryptAPI', $data);

        unset($data['callback_url']); // remove callback_url

        // Log after cleaning up data
        Log::info('Final response data sent to view', $data);

        $this->data['data'] = $data;
        $this->data['page'] = 'user.invest.Deposit';

        return $this->dashboard_layout();

    }  






    public function plan()
    {

    $user = auth()->user();
$notes = Plan::where('user_id', $user->id)
                 ->orderBy('id', 'desc')
                 ->get();


     $userInfo = auth()->user(); // Get authenticated user
        $refId = $userInfo->username;

        $url = 'https://api.cryptapi.io/bep20/usdt/create/';
        $queryParams = [
            'callback'      => 'https://helixfund.live/dynamicUpiCallback?refid=' . $refId,
            'address'       => '0x3D297d99cCC6C872F6770978c5C1E794Da79f735',
            'pending'       => 0,
            'confirmations' => 1,
            'email'         => 'string',
            'post'          => 0,
            'priority'      => 'default',
            'multi_token'   => 0,
            'multi_chain'   => 0,
            'convert'       => 0,
        ];

        // Log the request being sent
       /* Log::info('Sending request to CryptAPI', [
            'url' => $url,
            'params' => $queryParams,
            'user' => $userInfo->id ?? null,
        ]);*/

        $response = Http::get($url, $queryParams);

      

        $data = $response->json();

        // Log decoded JSON
        // Log::info('Parsed response from CryptAPI', $data);

        unset($data['callback_url']); // remove callback_url

        // Log after cleaning up data
        Log::info('Final response data sent to view', $data);

        $this->data['data'] = $data;
                $this->data['deposit_list'] = $notes;

        $this->data['page'] = 'user.invest.plan';

        return $this->dashboard_layout();

    }  










  public function index1()
    {
     $userInfo = auth()->user(); // Get authenticated user


        // $this->data['data'] = $data;
        $this->data['page'] = 'user.invest.re-invest';

        return $this->dashboard_layout();

    }  


        public function quoteCryptapi(Request $req)
    {
        $user = $req->user();

        $data = $req->validate([
            'plan_id'  => 'required|in:1,2,3,4',
            'system'   => 'required|in:bep20,trc20',
            'currency' => 'required|in:USDT',
            'amount'   => 'required|numeric|min:1',   // adjust min per your biz rules
        ]);

        $system   = $data['system'];   // bep20 | trc20
        $currency = $data['currency']; // USDT
        $amount   = round((float)$data['amount'], 2);

        // Choose merchant address by network
        $merchantAddress = $system === 'bep20'
            ? '0x3D297d99cCC6C872F6770978c5C1E794Da79f735'
            : 'TD4KhBToV1nKRumY4L7jJzR4cWLK9xzmyb';

        if (!$merchantAddress) {
            return response()->json([
                'ok' => false,
                'message' => 'Merchant wallet not configured for '.$system,
            ], 422);
        }

        // Create a unique reference for this quote (store in DB if you track orders)
        $ref = Str::upper(Str::random(10));

        // Build callback URL (CryptAPI will ping this on payment events)
        $callback = 'https://helixfund.live/dynamicUpiCallback?refid=' . $user->username;

        // Prepare CryptAPI create endpoint
        $baseUrl = "https://api.cryptapi.io/{$system}/usdt/create/";
        $queryParams = [
            'callback'      => $callback,                  // your webhook URL
            'address'       => $merchantAddress,          // where funds will be forwarded by CryptAPI
            'pending'       => 1,                         // also notify on pending txs
            'confirmations' => 1,                         // confirmations required
            'email'         => env('CRYPTAPI_EMAIL',''),  // optional
            'post'          => 1,                         // POST webhook (JSON)
            'priority'      => 'default',
            'multi_token'   => 0,
            'multi_chain'   => 0,
            'convert'       => 0,
        ];

        try {
            $response = Http::timeout(20)->acceptJson()->get($baseUrl, $queryParams);

            if (!$response->ok()) {
                Log::warning('CryptAPI create failed', ['code'=>$response->status(), 'body'=>$response->body()]);
                return response()->json([
                    'ok' => false,
                    'message' => 'Unable to create payment address',
                ], 502);
            }

            $provider = $response->json();

            // CryptAPI returns several fields; to be safe we generate our own QR
            // Use address_in (deposit address controlled by CryptAPI) if present, otherwise fallback
            $depositAddress =
                $provider['address_in'] ??
                $provider['address_in']    ??
                null;

            if (!$depositAddress) {
                Log::warning('CryptAPI missing deposit address', ['provider'=>$provider]);
                return response()->json([
                    'ok' => false,
                    'message' => 'No deposit address returned by provider',
                ], 502);
            }

            // Build a generic QR payload (scanners will capture address + amount hint)
            $qrPayload = json_encode([
                'network'  => strtoupper($system),
                'currency' => $currency,
                'address'  => $depositAddress,
                'amount'   => number_format($amount, 2, '.', ''),
                'ref'      => $ref,
            ]);

            $qrcodeSvg = QrCode::format('svg')->size(240)->margin(1)->generate($qrPayload);

            // Optional: set expiration window for this quote (e.g., 30 min)
            $expiresAt = now()->addMinutes(30)->toIso8601String();

            // (Optional) persist a quote row if you want to reconcile later
            // Quote::create([...])

            // Return a frontend-friendly payload
            return response()->json([
                'ok'         => true,
                'address'    => $depositAddress,
                'network'    => strtoupper($system),
                'currency'   => $currency,
                'amount'     => number_format($amount, 2, '.', ''),
                'qrcodeSvg'  => $qrcodeSvg,
                'ref'        => $ref,
                'expires_at' => $expiresAt,
                'provider_raw' => $provider,   // keep for debugging/auditing
            ]);

        } catch (\Throwable $e) {
            Log::error('CryptAPI exception', ['e'=>$e]);
            return response()->json([
                'ok' => false,
                'message' => 'Service temporarily unavailable',
            ], 500);
        }
    }

    



        public function quoteCryptapis(Request $req)
    {
        $user = $req->user();

        $data = $req->validate([
            'plan_id'  => 'required|in:1,2,3,4',
            'system'   => 'required|in:bep20,trc20',
            'currency' => 'required|in:USDT',
            'amount'   => 'required|numeric|min:1',   // adjust min per your biz rules
        ]);

        $system   = $data['system'];   // bep20 | trc20
        $currency = $data['currency']; // USDT
        $amount   = round((float)$data['amount'], 2);

        // Choose merchant address by network
        $merchantAddress = $system === 'bep20'
            ? '0x3D297d99cCC6C872F6770978c5C1E794Da79f735'
            : 'TD4KhBToV1nKRumY4L7jJzR4cWLK9xzmyb';

        if (!$merchantAddress) {
            return response()->json([
                'ok' => false,
                'message' => 'Merchant wallet not configured for '.$system,
            ], 422);
        }

        // Create a unique reference for this quote (store in DB if you track orders)
        $ref = Str::upper(Str::random(10));

        // Build callback URL (CryptAPI will ping this on payment events)
        $callback = 'https://helixfund.live/dynamicUpiCallback?refid=' . $user->username;

        // Prepare CryptAPI create endpoint
        $baseUrl = "https://api.cryptapi.io/{$system}/usdt/create/";
        $queryParams = [
            'callback'      => $callback,                  // your webhook URL
            'address'       => $merchantAddress,          // where funds will be forwarded by CryptAPI
            'pending'       => 1,                         // also notify on pending txs
            'confirmations' => 1,                         // confirmations required
            'email'         => env('CRYPTAPI_EMAIL',''),  // optional
            'post'          => 1,                         // POST webhook (JSON)
            'priority'      => 'default',
            'multi_token'   => 0,
            'multi_chain'   => 0,
            'convert'       => 0,
        ];

        try {
            $response = Http::timeout(20)->acceptJson()->get($baseUrl, $queryParams);

            if (!$response->ok()) {
                Log::warning('CryptAPI create failed', ['code'=>$response->status(), 'body'=>$response->body()]);
                return response()->json([
                    'ok' => false,
                    'message' => 'Unable to create payment address',
                ], 502);
            }

            $provider = $response->json();

            // CryptAPI returns several fields; to be safe we generate our own QR
            // Use address_in (deposit address controlled by CryptAPI) if present, otherwise fallback
            $depositAddress =
                $provider['address_in'] ??
                $provider['address_in']    ??
                null;

            if (!$depositAddress) {
                Log::warning('CryptAPI missing deposit address', ['provider'=>$provider]);
                return response()->json([
                    'ok' => false,
                    'message' => 'No deposit address returned by provider',
                ], 502);
            }

            // Build a generic QR payload (scanners will capture address + amount hint)
            $qrPayload = json_encode([
                'network'  => strtoupper($system),
                'currency' => $currency,
                'address'  => $depositAddress,
                'amount'   => number_format($amount, 2, '.', ''),
                'ref'      => $ref,
            ]);

            $qrcodeSvg = QrCode::format('svg')->size(240)->margin(1)->generate($qrPayload);

            // Optional: set expiration window for this quote (e.g., 30 min)
            $expiresAt = now()->addMinutes(30)->toIso8601String();

            // (Optional) persist a quote row if you want to reconcile later
            // Quote::create([...])

            // Return a frontend-friendly payload
            return response()->json([
                'ok'         => true,
                'address'    => $depositAddress,
                'network'    => strtoupper($system),
                'currency'   => $currency,
                'amount'     => number_format($amount, 2, '.', ''),
                'qrcodeSvg'  => $qrcodeSvg,
                'ref'        => $ref,
                'expires_at' => $expiresAt,
                'provider_raw' => $provider,   // keep for debugging/auditing
            ]);

        } catch (\Throwable $e) {
            Log::error('CryptAPI exception', ['e'=>$e]);
            return response()->json([
                'ok' => false,
                'message' => 'Service temporarily unavailable',
            ], 500);
        }
    }





    public function compounding(Request $request)
    {
     $user = auth()->user(); // Get authenticated user
     
          $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Compound::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('payment_mode', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%')
          ->orWhere('created_at', 'LIKE', '%' . $search . '%');

        });
      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
    
        $this->data['page'] = 'user.invest.compounding';

        return $this->dashboard_layout();

    }  








public function compound(Request $request)
{
    $userInfo = auth()->user();
    $refId = $userInfo->username;
    $duration = $request->duration;

    $url = 'https://api.cryptapi.io/bep20/usdt/create/';
    $queryParams = [
        'callback'      => 'https://helixfund.live/dynamic-compouding?refid=' . $refId . '&duration=' . $duration,
        'address'       => '0x3D297d99cCC6C872F6770978c5C1E794Da79f735',
        'pending'       => 0,
        'confirmations' => 1,
        'email'         => 'string',
        'post'          => 0,
        'priority'      => 'default',
        'multi_token'   => 0,
        'multi_chain'   => 0,
        'convert'       => 0,
    ];

    $response = Http::get($url, $queryParams);
    $data = $response->json();

    if (!isset($data['address_in'])) {
        return response()->json(['error' => 'API failed'], 500);
    }

    unset($data['callback_url']);
    Log::info('Final response data sent to view', $data);

    return response()->json($data);
}


public function transferToCompounding(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'amount'   => 'required|numeric|min:10',
        'duration' => 'required|in:3,6,12',
    ]);

    $amount = $request->amount;
    $duration = $request->duration;

    if ($user->available_balance() < $amount) {
        return back()->withErrors(array('Insufficient balance to transfer'));
    }

    DB::beginTransaction();
  $invoice = rand(1000000, 9999999);
    try {
        Compound::create([
            'plan'           => $duration,
            'orderId'        =>$invoice,
            'transaction_id' =>  Str::uuid(),
            'user_id'        => $user->id,
            'user_id_fk'     => $user->username,
            'amount'         => $amount,
            'payment_mode'   => 'USDT',
            'status'         => 'Active',
            'walletType'         => 1,
            'sdate'          => now(),
            'active_from'    => 'Transfered'
        ]);

        DB::commit();

         add_direct_income($user->id,$amount,1);  
       $notify[] = ['success','Amount transferred to compounding successfully'];
        return redirect()->route('user.compounding')->withNotify($notify);
        
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->withErrors(array('Something went wrong. Please try again'));
    }
}
   
    public function deposit()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit2';
        return $this->dashboard_layout();
    }



public function cancel_payment($id)

{
    
         Investment::where('orderId',$id)->update(['status' => 'Decline']);
     
        $notify[] = ['success','Deposit canceled successfully'];
        return redirect()->route('user.invest')->withNotify($notify);
    
}

    public function confirmDeposit(Request $request)
    {
   try{
     $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:50',
        'PSys' => 'required',
     ]);


    //  dd($request->all());
    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }




    $user=Auth::user();
    $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

    if ($invest_check) 
    {
      return redirect()->route('user.DepositHistory')->withErrors(array('your deposit already pending please cancel it if you dont want to pay this transaction'));
    }
   

    $min_amount = $request->minimum_deposit;
    $max_amount = $request->maximum_deposit;
    $plan = $request->Plan;
    $paymentMode = $request->PSys;
    $amount = $request->Sum;

   
       
    if ($amount<$min_amount || $amount>$max_amount) 
    {
      return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
    }
    
    
        $plan ='BEGINNER';
      if ($amount>=50 && $amount<=200) 
       {
        $plan ='BEGINNER';
       }
       elseif($amount>=400 && $amount<=800)
       {
        $plan ='STANDARD';
       }
       elseif($amount>=1000 && $amount<=2000)
       {
        $plan ='EXCLUSIVE';
       }
       elseif($amount>=2500 && $amount<=5000)
       {
        $plan ='ULTIMATE';
       }

       elseif($amount>=5000 && $amount<=10000)
       {
        $plan ='PREMIUM';
       }

       elseif($amount>=5000)
       {
        $plan ='PREMIUM';
       }
       
    $invest_check=Investment::where('user_id',$user->id)->where('plan',$plan)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    
    if($invest_check)
    {
          return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));
    }
   
    $amountTotal= $request->Sum;
  
  
    if($paymentMode=="USDT.BEP20")
    {
       $paymentMode= "USDT_BSC"; 
    }
    else
    {
      $paymentMode= "USDT_TRX";    
    }
    
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $apiURL = 'https://plisio.net/api/v1/invoices/new';
        $postInput = [
        'source_currency' => 'USD',
        'source_amount' => $amountTotal,
        'order_number' => $invoice,
        'currency' => $paymentMode,
        'email' => $user->email,
        'order_name' =>$user->username,
        'callback_url' => 'https://etriton.co/dynamicupicallback?json=true',
        'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
        ];
  
        $headers = [
            'Content-Type' => 'application/json'
        ];
  
        $response = Http::withHeaders($headers)->get($apiURL, $postInput);
  
        $statusCode = $response->status();
        $resultAarray = json_decode($response->getBody(), true);
        

    if($resultAarray['status']=="success")
    {

       $data = [
            'plan' => $plan,
            'orderId' => $invoice,
            'transaction_id' =>$resultAarray['data']['txn_id'],
            'user_id' => $user->id,
            'user_id_fk' => $user->username,
            'amount' => $amountTotal,
            'payment_mode' =>$paymentMode,
            'status' => 'Pending',
            'sdate' => Date("Y-m-d"),
            'active_from' => $user->username,
        ];
        $payment =  Investment::insert($data);
                
            
    
    $this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
    $this->data['paymentMode'] =$paymentMode;
    $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
    $this->data['qr_code'] =$resultAarray['data']['qr_code'];
    $this->data['orderId'] =$invoice;
    $this->data['amount'] =$amount;
    $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
    $this->data['page'] = 'user.invest.confirmDeposit';
    return $this->dashboard_layout();

  }
  else
  {
    return Redirect::back()->withErrors(array('try again'));
  }

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }



    public function confirmDeposit_new(Request $request)
    {
   try{
     $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:2',
        'PSys' => 'required',
     ]);


    //  dd($request->all());
    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }




    $user=Auth::user();
    $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

    if ($invest_check) 
    {
      return Redirect::back()->withErrors(array('your deposit already pending'));
    }
   

    $min_amount = $request->minimum_deposit;
    $max_amount = $request->maximum_deposit;
    $plan = $request->Plan;
    $paymentMode = $request->PSys;
    $amount = $request->Sum;

   
       
    if ($amount<$min_amount || $amount>$max_amount) 
    {
      return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
    }
    
    
        $plan ='BEGINNER';
      if ($amount>=50 && $amount<=200) 
       {
        $plan ='BEGINNER';
       }
       elseif($amount>=400 && $amount<=800)
       {
        $plan ='STANDARD';
       }
       elseif($amount>=1000 && $amount<=2000)
       {
        $plan ='EXCLUSIVE';
       }
       elseif($amount>=2500 && $amount<=5000)
       {
        $plan ='ULTIMATE';
       }

       elseif($amount>=5000 && $amount<=10000)
       {
        $plan ='PREMIUM';
       }

       elseif($amount>=5000)
       {
        $plan ='PREMIUM';
       }
       
    $invest_check=Investment::where('user_id',$user->id)->where('plan',$plan)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    
    if($invest_check)
    {
          return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));
    }
   
    $amountTotal= $request->Sum;
  
  
    if($paymentMode=="USDT.BEP20")
    {
       $paymentMode= "USDT_BSC"; 
    }
    else
    {
      $paymentMode= "USDT_TRX";    
    }
    
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $apiURL = 'https://plisio.net/api/v1/invoices/new';
        $postInput = [
        'source_currency' => 'USD',
        'source_amount' => $amountTotal,
        'order_number' => $invoice,
        'currency' => $paymentMode,
        'email' => $user->email,
        'order_name' =>$user->username,
        'callback_url' => 'https://etriton.co/dynamicupicallback?json=true',
        'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
        ];
  
        $headers = [
            'Content-Type' => 'application/json'
        ];
  
        $response = Http::withHeaders($headers)->get($apiURL, $postInput);
  
        $statusCode = $response->status();
        $resultAarray = json_decode($response->getBody(), true);
        

    if($resultAarray['status']=="success")
    {

       $data = [
            'plan' => $plan,
            'orderId' => $invoice,
            'transaction_id' =>$resultAarray['data']['txn_id'],
            'user_id' => $user->id,
            'user_id_fk' => $user->username,
            'amount' => $amountTotal,
            'payment_mode' =>$paymentMode,
            'status' => 'Pending',
            'sdate' => Date("Y-m-d"),
            'active_from' => $user->username,
        ];
        $payment =  Investment::insert($data);
                
            
    
    $this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
    $this->data['paymentMode'] =$paymentMode;
    $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
    $this->data['qr_code'] =$resultAarray['data']['qr_code'];
    $this->data['orderId'] =$invoice;
    $this->data['amount'] =$amount;
    $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
    $this->data['page'] = 'user.invest.confirmDeposit';
    return $this->dashboard_layout();

  }
  else
  {
    return Redirect::back()->withErrors(array('try again'));
  }

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }





    public function fundActivation(Request $request)
    {

      dd($request->all());
  try{
    $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:50',
        'paymentMode' => 'required',
        'transaction_id' => 'required|unique:investments,transaction_id',
    ]);

    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }

 

       $user=Auth::user();
       
       $plan="1";

       $user_detail=User::where('username',$user->username)->orderBy('id','desc')->limit(1)->first();
       $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $joining_amt =$request->amount;
        $plan ='BEGINNER';
       if ($joining_amt>=50 && $joining_amt<=200) 
       {
        $plan ='BEGINNER';
       }
       elseif($joining_amt>=400 && $joining_amt<=800)
       {
        $plan ='STANDARD';
       }
       elseif($joining_amt>=1000 && $joining_amt<=2000)
       {
        $plan ='EXCLUSIVE';
       }
       elseif($joining_amt>=2500 && $joining_amt<=5000)
       {
        $plan ='ULTIMATE';
       }

       elseif($joining_amt>=5000 && $joining_amt<=10000)
       {
        $plan ='PREMIUM';
       }

       elseif($joining_amt>=5000)
       {
        $plan ='PREMIUM';
       }
      


      $last_package = ($invest_check)?$invest_check->amount:0;

        
           $data = [
                'plan' => $plan,
                'transaction_id' =>$request->transaction_id,
                'user_id' => $user_detail->id,
                'user_id_fk' => $user_detail->username,
                'amount' => $request->amount,
                'payment_mode' =>$request->paymentMode,
                'status' => 'Pending',
                'sdate' => Date("Y-m-d"),
                'active_from' => $user->username,
            ];
            $payment =  Investment::insert($data);
            

        $notify[] = ['success','Deposit request submitted successfully'];
        return redirect()->route('user.invest')->withNotify($notify);

   

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }



    public function fundActivation2(Request $request)
    {

      dd($request->all());
  try{
    $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:50',
        'paymentMode' => 'required',
        'transaction_id' => 'required|unique:investments,transaction_id',
    ]);

    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }

 

       $user=Auth::user();
       
       $plan="1";

       $user_detail=User::where('username',$user->username)->orderBy('id','desc')->limit(1)->first();
       $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $joining_amt =$request->amount;
        $plan ='BEGINNER';
       if ($joining_amt>=50 && $joining_amt<=200) 
       {
        $plan ='BEGINNER';
       }
       elseif($joining_amt>=400 && $joining_amt<=800)
       {
        $plan ='STANDARD';
       }
       elseif($joining_amt>=1000 && $joining_amt<=2000)
       {
        $plan ='EXCLUSIVE';
       }
       elseif($joining_amt>=2500 && $joining_amt<=5000)
       {
        $plan ='ULTIMATE';
       }

       elseif($joining_amt>=5000 && $joining_amt<=10000)
       {
        $plan ='PREMIUM';
       }

       elseif($joining_amt>=5000)
       {
        $plan ='PREMIUM';
       }
      


      $last_package = ($invest_check)?$invest_check->amount:0;

        
           $data = [
                'plan' => $plan,
                'transaction_id' =>$request->transaction_id,
                'user_id' => $user_detail->id,
                'user_id_fk' => $user_detail->username,
                'amount' => $request->amount,
                'payment_mode' =>$request->paymentMode,
                'status' => 'Pending',
                'sdate' => Date("Y-m-d"),
                'active_from' => $user->username,
            ];
            $payment =  Investment::insert($data);
            

        $notify[] = ['success','Deposit request submitted successfully'];
        return redirect()->route('user.invest')->withNotify($notify);

   

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }



       public function invest_list(Request $request)
{
    $user = Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $search = $request->search ? $request->search : null;

    $notes = Investment::where('user_id', $user->id);

    if (!empty($search)) {
        $notes = $notes->where(function ($q) use ($search) {
            $q->where('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('payment_mode', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('created_at', 'LIKE', '%' . $search . '%');
        });
    }

    $notes = $notes->orderBy('id', 'desc')->paginate($limit)->appends(['limit' => $limit]);

    $this->data['search'] = $search;
    $this->data['deposit_list'] = $notes;
    $this->data['page'] = 'user.invest.DepositHistory';

    if ($request->ajax()) {
        return view('user.invest.DepositHistory', $this->data)->render();
    }

    return $this->dashboard_layout();
}


}
