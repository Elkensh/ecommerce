<?php


namespace App\Http\Services;

use App\Models\User_verfication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;

class VerificationServices
{
    public function setVerificationCode($data)
    {
        $code = mt_rand(100000, 999999);
        $data['code'] = $code;
        User_verfication::whereNotNull('user_id')->where(['user_id' => $data['user_id']])->delete();

        return User_verfication::create($data);
    }

    public function getSMSVerifyMessageByAppName($code)
    {
        $message = " is your verification code for your account";
        return $code . $message;
    }

    public function checkOTPCode($code)
    {
        if (Auth::guard()->check()) {
            $verificationDate = User_verfication::where('user_id', Auth::id())->first();
            if ($verificationDate -> code == $code) {
                User::whereId(Auth::id())->update(['email_verified_at' => now()]);
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public function removeOTPCode($code)
    {
        User_verfication::where('code',$code)->delete();
    }
}
