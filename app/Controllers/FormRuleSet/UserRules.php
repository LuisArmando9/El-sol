<?php

namespace App\Controllers\FormRuleSet;

class UserRules
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
        "UserName" =>
        [
            'rules' => 'required|alpha_numeric|min_length[5]|max_length[25]',
            'errors' =>
            [
                'required' => 'El campo {field} es requerido',
                'alpha' => 'El código debe contener ser alfanumerico',
                'max_length' => 'La cantidad {field} minima debe ser de 25',
                'min_length' => 'La cantidad {field} minima debe ser de 5'
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
        "Password" =>
        [
            'rules' => 'required|alpha_numeric|min_length[6]',
            'errors' =>
            [
                'required' => 'El campo {field} es invalido',
                'alpha_numeric' => "El campo {field} debe ser alfanúmerico",
                'min_length' => "El campo {field} debe contener minimo 6 caracteres"
            ]
        ],
        "ConfirmPassword" =>
        [
            'rules' => 'required|alpha_numeric|min_length[6]|matches[Password]',
            'errors' =>
            [
                'required' => 'El campo {field} es invalido',
                'alpha_numeric' => "El campo {field} debe ser alfanúmerico",
                'min_length' => "El campo {field} debe contener minimo 6 caracteres",
                'matches' => "Las contraseñas debe ser iguales"
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
        "Type" =>
        [
            'rules' => 'required|regex_match[ADMIN|NON-ADMIN]',
            'errors' =>
            [
                'required' => 'El campo {field} es invalido'

            ]
        ],
        "Photo" =>
        [
            'uploaded[Photo]',
            'mime_in[Photo,image/jpg,image/jpeg,image/gif,image/png]',
            'max_size[Photo,4096]',
            'errors' =>
            [
                'required' => 'La imagen es requerida',
                'max_size' => 'El tamaño maximo es de un 4MB',
                'mime_in' => 'Tipo de imagen es incorrecta'
            ]
        ]
    ];
}
