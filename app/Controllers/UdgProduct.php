<?php

namespace App\Controllers;
use  App\Models\ProductModel;
class UdgProduct extends BaseController
{
	public function index()
	{
		
		return view('updatingProduct');
	}
	
}