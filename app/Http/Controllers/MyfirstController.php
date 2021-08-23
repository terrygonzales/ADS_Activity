<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
    public function index()
    {
    	$sum= 5+2;
    	return view ('resultpage',['result'=> $sum, "title' => "Sample page title"]);
    }
}
   