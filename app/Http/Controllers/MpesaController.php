<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Mpesa;

class MpesaController extends Controller
{
    public function stkSimulation(Request $request)
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode=174379;
        $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType="CustomerPayBillOnline";
        // get amount from the form
        $Amount= $request->amount;
        $PartyA= $request->phone_number;
// accept phone number in the format 0726582228 but pre add 254 to make it 254726582228

$code = substr($PartyA, 0, 1);
        if ($code == "0") {
            $formatedPhone = substr($PartyA, 1);
            $code = "254";
            $phoneNumber = $code.$formatedPhone;//254726582228
        }
        // $PartyA= $phoneNumber; 
        $PartyB=174379;
        $PhoneNumber= $request->phone_number;
        $CallBackURL="https://supaaduka.com";
        $AccountReference="Simon's Tech School Payment";
        $TransactionDesc="lipa Na M-PESA web development";
        $Remarks="Thank for paying!";
        
        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );

        dd($stkPushSimulation);
       
        return redirect('/confirm'); 
    }

    public function MpesaRes(Request $request)
    {
       $response = json_decode($request->getContent());

       $trn = new MpesaTransaction;
       $trn->response = json_encode($response);
       $trn->save();
    }

    
}
