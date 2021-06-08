<?php

namespace App\Controllers;
use  App\Models\VendorModel;
class RqtsVendor extends BaseController
{
	public function index()
	{
		
		return view('requestingVendor');
	}
	
}