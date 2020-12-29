<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\SMSGateWays\VictoryLinkSMS;
use App\Providers\RouteServiceProvider;
use App\User;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Services\VerificationServices;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public $sms_services;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(VerificationServices $sms_services)
    {
        $this->sms_services = $sms_services;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        try
        {
         DB::beginTransaction();

         $Verification = [];
         $user = User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);

        //send OTP SMS code
        //set /generate new code {in SMSServices}
        //save this code in user_verification table
        $Verification['user_id'] = $user->id;
        $verification_date = $this->sms_services->setVerificationCode($Verification);
        $message           = $this->sms_services->getSMSVerifyMessageByAppName($verification_date->code);

        //send code to user mobile {by sms gateway} ولكن الجيت واى دا مدفوع ودا الكود اللى بيشغلوا
        /*  app(VictoryLinkSMS::class)->sendSms($message , $user->mobile);  */

       DB::commit();

       return $user;

        }catch(Exception $e)
        {
            DB::rollBack();
            return $e;
        }
    }
}
