<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\RegisterController ;
use App\Models\User ;
use App\Models\City ;
use GuzzleHttp\Promise\Create;

class BranchRegisterController extends Controller
{
    public function branch_register(Request $req)
    {
        //  echo $req;
        if($req->password2 == $req->password1){
            $user = new User ;
            $user->name = $req->firstname; 
            $user->password = Hash::make($req->password1);
            $user->is_branch = $req->is_branch ;
            $user->email = $req->email;
            $user->save();

            $city = new City;

            $city->user_id = $user->id ;
            $city->city_name = $req->city ;
            $city->address = $req->address ;
            $city->state = $req->state ;
            $city->pincode = $req->pincode ;
            $city->save() ; 
            //$city-> = $req-> ;

            return redirect('admin/home') ;
        }
        else{
            return view('branch_register')->with('errors',"password are not same.");
        }
    }
}
