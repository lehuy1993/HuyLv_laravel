<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservations;
use App\cate;
use App\product;

class PageController extends Controller
{
    //
    public function postReservations(Request $request)
    {
    	# code...
    	$postReservations = new reservations();
    	$postReservations->name  = $request->name;
    	$postReservations->email = $request->email;
    	$postReservations->date  = $request->date;
    	$postReservations->status  = 0;
    	$postReservations->party_number = $request->party_number;
    	$postReservations->remember_token = $request->_token;
    	$postReservations->save();
       
    	echo "<script type='text/javascript'>
                alert('You have successfully set the table please check mail');
                window.location.href='/';
            </script>";  
    }
    
}
