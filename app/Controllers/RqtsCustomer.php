<?php

namespace App\Controllers;
use  App\Models\CustomerModel;
class RqtsCustomer extends BaseController
{
	public function index()
	{
		
		return view('requestingCustomer');
	}
	
}