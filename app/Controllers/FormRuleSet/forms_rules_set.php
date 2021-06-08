<?php
	
	class FormRulesSet
	{
		public $login =
		[
			'username' =>
			[
				'rules' => 'required|min_length[8]|alpha_numeric',
				'errors' => 
				[
					'rules' => 'Su campo %s es invalido'
				]
			],
			'password' =>
			[
				'rules' => 'required|min_length[8]|alpha_numeric',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				]
			],
		];
		public $registerProduct =
		[
			"Name"=>
			[
				'rules' => 'required|alpha|min_length[4]|max_length[255]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido',
				 	'alpha' => 'El campo debe contener solo caracters',
				 	'max_length' => 'Rules.Name.max_length'
				]
			], 
			"Code"=>
			[
				'rules' = 'required|alpha_numeric|min_length[10]|max_length[14]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				 	'alpha' => 'El campo debe contener solo caracters',
				 	'max_length' => 'Rules.Code.max_length',
				 	'min_length' => 'Rules.Code.min_length'
				]
			], 
			"State"=>
			[
				'rules' = 'required|regex_match[NON-ACTIVE|ACTIVE]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				]
			], 
			"Category"=>
			[
				'rules' = 'required|regex_match[PULSERAS|CARTERAS]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				]
			],
			"Inventory"=>
			[
				'rules' = 'required|regex_match[INVENTORY-MANAGEMENT|NOT-INVENTORY-MANAGEMENT]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				]
			], 
			"Stock"=>
			[
				'rules' => 'required|integer|is_natural',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				 	'integer' => 'Debe ser entero, mayor a 0'
				]
			], 
			"MinimumStock"=>
			[
				'rules' => 'required|integer|is_natural',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido',
				 	'integer' => 'Debe ser entero, mayor a 0'
				]
			], 
			"IvaType"=>
			[
				'rules' => 'required|regex_match[ACTIVE|NON-ACTIVE]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'

				]
			], 
			"Iva"=>
			[
				'rules' => 'required|integer|is_natural|max_length[2]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				 	'integer' => 'Debe ser entero, mayor a 0'
				]
			], 
			"PricePerUnit"=>
			[
				'rules' => 'required|integer|is_natural',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				 	'integer' => 'Debe ser entero, mayor a 0'
				]
			], 
			"Description"=>
			[
				'rules' => 'required',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido'
				]
			], 
			"Image"=>
			[
				'rules' => 'uploaded[Image]|max_size[Image,1024]|ext_in[Image,jpg,jpeg,gif, png]',
				'errors' =>
				[
				 	'required' => 'El campo {field} es invalido',
				 	'max_size'=>'El tamaño maximo es de un 1MB',
				 	'ext_in' => 'Tipo de imagen esincorrecta'
				]
			]
		];
		
		
	}
?>