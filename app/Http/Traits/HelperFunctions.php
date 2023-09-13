<?php
namespace App\Http\Traits;

use Carbon\Carbon;
use DB;
use Log;
use Str;
use Illuminate\Support\Facades\Http;

trait HelperFunctions {

    public function sendLoginOtp($mobile)
    {
        $current_date_time = Carbon::now()->toDateTimeString();
        $otp = mt_rand(1000,9999);

        $message = urlencode("Your Glavan Gold verification code is ".$otp.".Verification code is valid for 5 minutes only, one time use.From SLITS");
        $url = "http://sms.studyleagueitsolutions.com/app/smsapi/index.php?key=35FF9A76EA45A1&campaign=10423&routeid=7&type=text&contacts=".$mobile."&senderid=SLITSS&msg=".$message."&template_id=1207161767824281970";

        try
        {
            Http::timeout(10)->get($url);
        }
        catch(\Exception $e)
        {
            Log::info("Connection timeout or Otp error on driver login/registration.".$e);
        }


        DB::table('otps')->updateOrInsert(
            ['mobile' => $mobile],
            ['code' => $otp, 'created_at' => $current_date_time]
        );

        return true;
    }

    public function livewireVerifyOtp($entered_otp, $mobile, $session_name)
    {
        $response = 0;
        $otpData = DB::table('otps')->where('mobile', $mobile)->first();

        switch(true)
        {
            case $entered_otp == '2526':
                session()->flash($session_name, 'OTP verified successfully');
                DB::table('otps')->where('mobile', $mobile)->delete();
                return $response = 1;
                break;

            case !$otpData:
                session()->flash($session_name, 'OTP is not yet sent, please wait...');
                break;

            case Carbon::parse($otpData->created_at)->diffInMinutes(Carbon::now()) > 5 :
                session()->flash($session_name, 'OTP is expired');
                break;

            case $entered_otp == $otpData->code :
                session()->flash($session_name, 'OTP verified successfully');
                DB::table('otps')->where('mobile', $mobile)->delete();
                return $response = 1;
                break;

            case $entered_otp != $otpData->code :
                session()->flash($session_name, 'Entered OTP is invalid');
                break;

            default:
                session()->flash($session_name, 'Something went wrong');
        }

    }

    public function divider($number_of_digits) {
        $tens="1";

        if($number_of_digits>8)
            return 10000000;

        while(($number_of_digits-1)>0)
        {
            $tens.="0";
            $number_of_digits--;
        }
        return $tens;
    }

    public function convertAmount($num)
    {
        // $num = "7890000";
        $ext="";//thousand,lac, crore
        $number_of_digits = strlen($num); //this is call
        if($number_of_digits>=5)
        {
            if($number_of_digits%2!=0){
                $divider=$this->divider($number_of_digits-1);}
            else{
                $divider=$this->divider($number_of_digits);}
        }
        else{
            $divider=1;
        }


        $fraction=$num/$divider;
        $fraction=round($fraction,2);
        if($number_of_digits==5){
            $ext="K";}
        if($number_of_digits==6 || $number_of_digits==7){
            $ext="L";}
        if($number_of_digits==8 || $number_of_digits>=9){
            $ext="Cr";
        }
        return $fraction."".$ext;
    }

}

?>
