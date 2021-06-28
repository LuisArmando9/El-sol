<?php

namespace App\Controllers;

use  App\Controllers\Constant\FileConstant;
use  App\Models\CustomerModel;
use App\Controllers\FormRuleSet\ProductRules;
use App\Controllers\FormContent;
use App\Controllers\FormRuleSet\Rule;
use App\Controllers\FormRuleSet\TypeForm;
use App\Controllers\FormRuleSet\CustomerRules;
use App\Controllers\FormRuleSet\VendorRules;
use App\Models\VendorModel;
use CodeIgniter\Model;
use JetBrains\PhpStorm\Pure;
class VendorController extends SolBaseController
{
  
    protected $routeToCreatingView = "";
    protected $routeToRequestingView = "/viewToRequestVendor";
    protected $routeToUpdatingView = "";
    protected $messageToInvalidInsert = "Error al insertar los datos, verifiqué sus campos";
    protected $viewToCreate = 'creatingVendor';
    protected $viewToRequest = 'requestingVendor';
    protected $viewToUpdate = 'updatingVendor';
    protected $rules = VendorRules::RULES;
    protected $pathToSystemFile = FileConstant::PATH_TO_VENDOR_IMAGES_TO_FILE_SYSTEM;
    protected $pathToLocalHost = FileConstant::PATH_TO_VENDOR_IMAGES_TO_LOCALHOST;
    protected $hasFile = true;
    protected $keyToInputFile = "Photo";
    protected $id = "idProvider";
    protected $typeForm = TypeForm::VENDORS;
    function __construct()
    {
        $this->model = new VendorModel();
        
    }



}
