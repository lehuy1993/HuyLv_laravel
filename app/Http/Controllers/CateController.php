<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cate;
use App\product;

use Session;

class CateController extends Controller
{
    //
    public function getList()
    {
    	# code...
        $cate = cate::all();
        return view('admin.cate.list',compact('cate'));
    }

    /*Add cate*/
    public function getAdd(){
    	$parent = cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.add',compact('parent'));
    }
    public function postAdd(Request $request){
    	$this->validate($request, [
        'name' => 'required|unique:cates,name|max:50',
        'order' => 'required',
    ]);
        $cate = new cate();
        $cate->name = $request->name;
        $cate->alias = changeTitle($request->name);
        $cate->parent_id = $request->sltParent;
        $cate->order =$request->order;
        $cate->remember_token  = $request->_token;
        
        $cate->save();
        Session()->flash('success', 'Succsess !! Complete add');
        return redirect('admin/cate/list');

    }
    public function getDel($id)
    {
        # code...
        $parent = cate::where('parent_id',$id)->count();
        $product = product::where('cate_id',$id)->count();
        if ($parent == 0 && $product == 0) {
            $cate = cate::find($id);
            $cate->delete($id);
            Session()->flash('success', 'Succsess !! Complete delete');
            return redirect()->route('cate.list');
        } else {
            echo "<script type='text/javascript'>
                  alert('Sorry ! You Can Not Delete This Category');
                  window.location = '";
                    echo route('cate.list');
            echo"'
            </script>";
        }
    }
    public function getEdit($id)
    {
        # code...
        $Cate = cate::find($id);
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.edit',compact('Cate','parent','id'));
    }
    public function postEdit($id,Request $request)
    {
        # code...
        $this->validate($request, [
        'name' => 'required|max:50',
        'order' => 'required',
    ]);
        $cate = cate::find($id);
        $cate->name = $request->name;
        $cate->alias = changeTitle($request->name);
        $cate->parent_id = $request->sltParent;
        $cate->order =$request->order;
        $cate->remember_token  = $request->_token;
        $cate->save();
        Session()->flash('success', 'Succsess !! Complete edit');
        return redirect('admin/cate/list');

    }
}
