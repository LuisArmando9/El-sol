<?php namespace App\Models;

use CodeIgniter\Model;
class ProductToProviderModel extends Model
{
	protected $table = 'product_to_provider';
	protected $allowedFields = [ 'idProduct', 'idProvider'];
	protected $useTimestamps  = true;
	protected $createdField = "CreateAt";
	protected $updatedField = "UpdateAt";
	

	
}