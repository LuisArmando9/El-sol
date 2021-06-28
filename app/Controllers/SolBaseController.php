<?php

namespace App\Controllers;

use  App\Controllers\Constant\FileConstant;
use  App\Models\UserModel;
use App\Controllers\FormRuleSet\ProductRules;
use App\Controllers\FormContent;
use App\Controllers\FormRuleSet\Rule;
use App\Controllers\FormRuleSet\TypeForm;
use App\Controllers\FormRuleSet\UserRules;
use CodeIgniter\HTTP\Request;
use JetBrains\PhpStorm\Pure;
/*doc
    https://stackoverflow.com/questions/15127675/instantiate-a-class-with-an-unknown-name-in-php
    Models: https://codeigniter4.github.io/userguide/models/model.html
    Update file : https://codeigniter4.github.io/userguide/libraries/uploaded_files.html?highlight=form%20file
    Controllers: https://codeigniter.com/user_guide/incoming/controllers.html
    Routing: https://codeigniter.com/user_guide/incoming/routing.html
    https://learnpainless.com/php/codeigniter4/create-custom-404-page-codeigniter-4/
*/

class SolBaseController extends BaseController
{
    protected $routeToCreatingView;
    protected $routeToRequestingView;
    protected $routeToUpdatingView;
    protected $viewToCreate;
    protected $viewToRequest;
    protected $viewToUpdate;
    protected $rules;
    protected $pathToSystemFile;
    protected $pathToLocalHost;
    protected $model;
    protected $hasFile;
    protected $keyToInputFile;
    protected $messageToInvalidInsert;
    protected $id;
    protected $typeForm;
    //======================================================================
    // start view
    //======================================================================
    public function viewForCreating()
    {
        return view($this->viewToCreate);
    }
    public function viewForRequesting()
    {
        $data['data'] = $this->model->getAll();
        return view($this->viewToRequest, $data);
    }
    public function viewForUptading($id, $key = null, $msg = null)
    {
        if (!is_numeric($id)) {
            return  redirect()->to($this->routeToRequestingView);
        }
        $item['data'] = $this->model->where($this->id, $id)->first();
        if ($item) {
            if (!is_null($key) && !is_null($msg)) {
                $item[$key] = $msg;
            }
            return view($this->viewToUpdate, $item);
        }
        return  redirect()->to($this->routeToRequestingView);
    }
    //======================================================================
    // end view
    //======================================================================
    private function generateFileName()
    {
        $file = $this->request->getFile($this->keyToInputFile);
        return $file->getRandomName();
    }
    private function replaceFile($newfilename, $oldfilename)
    {
        try {
            unlink($this->pathToSystemFile . $oldfilename);
            $success = $this->request->getFile($this->keyToInputFile)
                ->move($this->pathToSystemFile, $newfilename);
            return $success;
        } catch (\Exception $e) {
            print($e->getMessage());
        }
    }
    private function updateFile($newdata, $olddata,  $id)
    {
        if (!$this->hasFile) {
            return $this->model->update($id, $newdata);
        }
        if (is_null($this->keyToInputFile)) {
            return false;
        }
        if (!$this->request->getFile($this->keyToInputFile)->isValid()) {
            return $this->model->update($id, $newdata);
        }
        $newdata[$this->keyToInputFile] = $this->generateFileName();
        if ($this->model->update($id, $newdata)) {
            $this->replaceFile($newdata[$this->keyToInputFile], $olddata[$this->keyToInputFile]);
            return true;
        }
        return false;
    }
    //======================================================================
    // Start CRUD
    //======================================================================
    public function creating()
    {
        helper(['form']);
        try {
            if (!$this->validate($this->rules)) {
                $data['validator'] = $this->validator;
                return view($this->viewToCreate, $data);
            }
            $data = $this->request->getVar();
            $this->model = new $this->model();
            if ($this->hasFile) {
                $data[$this->keyToInputFile] = $this->generateFileName();
            }
            if ($this->model->save($data) == true) {
                if ($this->hasFile) {
                    $file = $this->request->getfile($this->keyToInputFile);
                    $file->move($this->pathToSystemFile, $data[$this->keyToInputFile]);
                }
                return redirect()->to($this->routeToRequestingView);
            }
            $data['invalidInsert'] = $this->messageToInvalidInsert;
            return view($this->viewToCreate, $data);
        } catch (\Exception $th) {
            print_r($th->getMessage());
        }
    }


    public function updating($id)
    {
      try {
          $this->model = new $this->model();
          if (!is_numeric($id)) {
              return redirect()->to($this->routeToRequestingView);
          }
          $data = $this->model->where($this->id, $id)->first();
          if ($data) {
              $varsToUpdate = FormContent\Form::getVarToUpdateForm($this->request, $data, $this->keyToInputFile);
  
              if (empty($varsToUpdate)) {
                  return redirect()->to($this->routeToRequestingView);
                  var_dump($varsToUpdate);
              }
              if (!$this->validate(Rule::getRulesToUpdateForm($varsToUpdate, $this->typeForm))) {
  
                  return $this->viewForUptading($id, "validator", $this->validator);
              }
              if ($this->updateFile($varsToUpdate, $data, $id)) {
                  return redirect()->to($this->routeToRequestingView);
              }
              return $this->viewForUptading($id, "invalidInsert", $this->messageToInvalidInsert);
          }
          return redirect()->to($this->routeToRequestingView);
      } catch (\Throwable $th) {
          print($th->getMessage());
      }
    }
    public function deleting($id)
    {
        $this->model = new $this->model();
        $this->model->delete($id);
        return redirect()->to($this->routeToRequestingView);
    }
    //======================================================================
    //End CRUD
    //======================================================================

}
