<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function validation(Request $req){
        
    
         //$req->validate([
           // 'username' => 'required | max:10',
            // 'usermail' => 'required',
             //'password' => 'required | min:5'
             
        // ]);
            $data = $req->input('Username');
            $req ->session()->flash('user',$data);

            $user = new user();
            $user->Name = $req->name;
            $user->UserName = $req->Username;
            $user->DateofBirth = $req->birthday;
            $user->email = $req->email;
            $user->TelNO = $req->phoneno;
            $user->NICno = $req->NIC;
            $user->gender = $req->gender;
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect('/');
            
        
        }
        function show(){
           $data =  user::all();
            return view('show',['members'=>$data]);
             


        }
}
