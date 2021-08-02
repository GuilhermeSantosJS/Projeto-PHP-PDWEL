<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Carbon\Carbon;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Str;
 
class ForgotPasswordController extends Controller
{
    public function getEmail()
    {
  
       return view('auth.forgot');
    }
  
   public function postEmail(Request $request)
    {
      $request->validate([
          'email' => 'required|email|exists:users',
      ]);
  
      $token = Str::Random(64);
  
        FacadesDB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
  
        FacadesMail::send('auth.verify', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Notificação de recuperação de senha');
        });
  
        
        return back()->with('message', 'Link para redefinir a senha!');
        
    }
}
