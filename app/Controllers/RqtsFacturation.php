<?php

namespace App\Controllers;
use  App\Models\FacturationModel;
class RqtsFacturation extends BaseController
{
	public function index()
	{
		
		return view('requestingFacturation');
	}
	
}