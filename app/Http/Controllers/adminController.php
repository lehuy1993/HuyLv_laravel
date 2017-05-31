<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class adminController extends Controller
{
    //
     public function getLogin()
    {
        # code...
        return view('admin.login');
    }
     public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'username'=>'required',
                'password'=>'required',
            ]
           );
        if (Auth::attempt(['name'=>$request->username,'password'=>$request->password])) {
            # code...
            return redirect('admin/cate/list');
        }else
        {
        	Session()->flash('warning', 'Sorry !! Account or password is incorrect ');
            return redirect('admin/login');
        }
    }
     public function getLogout()
     {
         # code...
        Auth::logout();
        return redirect('admin/login');
     }
}
