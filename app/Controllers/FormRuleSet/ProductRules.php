<?php

namespace App\Controllers\FormRuleSet;

class ProductRules
{
	public  const RULES =
	[
		"Name" =>
		[
			'rules' => 'required|alpha_space|min_length[4]|max_length[255]',
			'errors' =>
			[
				'required' => 'El nombre es requerido',
				'alpha' => 'El nombre debe contener solo caracters',
				'max_length' => 'La cantidad minima es de 4 caracteres'
			]
		],
		"Code" =>
		[
			'rules' => 'required|alpha_numeric|min_length[10]|max_length[14]',
			'errors' =>
			[
				'required' => 'El campo es requerido',
				'alpha' => 'El código debe contener ser alfanumerico',
				'max_length' => 'La cantidad minima debe ser de 10',
				'min_length' => 'La cantidad máxima debe ser de 14'
			]
		],
		"State" =>
		[
			'rules' => 'required|regex_match[NON-ACTIVE|ACTIVE]',
			'errors' =>
			[
				'required' => 'El campo {field} es invalido'
			]
		],
		"Category" =>
		[
			'rules' => 'required|regex_match[PULSERAS|CARTERAS]',
			'errors' =>
			[
				'required' => 'El campo {field} es invalido'
			]
		],
		"Inventory" =>
		[
			'rules' => 'required|regex_match[INVENTORY-MANAGEMENT|NOT-INVENTORY-MANAGEMENT]',
			'errors' =>
			[
				'required' => 'El campo {field} es invalido'
			]
		],
		"Stock" =>
		[
			'rules' => 'required|integer|is_natural',
			'errors' =>
			[
				'required' => 'El campo {field} es requerido',
				'integer' => 'El stock debe ser entero, mayor a 0'
			]
		],
		"MinimumStock" =>
		[
			'rules' => 'required|integer|is_natural',
			'errors' =>
			[
				'required' => 'El campo {field} es invalido',
				'integer' => 'Lo minimo de stock ser entero, mayor a 0'
			]
		],
		"IvaType" =>
		[
			'rules' => 'required|regex_match[ACTIVE|NON-ACTIVE]',
			'errors' =>
			[
				'required' => 'El campo {field} es invalido'

			]
		],
		"Iva" =>
		[
			'rules' => 'required|integer|is_natural|max_length[2]',
			'errors' =>
			[
				'required' => 'El campo {field} es requerido',
				'integer' => 'El porcentaje del iva debe ser entero, mayor a 0',
				'max_length' => 'Solo puede agregar hasta el 99 % de iva'
			]
		],
		"PricePerUnit" =>
		[
			'rules' => 'required|integer|is_natural',
			'errors' =>
			[
				'required' => 'El campo  precio por unidad es requerido',
				'integer' => 'Debe ser entero, mayor a 0'
			]
		],
		"Description" =>
		[
			'rules' => 'required',
			'errors' =>
			[
				'required' => 'El campo {field} es invalido'
			]
		],
		"Path" =>
		[
			'uploaded[Path]',
			'mime_in[Path,image/jpg,image/jpeg,image/gif,image/png]',
			'max_size[Path,4096]',
			'errors' =>
			[
				'required' => 'La imagen es requerida',
				'max_size' => 'El tamaño maximo es de un 4MB',
				'mime_in' => 'Tipo de imagen es incorrecta'
			]
		]
		// "idProvider" => [
		// 	'rules' => 'required|numeric',
		// 	'errors' =>
		// 	[
		// 		'required' => 'El nombre es requerido',
		// 		'numeric' => 'El provedor es incorrecto',
		// 	]

		//]

	];
}
