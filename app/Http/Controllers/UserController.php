<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //
    function login(request $req){

        $User = User::where(['email'=>$req->email])->first();
        if(!$User || !Hash::check($req-> password,$User->password))
        {
            return "Username or password not match";
        }
        else{
            $req->session()->put('user',$User);
            Alert::success('Success Title', 'Success Message');
            return redirect('/');
        }
    }
    function register(request $req){
        //return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();

        Alert::success('Registered Successfuly','please login.');
        return redirect('/login');


    }
}
