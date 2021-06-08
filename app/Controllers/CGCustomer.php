<?php

namespace App\Controllers;

use  App\Models\CustomerModel;
class CGCustomer extends BaseController
{
	public function index()
	{
		
		return view('creatingCustomer');
	}
	
}
