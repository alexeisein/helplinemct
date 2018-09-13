<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\message;

class PageController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }
    // 
	public function facilities()
    {
    	return view('pages.facilities');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function testimonies()
    {
    	return view('pages.testimonies');
    }

    public function accommodation()
    {
    	return view('pages.accommodation');
    }

    public function getContact()
    {
    	return view('pages.contact');
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
        session()->flash('success', 'Message has been sent. Thank you');
        return redirect()->back();
        
    }
    

    public function specialities()
    {
    	return view('pages.specialities');
    }

    public function keyareas()
    {
    	return view('pages.keyareas');
    }

    public function services()
    {
    	return view('pages.services');
    }

    public function appointment()
    {
    	return view('pages.appointment');
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
        session()->flash('success', 'Message has been sent. Thank you');
        return redirect()->back();
    }
    // Offline
    public function offline()
    {
    	return view('offline.offline');
    }

}
