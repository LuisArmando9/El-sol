<?php

namespace App\Controllers;

use  App\Controllers\Constant\FileConstant;
use  App\Models\UserModel;
use App\Controllers\FormRuleSet\ProductRules;
use App\Controllers\FormContent;
use App\Controllers\FormRuleSet\Rule;
use App\Controllers\FormRuleSet\TypeForm;
use App\Controllers\FormRuleSet\UserRules;
use CodeIgniter\Model;
use JetBrains\PhpStorm\Pure;
/*doc
    Models: https://codeigniter4.github.io/userguide/models/model.html
    Update file : https://codeigniter4.github.io/userguide/libraries/uploaded_files.html?highlight=form%20file
    Controllers: https://codeigniter.com/user_guide/incoming/controllers.html
    Routing: https://codeigniter.com/user_guide/incoming/routing.html
    https://learnpainless.com/php/codeigniter4/create-custom-404-page-codeigniter-4/
*/

class UserController extends SolBaseController
{
    //======================================================================
    // start view
    //======================================================================
    protected $routeToCreatingView = "";
    protected $routeToRequestingView = "/viewToRequestUser";
    protected $routeToUpdatingView = "";
    protected $messageToInvalidInsert = "Error al insertar los datos, verifiqué sus campos";
    protected $viewToCreate = 'creatingUser';
    protected $viewToRequest = 'requestingUser';
    protected $viewToUpdate = 'updatingUser';
    protected $rules = UserRules::RULES;
    protected $pathToSystemFile = FileConstant::PATH_TO_USER_IMAGES_TO_FILE_SYSTEM;
    protected $pathToLocalHost = FileConstant::PATH_TO_PRODUCT_IMAGES_TO_LOCALHOST;
    protected $hasFile = true;
    protected $keyToInputFile = 'Photo';
    protected $id = "idUser";
    protected $typeForm = TypeForm::USER;
    function __construct()
    {
        $this->model = new UserModel();
        
    }


}
