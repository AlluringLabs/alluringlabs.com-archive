<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
	
	public function index()
	{
		return view('services');
	}

	public function development()
	{
		return view('services.development');
	}

	public function design()
	{
		return view('services.design');
	}

	public function consulting()
	{
		return view('services.consulting');
	}

}
