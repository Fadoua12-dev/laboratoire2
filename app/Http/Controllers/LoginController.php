<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function index(){

         return view("login");
    }

   public function validerlogin(Request $request){
        $pageName = '';
      $credentials = $request->only(["email","password"]);

      if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
    //   Authentication was successful...
        $request->session()->regenerate();
        // admin
        if($request->user()->role == 0) {
            $pageName = "admin";
            // Teasrd
        }else if($request->user()->role == 1){
            $pageName = "tesard";
            // Responsable Labo
        }else if($request->user()->role == 2){
            $pageName = "respLabo";
        }else{

            $pageName = "enseinement";
        }
         return json_encode(["status"=>true,"message"=>"/dashboard/".$pageName]);
      }
      return json_encode(["status"=>false,"message"=>"password ou email incorrecte!"]);

   }
   public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}