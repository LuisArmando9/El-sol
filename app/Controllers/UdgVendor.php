<?php

namespace App\Controllers; 
use  App\Models\VendorModel;
class UdgVendor extends BaseController
{ 
	public function index()
	{
		return view('updatingVendor');
	}
	
}