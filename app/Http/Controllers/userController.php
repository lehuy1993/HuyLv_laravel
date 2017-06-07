<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\product;
use Session;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function getList()
    {
    	# code...
        $user = User::all();
        return view('admin.user.list',compact('user'));
       
    }
    public function getAdd(){
        return view('admin.user.add');
    	
    }
    public function postAdd(Request $request){
       
        
    	$this->validate($request,[
            'name'=> 'required|max:50|string|unique:users,name|min:4',
            'password'=>'required|max:50|min:4',
            'password_confirm'=>'required|same:password',
            'email'=>'required|string|max:50|unique:users,email|email',

            ]
            );
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password  = bcrypt($request->password);
        $user->remember_token = $request->_token;
        $user->save();
        Session()->flash('success', 'Succsess !! Complete Add User');
        return redirect('admin/user/list');
    }

  
    
    public function getEdit($id)
    {
        # code...
        $User = User::find($id);
        if ((Auth::User()->id != 7 ) && ($id == 7 || ($User->level == 1 
            && (Auth::User()->id != $id)))) {
            # code...
        Session()->flash('warning', 'Sorry !! You Can\'t  Edit User');
            return redirect('admin/user/list');
        }
        return view('admin.user.edit',compact('User','id'));

       
    }
    public function postEdit($id,Request $request)
    {
        # code...
       $User = User::find($id);
       
        $User->email = $request->txtEmail;
        $User->remember_token = $request->_token;
        if ($request->changepassword = "on" && $request->input('txtPass')) {
            # code...
            $this->validate($request,
            [
                
                'txtRePass'=>'required|same:txtPass',
                
            ],
            [
                
                'txtRePass.same'=>'mật khẩu nhập lại chưa đúng'
            ]);
        $User->password = bcrypt($request->password);
    }
        $User->level = $request->level;
        $User->save();
        Session()->flash('success', 'Succsess !! Complete Edit User');
        return redirect('admin/user/list');

    }

    
    public function getDel($id)
    {
        # code...
        $user_current_login = Auth::User()->id;
        $user = User::find($id);
        if (($id == 7) || ($user_current_login != 7 && $user["level"] == 1)) {
             Session()->flash('warning', ' Sorry !! You Can\'t Access Delete User');
            return redirect('admin/user/list');
        } else {

            $user->delete();
            Session()->flash('success', 'Success !! Complate Delete User');
            return redirect('admin/user/list');
            
        }
        
    }
}
