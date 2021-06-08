<?php

namespace App\Controllers;
use  App\Models\SaleModel;
class CGSale extends BaseController
{
	public function index()
	{
		
		return view('creatingSale');
	}
	
}