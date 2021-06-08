<?php namespace App\Models;

use CodeIgniter\Model;
class VendorModel extends Model
{
	protected $table = 'provider';
	protected $allowedFields = ['idProvider', 'Business_Name', 'Address', 'Webpage', 'Agent_Name_Of_Business', 'Business_Phone_Number', 'Agent_Email', 'RFC', 'Business_Email', 'Create_At', 'Update_At', 'IdUser'];
	

	
}