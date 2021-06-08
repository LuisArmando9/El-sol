<?php

namespace App\Controllers;
use  App\Models\ProductModel;
class Inventory extends BaseController
{
	public function index()
	{
		
		return view('inventory');
	}
	
}