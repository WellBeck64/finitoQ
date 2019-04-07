<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $resquest){
        
        $contacto = new Contacto();
        $userAvaliable = $resquest->input('userAvaliable');

        $contacto->name = $userAvaliable['name'];
        $contacto->email = $userAvaliable['email'];
        $contacto->emailClient = $userAvaliable['emailClient'];
        $contacto->telemovel = $userAvaliable['telemovel'];
        $contacto->descricao = $userAvaliable['descricao'];
        
        try{
            $response = Mail::to($contacto->emailClient)
            ->send(new SendEmail($contacto));
        }catch(\Exception $e){
            return response()->json(['result' => false]);
        }
        return response()->json(['result' => true]);
    }
}
