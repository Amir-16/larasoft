<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginstore(Request $req){

        $email= $req->email;
        $password= md5($req->password);  //123456

        //execute query

        $user = User::where('email','=',$email)
        ->where('password','=',$password)
        ->first();

        //select * from users where eamil=''
        if(Hash::chcek){
            echo'Succesfully logged In';
        }
        else{
            echo'Invalid password';
        }


    }
}
