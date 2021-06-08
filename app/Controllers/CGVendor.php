<?php

namespace App\Controllers;
use  App\Models\VendorModel;
class CGVendor extends BaseController
{
	public function index()
	{
		
		return view('creatingVendor');
	}
	
}