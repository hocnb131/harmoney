<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'name' => 'Hai'
        ];
         
        Mail::to('dthaj95@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
