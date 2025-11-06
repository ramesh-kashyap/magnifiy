<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\Debit;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;
use DB;

class WithdrawRequest extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $wallet = User::where('id',$user->id)->orderBy('id','desc')->first();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
          $withdrawals = Withdraw::where('user_id', $user->id)
                    ->orderBy('id', 'desc')
                    ->take(5)
                    ->get();
        $this->data['wallet'] = $wallet;
        $this->data['bank'] = $bank;
          $this->data['withdrawals'] = $withdrawals;
        $this->data['page'] = 'user.withdraw.WithdrawRequest';
        return $this->dashboard_layout();
    }


    public function withdrawPrinciple()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.withdraw-principle';
        return $this->dashboard_layout();
    }


//    public function WithdrawRequest(Request $request)
//             {
//                 try {
//                     $validation = Validator::make($request->all(), [
//                         'amount' => 'required|numeric|min:10',
//                         'PSys' => 'required',
//                         'walletAddress' => 'required',
//                         'code' => 'required'

//                     ]);

//                     if ($validation->fails()) {
//                         Log::info('Validation failed', ['error' => $validation->getMessageBag()->first()]);
//                         return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
//                     }

//                 $user = Auth::user();

//                 // Check OTP from password_resets table
//                 $record = DB::table('password_resets')
//                     ->where('email', $user->email)
//                     ->where('token', $request->code)
//                     ->first();

//                 if (!$record) {
//                     return back()->withErrors(['code' => 'Invalid or expired OTP']);
//                 }

//                 $balance = $user->available_balance();
//                     $account = '';

//                     if ($request->PSys == "USDT.BEP20") {
//                         $account = $user->usdtBep20;
//                         $paymentMode = "USDT_BSC";
//                     }

//                     if ($balance >= $request->amount) {
//                         $todayWithdraw = Withdraw::where('user_id', $user->id)
//                             ->where('status', '!=', 'Failed')
//                             ->where('wdate', date('Y-m-d'))
//                             ->first();

//                         if ($todayWithdraw) {
//                             return Redirect::back()->withErrors(['Any Withdraw limit per Id once a day!']);
//                         }
                            
//                         $existingRequest = Withdraw::where('user_id', $user->id)->where('status', 'Pending')->first();

//                         if ($existingRequest) {
//                             return Redirect::back()->withErrors(['Withdraw Request Already Exists!']);
//                         }

//                         if (!empty($account)) {
//                             $data = [
//                                 'txn_id' => md5(time() . rand()),
//                                 'user_id' => $user->id,
//                                 'user_id_fk' => $user->username,
//                                 'amount' => $request->amount,
//                                 'account' => $account,
//                                 'payment_mode' => $paymentMode,
//                                 'status' => 'Pending',
//                                 'walletType' => 1,
//                                 'wdate' => date("Y-m-d"),
//                             ];

//                             $payment = Withdraw::create($data);
//                                 DB::table('password_resets')->where('email', $user->email)->delete();

//                             $notify[] = ['success', 'Withdraw Request Submitted successfully'];
//                             return redirect()->back()->withNotify($notify);

                        
//                         } else {
//                             return Redirect::back()->withErrors(['Please update your ' . $request->PSys . ' payment address.']);
//                         }
//                     } else {
//                         return Redirect::back()->withErrors(['Insufficient balance in your account.']);
//                     }
//                 } catch (\Exception $e) {
//                     Log::error('WithdrawRequest Exception', ['error' => $e->getMessage()]);
//                     return redirect()->route('user.WithdrawRequest')->withErrors(['error' => $e->getMessage()])->withInput();
//                 }
//             }
public function WithdrawRequest(Request $request)
{
    try {
        $request->validate([
            'amount' => 'required|numeric|min:10',
            'pSys' => 'required', // BEP20 / TRC20
        ]);

        $user = Auth::user();
        $balance = $user->available_balance();
        $amount = $request->amount;

        // 5% charge
        $charge = $amount * 0.05;
        $netAmount = $amount - $charge;

        // Wallet address based on selection
        if ($request->pSys == "BEP20") {
            $walletAddress = $user->usdtBep20;
            $paymentMode = "USDT_BEP20";
        } elseif ($request->pSys == "TRC20") {
            $walletAddress = $user->usdtTrc20;
            $paymentMode = "USDT_TRC20";
        } else {
            return back()->withErrors(['Invalid wallet type selected.']);
        }

        // Check wallet exists
        if (empty($walletAddress)) {
            return back()->withErrors(['Please update your wallet address in settings.']);
        }

        // Balance check
        if ($balance < $amount) {
            return back()->withErrors(['Insufficient balance.']);
        }

        // Save withdraw record
        Withdraw::create([
            'txn_id' => md5(time() . rand()),
            'user_id' => $user->id,
            'user_id_fk' => $user->username,
            'amount' => $amount,
            'charge' => $charge,
            'netAmt' => $netAmount,
            'account' => $walletAddress,
            'payment_mode' => $paymentMode,
            'status' => 'Pending',
            'walletType' => 1,
            'wdate' => date('Y-m-d'),
        ]);

        $notify[] = ['success', 'Withdraw Request Submitted successfully'];
        return back()->withNotify($notify);

    } catch (\Exception $e) {
        Log::error('Withdraw Error: ' . $e->getMessage());
        return back()->withErrors(['error' => $e->getMessage()]);
    }
}



//  public function WithdrawRequest(Request $request)
//     {
//         try {
//             $validation = Validator::make($request->all(), [
//                 "amount" => "required|numeric|min:10",
//                 "currency" => "required",
//                 "payment" => "required|in:1,2",
//                 "wallet" => "required",
//             ]);
//             // dd($validation);
//             if ($validation->fails()) {
//                 Log::info($validation->getMessageBag()->first());

//                 return Redirect::back()
//                     ->withErrors($validation->getMessageBag()->first())
//                     ->withInput();
//             }

//             $user = Auth::user();
//             $password = $request->transaction_password;
//             $balance = Auth::user()->stakingBalance();
            
//             // dd($request->currency);
//             if ($request->currency == "BSC") {
//                 $account = $user->usdtBep20;
//             } else {
//                 $account = $user->usdtTrc20;
//             }

//             if ($balance >= $request->amount) {
//                 if ($request->payment == 2 ) {
                    
                    
                  
//                     if($user->active_status=="Inactive")
//                     {
//                         return Redirect::back()->withErrors([
//                             "Due to a settlement issue, your account has been deactivated. Please reactivate it by topping up your account. Otherwise, all your income and withdrawals will be put on hold",
//                         ]); 
//                     }
                     
                        
                        
                        
//                     $user_detail = Withdraw::where("user_id", $user->id)
//                         ->where("status", "Pending")
//                         ->first();

//                     if (!empty($user_detail)) {
//                         return Redirect::back()->withErrors([
//                             "Withdraw Request Already Exist !",
//                         ]);
//                     } else {
//                         if ($request->currency == "BSC") {
//                             $paymentMode = "USDT_BSC";
//                         } else {
//                             $paymentMode = "USDT_TRX";
//                         }
                        
                        
//                         $invoice = substr(str_shuffle("0123456789"), 0, 7);
//                         if (!empty($account)) {
//                             $data = [
//                                 "txn_id" => md5(time() . rand()),
//                                 "user_id" => $user->id,
//                                 'orderId'=>$invoice,
//                                 "user_id_fk" => $user->username,
//                                 "amount" => $request->amount,
//                                 "account" => $account,
//                                 "payment_mode" => $paymentMode,
//                                 "status" => "Pending",
//                                 'netAmt' =>$request->amount-$request->amount*10/100,
//                                 'charge' =>$request->amount*10/100,
//                                 "walletType" => $request->payment,
//                                 "wdate" => Date("Y-m-d"),
//                             ];
//                             $payment = Withdraw::Create($data);

//                             // $withdraw_id = $payment["id"];

//                             // $netAmt =$request->amount-($request->amount * 10)/100;
//                             // $apiURL ="https://plisio.net/api/v1/operations/withdraw";
//                             // $postInput = [
//                             //     "currency" => $paymentMode,
//                             //     "amount" => $netAmt,
//                             //     "type" => "cash_out",
//                             //     "to" => $account,
//                             //     "api_key" =>
//                             //         "_sCJaOONwTnmkMPZJXyubjqoOwsx7d6I2_7JMCHelakspOSzDZJW4OaAXO5yLOIO",
//                             // ];

//                             // $headers = [
//                             //     "Content-Type" => "application/json",
//                             // ];

//                             // $response = Http::withHeaders($headers)->get(
//                             //     $apiURL,
//                             //     $postInput
//                             // );

//                             // $statusCode = $response->status();
//                             // $responseBody = json_decode(
//                             //     $response->getBody(),
//                             //     true
//                             // );
//                             // // print_r($paymentMode);
//                             // // dd($responseBody);

//                             // if ($responseBody["status"] == "success") {
//                             //     Withdraw::where("id", $withdraw_id)->update([
//                             //         "status" => "Approved",
//                             //         "txn_id" => $responseBody["data"]["txn_id"],
//                             //     ]);

//                             //     $notify[] = [
//                             //         "success",
//                             //         "Withdraw Request Submited successfully",
//                             //     ];

//                             //     return redirect()
//                             //         ->back()
//                             //         ->with("withdralId", $withdraw_id)
//                             //         ->withNotify($notify);
//                             // } else {
//                             //     Withdraw::where("id", $withdraw_id)->update([
//                             //         "status" => "Failed",
//                             //     ]);
//                             //     return Redirect::back()->withErrors([
//                             //         "Our platform is currently undergoing scheduled maintenance to ensure optimal performance and system stability",
//                             //     ]);
//                             // }
//                                   $notify[] = [
//                                     "success",
//                                     "Withdraw Request Submited successfully",
//                                 ];

//                                 return redirect()
//                                     ->back()
                                    
//                                     ->withNotify($notify);
//                         } else {
//                             return Redirect::back()->withErrors([
//                                 "Please Update Your " .
//                                 $request->paymentMode .
//                                 " Payment address",
//                             ]);
//                         }
//                     }
//                 } else {
//                     $user_detail = Withdraw::where("user_id", $user->id)
//                         ->where("status", "Pending")
//                         ->first();

//                     if (!empty($user_detail)) {
//                         return Redirect::back()->withErrors([
//                             "Withdraw Request Already Exist !",
//                         ]);
//                     } else {
//                         if ($request->currency == "BSC") {
//                             $paymentMode = "USDT_BSC";
//                         } else {
//                             $paymentMode = "USDT_TRX";
//                         }
//                         $invoice = substr(str_shuffle("0123456789"), 0, 7);
//                         if (!empty($account)) {
//                             $data = [
//                                 "txn_id" => md5(time() . rand()),
//                                 "user_id" => $user->id,
//                                 'orderId'=>$invoice,
//                                 "user_id_fk" => $user->username,
//                                 "amount" => $request->amount,
//                                 "account" => $account,
//                                 "payment_mode" => $paymentMode,
//                                 'netAmt' =>$request->amount-$request->amount*5/100,
//                                 'charge' =>$request->amount*5/100,
//                                 "status" => "Approved",
//                                 "walletType" => 1,
//                                 "wdate" => Date("Y-m-d"),
//                             ];
//                             $payment = Withdraw::Create($data);

//                             $notify[] = [
//                                 "success",
//                                 "Withdraw Request Submited successfully",
//                             ];

//                             return redirect()
//                                 ->back()
//                                 ->withNotify($notify);
//                         } else {
//                             return Redirect::back()->withErrors([
//                                 "Please Update Your " .
//                                 $request->paymentMode .
//                                 " Payment address",
//                             ]);
//                         }
//                     }
//                 }
//             } else {
//                 return Redirect::back()->withErrors([
//                     "Insufficient balance in Your account",
//                 ]);
//             }
//         } catch (\Exception $e) {
//             Log::info("error here");
//             Log::info($e->getMessage());
//             print_r($e->getMessage());
//             die("hi");
//             return redirect()
//                 ->route("user.WithdrawRequest")
//                 ->withErrors("error", $e->getMessage())
//                 ->withInput();
//         }
//     }


//     public function WithdrawRequestPrinciple(Request $request)
//     {

//         try{

//              $validation =  Validator::make($request->all(), [
//             'amount' => 'required|numeric|min:20',
//             'paymentMode' => 'required',    
//             'transaction_password' => 'required',
//         ]);

//         if($validation->fails()) {
//             Log::info($validation->getMessageBag()->first());

//             return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
//         }

//         $user=Auth::user();
//         $password= $request->transaction_password;
//         $balance=Auth::user()->principleBalance();
//         $account =  $user->trx_addres;
//         if ($balance>=$request->amount)
//         {
            
//         $todayWitdrw=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
         
//          if($todayWitdrw)
//          {
//           return Redirect::back()->withErrors(array('Any Withdraw limit per Id once a day !'));    
//          }
         
         
//           $todayWitdrwSUm=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
//          $todayWitdrwSUm=$todayWitdrwSUm+$request->amount;
//          if($todayWitdrwSUm>=500)
//          {
//           return Redirect::back()->withErrors(array('Any Withdraw limit per 500$ once a day !'));    
//          }
         
         
//          $user_detail=Withdraw::where('user_id',$user->id)->where('status','Pending')->first();

//          if(!empty($user_detail))
//          {
//            return Redirect::back()->withErrors(array('Withdraw Request Already Exist !'));
//          }
//          else
//          {
         
//           if(!empty($account))
//               {
//               if (Hash::check($password, $user->tpassword))
//                {
             
//                    $data = [
//                         'txn_id' =>md5(time() . rand()),     
//                         'user_id' => $user->id,
//                         'user_id_fk' => $user->username,
//                         'amount' => $request->amount,
//                         'account' => $account,
//                         'payment_mode' =>$request->paymentMode,
//                         'status' => 'Pending',
//                         'walletType' => 2,
//                         'wdate' => Date("Y-m-d"),
                    
                        
//                     ];
//                    $payment =  Withdraw::Create($data);
//                      $withdralId = $payment['id'];
//                      $package = $user->package-$request->amount;
//                      User::where('id',$user->id)->update(['package' => $package]);
                    
//             $notify[] = ['success','Withdraw Request Submited successfully'];
    
//                return redirect()->back()->with('withdralId',$withdralId)->withNotify($notify);
                   
             
               
//               }
//                 else
//                 {
//                 return Redirect::back()->withErrors(array('Invalid Transaction Password'));
//                 }     
                
//               }
//               else
//                 {
//                 return Redirect::back()->withErrors(array('Please Update Your USDT Payment Address Or Bank Details'));
//                 }  
//          }

//         }
//         else
//         {
//      return Redirect::back()->withErrors(array('Insufficient balance in Your account'));
//         }

//     }
//     catch(\Exception $e){
//      Log::info('error here');
//      Log::info($e->getMessage());
//      print_r($e->getMessage());
//      die("hi");
//      return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
//        }




//     }


//   public function WithdrawHistory(Request $request)
// {
//     $user = Auth::user();
//     $limit = $request->limit ? $request->limit : paginationLimit();
//     $search = $request->search ? $request->search : null;

//     // 🔹 Base query
//     $notes = Withdraw::where('user_id', $user->id)
//         ->orderBy('wdate', 'DESC');

//     // 🔹 Search logic
//     if (!empty($search) && $request->reset != "Reset") {
//         $notes = $notes->where(function ($q) use ($search) {
//             $q->where('wdate', 'LIKE', '%' . $search . '%')
//               ->orWhere('amount', 'LIKE', '%' . $search . '%')
//               ->orWhere('status', 'LIKE', '%' . $search . '%')
//               ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
//         });
//     }

//     // 🔹 Pagination
//     $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

//     // 🔹 Data to view
//     $this->data['withdraw_report'] = $notes;
//     $this->data['search'] = $search;
//     $this->data['page'] = 'user.withdraw.WithdrawHistory';

//     // 🔹 If AJAX request, return only the table HTML
//     if ($request->ajax()) {
//         return view('user.withdraw.WithdrawHistory', $this->data)->render();
//     }

//     // 🔹 Otherwise return full dashboard layout
//     return $this->dashboard_layout();
// }

    
    public function debitReport(Request $request){

        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
         $status = $request->status ? $request->status : null;
         $search = $request->search ? $request->search : null;
         $notes = Debit::where('user_id',$user->id);
        if($search <> null && $request->reset!="Reset"){
         $notes = $notes->where(function($q) use($search){
            $q->Where('wdate', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
         });

        }

         $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

       $this->data['search'] =$search;
       $this->data['withdraw_report'] =$notes;
       $this->data['page'] = 'user.withdraw.debit';
       return $this->dashboard_layout();
    }
}
