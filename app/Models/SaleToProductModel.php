<?php namespace App\Models;

use CodeIgniter\Model;
class SaleToProductModel extends Model
{
	protected $table = 'sale_to_product';
	protected $allowedFields = ['Sale_idSale', 'Product_idProduct', 'Number_Products', 'Create_At'];
	

	
}