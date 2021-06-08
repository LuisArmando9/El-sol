<?php

namespace App\Controllers;
use  App\Models\SaleModel;
class RqtsSale extends BaseController
{
	public function index()
	{
		
		return view('requestingSale');
	}
	
}