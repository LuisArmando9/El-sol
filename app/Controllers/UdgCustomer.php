<?php

namespace App\Controllers;
use  App\Models\CustomerModel;
class UdgCustomer extends BaseController
{
	public function index()
	{
		
		return view('updatingCustomer');
	}
	
}