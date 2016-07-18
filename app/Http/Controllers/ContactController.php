<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{

	public function index()
	{
		return view('contact');
	}

	// Stores a contact/quote in the database and sends an email.
	public function store(Request $request)
	{

	}

}
