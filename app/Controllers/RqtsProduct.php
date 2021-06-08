<?php

namespace App\Controllers;
use  App\Models\ProductModel;
class RqtsProduct extends BaseController
{
	public function index()
	{
		
		return view('requestingProduct');
	}
	
}