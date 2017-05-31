<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = menu::all();
        return view('admin.menu.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
                'title'=>'required|max:255|unique:menu_top,title',
                'link'=>'required|max:255',
                'order'=>'required|numeric|max:100',
            ]);
        $menu = new menu();
        $menu->title = $request->title;
        $menu->link = $request->link;
        $menu->numbers = $request->order;
        $menu->parent_id = 0;
        $menu->alias = changeTitle($request->title);
        $menu->remember_token = $request->_token;
        $menu->save();
        Session()->flash('success', 'Succsess !! Complete add Menu');
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = menu::find($id);
        return view("admin.menu.edit",compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
                'title'=>'required|max:255',
                'link'=>'required|max:255',
                'order'=>'required|numeric|max:100',
            ]);
        $menu = menu::find($id);
        $menu->title = $request->title;
        $menu->link = $request->link;
        $menu->numbers = $request->order;
        $menu->parent_id = 0;
        $menu->alias = changeTitle($request->title);
        $menu->remember_token = $request->_token;
        $menu->save();
        Session()->flash('success', 'Succsess !! Complete edit Menu');
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menu = menu::find($id);
        $menu->delete();
        Session()->flash('success', 'Succsess !! Complete delete Menu');
        return redirect()->route('menu.index');
    }
}
