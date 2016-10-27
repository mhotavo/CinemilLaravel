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

	public function series()
	{
		return view('series');
	}

	public function list()
	{
		return view('list');
	}

	public function news()
	{
		return view('news');
	}

	public function single()
	{
		return view('single');
	}

	public function contact()
	{
		return view('contact');
	}


	public function genres()
	{
		return view('genres');
	}

	public function shortcodes()
	{
		return view('short-codes');
	}


	public function admin()
	{
		return view('admin.index');
	}
}
