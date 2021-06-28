<?php

namespace App\Controllers\FormRuleSet;

class CustomerRules
{
    public  const RULES =
    [
        "FullName" =>
        [
            'rules' => 'required|alpha_space|min_length[4]|max_length[255]',
            'errors' =>
            [
                'required' => 'El nombre es requerido',
                'alpha' => 'El nombre debe contener solo caracters',
                'max_length' => 'La cantidad minima es de 4 caracteres'
            ]
        ],
        "Email" =>
        [
            'rules' => 'required|valid_email',
            'errors' =>
            [
                'required' => 'El campo {field} es invalido',
                'valid_email' => "El email ingresado es incorrecto"
            ]
        ],
        "Phone" =>
        [
            'rules' => 'required|numeric|min_length[10]|max_length[10]',
            'errors' =>
            [
                'required' => 'El campo {field} es requerido',
                'numeric' => 'El campo {field} es incorrecto',
                'min_length' => 'El campo {field} es incorrecto',
                'max_length' => 'El campo {field} es incorrecto',
            ]
        ],

    ];
}
