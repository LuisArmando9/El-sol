<?php

namespace App\Controllers;

use  App\Models\Facturation;
class CGFacturation  extends BaseController
{
	public function index()
	{
		
		return view('creatingFacturation');
	}
	
}