<?php

namespace Cinemil\Http\Controllers;

use Illuminate\Http\Request;

use Cinemil\Http\Requests;

class FrontController extends Controller
{
    //

	public function index()
	{
		return view('index');
	}

	public function reviews()
	{
		return view('reviews');
	}


}
