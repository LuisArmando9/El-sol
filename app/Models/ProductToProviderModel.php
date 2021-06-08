<?php namespace App\Models;

use CodeIgniter\Model;
class ProductToProviderModel extends Model
{
	protected $table = 'product_to_provider';
	protected $allowedFields = [ 'Product_idProduct', 'Provider_idProvider'];
	

	
}