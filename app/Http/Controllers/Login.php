<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\Models\PasswordReset;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;        

class Login extends Controller
{


    public function login(Request $request)
    {

            $validation =  Validator::make($request->all(), [
                'username' => 'required|unique:users',
                'password' => 'required|string',

            ]);

       
        //   if (isset($request->captcha)) {
        //         if (!captchaVerify($request->captcha, $request->captcha_secret)) {
        //             $notify[] = ['error', "Invalid Captcha"];
        //             return back()->withNotify($notify)->withInput();
        //         }
        //     }
            
            $post_array  = $request->all();
            $credentials = $request->only('username', 'password');



            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if($user->active_status=="Block")
                {
                Auth::logout();
               return Redirect::back()->withErrors(array('You are Blocked by admin'));
                }

                return redirect()->route('user.dashboard');

              // echo "credentials are invalid"; die;
            }
            else
            {
                // echo "credentials are invalid"; die;
                return Redirect::back()->withErrors(array('Invalid Username & Password !'));
            }

        }



    public function forgot_password()
    {

    return view('auth.passwords.forgot-password');

    }


    public function forgot_password_submit(Request $request)
    {
         $validation =  Validator::make($request->all(), [
                'email' => 'required',

            ]);


        
            
        $credentials = User::where('email',$request->email)->first();

        if ($credentials)
        {

           $userIpInfo = getIpInfo();
           $userBrowserInfo =osBrowser();
           $code = verificationCode(6);

            PasswordReset::where('email', $credentials->email)->delete();

            $password = new PasswordReset();
            $password->email = $credentials->email;
            $password->token = $code;
            $password->created_at = \Carbon\Carbon::now();
            $password->save();

            //    sendEmail($credentials->email, 'Recovery Password', [
            //     'name' => $credentials->name,
            //      'browser' => @$userBrowserInfo['browser'],
            //      'ip' => @$userIpInfo['ip'],
            //      'time' => @$userIpInfo['time'],
            //     'operating_system' => @$userBrowserInfo['os_platform'],
            //     'code' => $code,
            //     'viewpage' => 'forgot_sucess',

            //  ]);

              $page_title = 'Account Recovery';
             $userID = $credentials->id;
            session()->put('pass_res_mail',$userID);
            $notify[] = ['success', 'Password reset email sent successfully'];
            return redirect()->route('codeVerify')->withNotify($notify);
        }
        else{
            $notify[] = ['error', 'Invalid Username '];
            return redirect()->route('forgot-password')->withNotify($notify);
        }



    }

    public function codeVerify(){
        $page_title = 'Account Recovery';
        $userID = session()->get('pass_res_mail');

        $user_name = session()->get('username');

        if (!$userID) {
            $notify[] = ['error','Opps! session expired'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        return view('auth.passwords.confirm',compact('page_title','userID','user_name'));
    }


    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required', 'userID' => 'required']);
        $code = $request->code;
        $userDetail=User::where('id',$request->userID)->first();

        if (PasswordReset::where('token', $code)->where('email', $userDetail->email)->count() != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }
        $notify[] = ['success', 'You can change your password.'];
        session()->flash('fpass_email', $request->userID);
        session()->put('resetMail',$request->userID);
        return redirect()->route('resetPassword', $code)->withNotify($notify);
    }
  public function sendRecoveryEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            // 'email' => 'required|email|unique:users,email',

        ]);

        $user = User::where('email', $request->email)->first();

        session()->put('resetMail', $user->email);
        $token = Str::random(64);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            ['token' => Hash::make($token), 'created_at' => now()]
        );

        $resetUrl = route('resetPassword', ['token' => $token, 'email' => $user->email]);

        $view_message = [
            'name' => $user->name,
            'reset_link' => $resetUrl,
            'time' => now()->format('d M Y h:i A'),
            'ip' => $request->ip(),
            'browser' => $request->header('User-Agent'),
            'operating_system' => php_uname('s'),
            'code' => $token,
        ];

        Mail::send('mail.forgot_sucess', ['view_message' => $view_message], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Recover Your Password');
        });

        return back()->with('status', 'Recovery email sent to your inbox.');
    }

    // public function resetPassword()
    // {
    //     $page_title = "Forgot Password";
    // //   dd("hi");
    //     return view('auth.passwords.resetPassword', compact('page_title'));
    // }
    public function resetPassword(Request $request)
    {
        $token = $request->query('token');
        $email = $request->query('email');

        if (!$token || !$email) {
            return redirect()->route('login')->with('error', 'Invalid password reset link.');
        }
        return view('auth.passwords.resetPassword', compact('token', 'email'));
    }



    // public function submitResetPassword(Request $request)
    // {

    // $request->validate(['password' => 'required|confirmed|min:5']);

    //    $userID = session()->get('resetMail');

    // //    dd($userID);
    // //    die;

    //    $user_name = session()->get('username');

    //    $user = User::where('id',$userID)->orderBy('id', 'DESC')->first();


    //    if (!$user) {
    //     $notify[] = ['error','Opps! session expired'];
    //     return redirect()->route('login')->withNotify($notify);
    //    }
    //    $password = password_hash($request->password, PASSWORD_DEFAULT);

    //    $user->password=$password;
    //    $user->PSR=$request->password;
    //    $user->save();
    //    $notify[] = ['success', 'Your Password change Successfully.'];
    //    return redirect()->route('login')->withNotify($notify);

    // }
   public function submitResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:5',
            'token' => 'required',
        ]);

        try {
            $record = DB::table('password_resets')->where('email', $request->email)->first();

            if (!$record) {
                $notify[] = ['error', 'Invalid or expired reset link.'];
                return redirect()->route('forgot-password')->withNotify($notify);
            }

            if (!Hash::check($request->token, $record->token)) {
                $notify[] = ['error', 'Invalid token!'];
                return redirect()->route('forgot-password')->withNotify($notify);
            }

            $user = User::where('email', $request->email)->first();
            if (!$user) {
                $notify[] = ['error', 'User not found!'];
                return redirect()->route('forgot-password')->withNotify($notify);
            }

            // Update password
            $user->password = Hash::make($request->password);
            $user->PSR = $request->password; // (if you really need to store plain password — not recommended)
            $user->save();

            DB::table('password_resets')->where('email', $request->email)->delete();

            $notify[] = ['success', 'Your password has been reset successfully.'];
            return redirect()->route('login')->withNotify($notify);
        } catch (\Exception $e) {
            \Log::error('Reset Password Error: ' . $e->getMessage());
            $notify[] = ['error', 'Something went wrong while resetting your password. Please try again.'];
            return back()->withNotify($notify);
        }
    }

 public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        $notify[] = ['success', 'You have been logged out.'];
        return redirect()->route('login')->withNotify($notify);
    }
}
