<?php

namespace App\Controllers;

use  App\Models\ProductModel;
use App\Controllers\FormRuleSet\ProductRules;
class CGProduct extends BaseController
{
	public function index(): string
    {
		return view('creatingProduct');
	}
	public function creating():string
    {
         helper(['form']);

         $session = session();
         if($this->validate(ProductRules::RULES)) {

             $data['success'] = "Se inserto correctamente el producto";
         }
         else
             $data['validator'] = $this->validator;

        return view('creatingProduct',  $data);

    }
	
}