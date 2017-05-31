<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservations;

class reservationsController extends Controller
{
    //
    public function getlist()
    {
    	# code...
    	$reservations = reservations::all();
    	return view('admin.reservations.list',compact('reservations'));
    }
    public function getDel($id)
    {
    	# code...
    	$del = reservations::find($id);
    	$del->delete();
    	Session()->flash('success', 'Succsess !! Complete delete');
    	return redirect('admin/reservations/list');
    }
     public function postReservations(Request $request)
    {
        # code...
        $postReservations = new reservations();
        $postReservations->name  = $request->name;
        $postReservations->email = $request->email;
        $postReservations->date  = $request->date;
      
        $postReservations->party_number = $request->party_number;
        $postReservations->remember_token = $request->_token;
        $postReservations->save();
        echo "<script type='text/javascript'>
                alert('You have successfully set the table please check mail');
                window.location.href='/';
            </script>";  
    }
}
