<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cate;
use App\product;
use Session;
use Illuminate\Support\Facades\Auth;
class productController extends Controller
{
    //
    public function getList()
    {
    	# code...
        $product = product::all();
        return view('admin.product.list',compact('product'));
       
    }

    /*Add cate*/
    public function getAdd(){
    	$parent = cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.product.add',compact('parent'));
    }
    public function postAdd(Request $request){
    
        $this->validate($request,[
            'name'=>'required|max:50|unique:products,name',
            'price'=>'required|numeric|between:0,99.99',
            'sltParent' => 'required',
            ],
            [
            'sltParent.required' => 'Please Choose Category',
            ]);
        $product = new product;
        $product->name = $request->name;
        $product->alias = changeTitle($request->name);
        $product->price = $request->price;
        $product->description = $request->description;
        $product->special = $request->special;
        $product->remember_token = $request->_token;
        $product->user_id = Auth::User()->id;
        $product->cate_id = $request->sltParent;
        $product->save();
        Session()->flash('success', 'Succsess !! Complete Add Product');
        return redirect('admin/product/list');
    }
   
    public function getEdit($id)
    {
        # code...
        $product = product::find($id);
        $parent = cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.product.edit',compact('product','parent'));
       
    }
    public function postEdit($id,Request $request)
    {
        # code...
       $this->validate($request,[

            'name'=>'required|max:50',
            'price'=>'required|numeric|between:0,99.99',
            'sltParent' => 'required',
        ]);
       $product = product::find($id);
       $product->name = $request->name;
       $product->user_id = Auth::User()->id;
       $product->alias = changeTitle($request->name);
       $product->price = $request->price;
       $product->description = $request->description;
       $product->special = $request->special;
       $product->cate_id = $request->sltParent;
       $product->remember_token = $request->_token;
       $product->save();
       Session()->flash('success', 'Succsess !! Complete Edit Product');
        return redirect('admin/product/list');

    }

    public function getDel($id)
    {
        # code...
        $product = product::find($id);
        $product->delete($id);
        Session()->flash('success', 'Succsess !! Complete Delete Product');
        return redirect('admin/product/list');
       
    }
}
