<?php

namespace Hmct\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Hmct\User;
use Hmct\message;

class PageController extends Controller
{
    public function getCaptcha($secretKey)
    {
        $secret = "6LcI-3gUAAAAAJC2ncTSKi31_ViUfriCDJoUaSIK";
        $res = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$secretKey}"); //returns json.
        return json_decode($res); //decode json if yo like. Also check for success & score > 0.5
    }

    public function postContact(Request $request){

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric',
            'message' => 'required|max:3000',
        ]);

// $body = <<<EOD
//         FIRST NAME: $request->fname ;
//         laststname = $request->lname;
//         email = $request->email;
//         number = $request->number;
//         message = $request->message;
// EOD;

        // CAPTCHA VERIFICATION
        $resp = $this->getCaptcha($request->input('g-captcha-response'));
        if ($resp->success == true && $resp->score > 0.5) {
            
            $body =  'FIRST NAME: '.$request->fname . "<br>";
            $body .= 'LAST NAME: ' .$request->lname ."<br>";
            $body .= 'E-MAIL: '.$request->email ."<br>";
            $body .= 'NUMBER: '.$request->number ."<br>";
            $body .= 'MESSAGE: '.$request->message ."<br>";

            $headers =  'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'From: Helpline Medical Care & Tour <info@helplinemedicalcare.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            // mail($to, $subject, $body, $headers);
            mail('info@helplinemedicalcare.com', 'New Contact Email', $body, $headers);
            session()->flash('success_contact', ' Message has been sent. Thank you !');
            return redirect()->back();
        }else{
            session()->flash('error_contact', ' Something Went Wrong !');
            return redirect()->back();
        }

    }

    public function enquiry(Request $request)
    {
        dd($request->all());
    }
    

    public function postAppointment(Request $request)
    {
        $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'mobile_number' => 'required|numeric',
                'nationality' => 'required',
                'message' => 'required|max:3000',
            ]);

        
        if ($request->other_nationality == null || $request->other_nationality == '') {
            $body =  'NAME: '.$request->name . "<br>";
            $body .= 'E-MAIL: '.$request->email ."<br>";
            $body .= 'NUMBER: '.$request->mobile_number ."<br>";
            $body .= 'MESSAGE: '.$request->message ."<br>";
            $body .= 'APPOINTMENT DATE: '.$request->date ."<br>";
            $body .= 'NATIONALITY: '.$request->nationality ."<br>";
        }else{
            $body =  'NAME: '.$request->name . "<br>";
            $body .= 'E-MAIL: '.$request->email ."<br>";
            $body .= 'NUMBER: '.$request->mobile_number ."<br>";
            $body .= 'MESSAGE: '.$request->message ."<br>";
            $body .= 'APPOINTMENT DATE: '.$request->date ."<br>";
            $body .= 'OTHER NATIONALITY: '.$request->other_nationality ."<br>";
        }
        

        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Helpline Medical Care & Tour <appointment@helplinemedicalcare.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        // mail($to, $subject, $body, $headers);
        mail('appointment@helplinemedicalcare.com', 'New Appointment Email', $body, $headers);
        session()->flash('success_appointment', ' Appoinment has been Booked. Thank you !');
        return redirect()->back();
    }

}
