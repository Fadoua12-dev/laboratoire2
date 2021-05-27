<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct() {

            $this->middleware("guest");
    }

    public function  index(){

            return view("register");
    }

    public function store(Request $request){
        $pageName = "";
        $userInputs = $request->only(["firstName","lastName","email","role"]);
        $userInputs["password"]   =  Hash::make($request->input("password"));

        $user = User::Create($userInputs);
        if(isset($user) && !empty($user)){
             Auth::login($user);
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
            return json_encode(['status'=>true,"message"=>"/dashboard/".$pageName]);
        }else{

             return json_encode(['status'=>false,"message"=>"invliadte data"]);
        }
    }
}