<?php namespace App\Models;

use CodeIgniter\Model;
class ProductModel extends Model
{
	protected $table = 'product';
	protected $allowedFields = ['idProduct', 'Name', 'Code', 'State', 'Category', 'Stock', 'IVA', 'Price_Per_Unit', 'Description', 'Path', 'Create_At', 'Update_At', 'IdUser'];
	

	
}