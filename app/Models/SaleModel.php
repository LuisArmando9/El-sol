<?php namespace App\Models;

use CodeIgniter\Model;
use  App\Models\SaleModel;
class SaleModel extends Model
{
	protected $table = 'sale';
	protected $allowedFields = ['idSale', 'Products_Number', 'Total', 'Observation', 'Create_At', 'IdUser'];
	

	
}