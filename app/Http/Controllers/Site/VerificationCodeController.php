<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VerificationRequest;
use App\Http\Services\VerificationServices;

use App\Models\User_verfication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;

class VerificationCodeController extends Controller
{

    public $VerificationServices;

    public function __construct(VerificationServices $VerificationServices)
    {
        $this->VerificationServices = $VerificationServices;
    }

    public function getVerifyPage()
    {
        return view('auth.verification');
    }

    public function verify(VerificationRequest $request)
    {


        $check = $this->VerificationServices->checkOTPCode($request->code);

        if(!$check)
        {// code not correct
            return redirect()->route('verify')->withErrors(['code' => 'الكود غير صحيح']);

        }else{
            // verification code is correct
            $this->VerificationServices->removeOTPCode($request->code);
            return redirect()->route('site');
        }




    }
}
