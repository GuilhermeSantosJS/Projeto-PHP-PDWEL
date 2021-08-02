<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\User;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;

class ResetPasswordController extends Controller
{
    public function getPassword($token) { 

        return view('auth.reset', ['token' => $token]);
     }
   
     public function updatePassword(Request $request)
     {
   
     $request->validate([
         'email' => 'required|email|exists:users',
         'password' => 'required|string|min:6|confirmed',
         'password_confirmation' => 'required',
   
     ]);
   
     $updatePassword = FacadesDB::table('password_resets')
                         ->where(['email' => $request->email, 'token' => $request->token])
                         ->first();
   
     if(!$updatePassword){
         return back()->withInput()->with('error', 'token invalido!');
     }
     
       $user = User::where('email', $request->email)
                   ->update(['password' => FacadesHash::make($request->password)]);
   
       FacadesDB::table('password_resets')->where(['email'=> $request->email])->delete();
   
       return redirect('/login')->with('message', 'Sua senha foi alterada com sucesso!');
   
     }
}
