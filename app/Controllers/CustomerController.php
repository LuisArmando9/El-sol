<?php

namespace App\Controllers;

use  App\Controllers\Constant\FileConstant;
use  App\Models\CustomerModel;
use App\Controllers\FormRuleSet\ProductRules;
use App\Controllers\FormContent;
use App\Controllers\FormRuleSet\Rule;
use App\Controllers\FormRuleSet\TypeForm;
use App\Controllers\FormRuleSet\CustomerRules;
use CodeIgniter\Model;
use JetBrains\PhpStorm\Pure;
class CustomerController extends SolBaseController
{
  
    protected $routeToCreatingView = "";
    protected $routeToRequestingView = "/viewToRequestCustomer";
    protected $routeToUpdatingView = "";
    protected $messageToInvalidInsert = "Error al insertar los datos, verifiqué sus campos";
    protected $viewToCreate = 'creatingCustomer';
    protected $viewToRequest = 'requestingCustomer';
    protected $viewToUpdate = 'updatingCustomer';
    protected $rules = CustomerRules::RULES;
    protected $pathToSystemFile = FileConstant::PATH_TO_USER_IMAGES_TO_FILE_SYSTEM;
    protected $pathToLocalHost = FileConstant::PATH_TO_PRODUCT_IMAGES_TO_LOCALHOST;
    protected $hasFile = False;
    protected $keyToInputFile = null;
    protected $id = "idCustomer";
    protected $typeForm = TypeForm::CUSTOMER;
    function __construct()
    {
        $this->model = new CustomerModel();
        
    }


}
