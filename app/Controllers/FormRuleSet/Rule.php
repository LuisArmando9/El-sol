<?php namespace App\Controllers\FormRuleSet;

use CodeIgniter\Validation\Rules;

class Rule
{
	public static function getRules($request, $rules)
    {
        $newRules = [];
        
        try 
        {
            foreach($request as $key => $value)
            {
                print($key);
                $newRules[$key] = $rules[$key];
            }
        } catch (\Exception $ex) 
        {
            
          return null;
        }
        return $newRules;
    }
	public static function getRulesToUpdateForm($request, $formtype)
    {
        return match($formtype)
        {
            TypeForm::PRODUCT => Rule::getRules($request, ProductRules::RULES),
            TypeForm::USER =>  Rule::getRules($request, UserRules::RULES),
            TypeForm::CUSTOMER => Rule::getRules($request, CustomerRules::RULES),
            TypeForm::VENDORS => Rule::getRules($request, VendorRules::RULES),
            default => null,
        };
    }
	
}