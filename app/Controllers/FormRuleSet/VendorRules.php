<?php

namespace App\Controllers\FormRuleSet;

class VendorRules
{
    public  const RULES =
    [
        "BusinessName" =>
        [
            'rules' => 'required|alpha_space|min_length[4]|max_length[255]',
            'errors' =>
            [
                'required' => 'El nombre es requerido',
                'alpha' => 'El nombre debe contener solo caracters',
                'max_length' => 'La cantidad minima es de 4 caracteres'
            ]
        ],
        "Address" =>
        [
            'rules' => 'required',
            'errors' =>
            [
                'required' => 'La dirección es requerida'
            ]
        ],
        "AgentNameOfBusiness" =>
        [
            'rules' => 'required|alpha_space|min_length[6]|max_length[255]',
            'errors' =>
            [
                'required' => 'El nombre del representante es requerido',
                'alpha' => 'El nombre del representante debe contener solo caracters',
                'max_length' => 'El nombre del representante debe contener minimo 6 caracteres'
            ]
        ],
        "AgentPhone" =>
        [
            'rules' => 'required|numeric|min_length[10]|max_length[10]',
            'errors' =>
            [
                'required' => 'El teléfono de la empresa  es requerido',
                'numeric' => 'El teléfono de la empresaes incorrecto',
                'min_length' => 'El teléfono de la empresa es incorrecto',
                'max_length' => 'El teléfono de la empresa es incorrecto',
            ]
        ],
        "BusinessPhoneNumber" =>
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
        "AgentEmail" =>
        [
            'rules' => 'required|valid_email',
            'errors' =>
            [
                'required' => 'El campo {field} es invalido',
                'valid_email' => "El email ingresado es incorrecto"
            ]
        ],
        "BusinessEmail" =>
        [
            'rules' => 'required|valid_email',
            'errors' =>
            [
                'required' => 'El campo {field} es invalido',
                'valid_email' => "El email ingresado es incorrecto"
            ]
        ],

        "RFC" =>
        [
            'rules' => 'required|regex_match[/^[A-Z]{4}[0-9]{6}\w{3}$/]',
            'errors' =>
            [
                'regex_match' => 'El RFC es incorrecto',
                'required' => "El RFC es requerido"

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
        ],
        "WebPage" =>
        [
            'rules' => 'valid_url|required' ,
            'errors' =>
            [
                'regex_match' => 'La url es incorrecta',
                'required' => 'url es incorrecta'

            ]
        ]
    ];
}
