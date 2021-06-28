<?php

namespace App\Controllers\FormContent;

use Exception;

class Form
{
    public static function getContentOfInputsProductForm($request, $filename = null): array
    {
        $session = session();
        return array(
            "Name" => $request->getVar("Name"),
            "Code" => $request->getVar("Code"),
            "State" => $request->getVar("State"),
            "Category" => $request->getVar("Category"),
            "Stock" => $request->getVar("Stock"),
            "IVA" => $request->getVar("Iva"),
            "PricePerUnit" => $request->getVar("PricePerUnit"),
            "Description" => $request->getVar("Description"),
            "Path" => $request->getVar("file"),
            "Inventory" => $request->getVar("Inventory"),
            "IvaType" => $request->getVar("IvaType"),
            "MinimumStock" => $request->getVar("MinimumStock"),
            "Path" =>  $filename,
            "IdUser" => $session->Id
    
        );
    }
    public static function getVarToUpdateForm($request, $data, $keyToFileName=null)
    {
        $content = $request->getVar();
        $newContent = [];
        try {
            foreach ($content as $key => $value) {
                if (!empty($value) && !is_null($value)) {
                    if (strcmp($data[$key], $value) != 0) {
                        $newContent[$key] = $content[$key];
                    }
                }
            }
        } catch (Exception $e) {
            return null;
        }
        if(!is_null($keyToFileName))
        {
           if($request->getFile($keyToFileName)->isValid())
           {
             $newContent[$keyToFileName] = $request->getFile($keyToFileName)->getName();
           }
        }
        
        return $newContent;
    }
}
