<?php

namespace App\Controllers;

use  App\Controllers\Constant\FileConstant;
use  App\Models\ProductModel;
use App\Models\VendorModel;
use App\Controllers\FormRuleSet\ProductRules;
use App\Controllers\FormContent;
use App\Controllers\FormRuleSet\Rule;
use App\Controllers\FormRuleSet\TypeForm;
use JetBrains\PhpStorm\Pure;
/*doc
    Models: https://codeigniter4.github.io/userguide/models/model.html
    Update file : https://codeigniter4.github.io/userguide/libraries/uploaded_files.html?highlight=form%20file
    Controllers: https://codeigniter.com/user_guide/incoming/controllers.html
    Routing: https://codeigniter.com/user_guide/incoming/routing.html
    https://learnpainless.com/php/codeigniter4/create-custom-404-page-codeigniter-4/
*/

class ProductController extends SolBaseController
{
    protected $routeToRequestingView = "/viewToRequestProduct";
    protected $messageToInvalidInsert = "Error al insertar los datos, verifiqué sus campos";
    protected $viewToCreate = 'creatingProduct';
    protected $viewToRequest = 'requestingProduct';
    protected $viewToUpdate = 'updatingProduct';
    protected $rules = ProductRules::RULES;
    protected $pathToSystemFile = FileConstant::PATH_TO_PRODUCT_IMAGES_TO_FILE_SYSTEM;
    protected $pathToLocalHost = FileConstant::PATH_TO_PRODUCT_IMAGES_TO_LOCALHOST;
    protected $hasFile = true;
    protected $keyToInputFile = 'Path';
    protected $id = "idProduct";
    protected $typeForm = TypeForm::PRODUCT;
    function __construct()
    {
        $this->model = new ProductModel();
        
    }
    // public function viewForCreating()
    // {
    //     $vendorModel = new VendorModel();
    //     $getVendors = $vendorModel->select($this->id, "BusinessName")->asObject();
    //     foreach($getVendors as $vendor)
    //     {
    //           print_r($getVendors);
    //     }
      
    //     return view($this->viewToCreate);
        
    // }

}