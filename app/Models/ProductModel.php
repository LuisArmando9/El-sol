<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Controllers\Constant\FileConstant;
class ProductModel extends Model
{
	protected $table = 'product';
	protected $primaryKey = "idProduct";
	protected $useTimestamps  = true;
	protected $createdField = "CreateAt";
	protected $updatedField = "UpdateAt";
	protected $allowedFields = [
		'idProduct',
		'MinimumStock',
		'Name',
		'Code',
		'State',
		'Category',
		'Stock',
		'Iva',
		'PricePerUnit',
		'Description',
		'Path',
		'CreateAt',
		'UpdateAt',
		'IdUser'
	];
	public function save($data): bool
	{
		$session = session();
		$data['IdUser'] = $session->Id;
		// if(parent::save($data))
		// {
		// 	$provider = new ProductToProviderModel();
		// 	$last = $this->asObject->where('Code', $data['Code'])->first();
		// 	if($last)
		// 	{
		// 		$providerToProduct= array("idProduct"=> $last->idProduct, "idProvider"=>$data['idProvider']);
		// 		$provider->save($providerToProduct);

		// 	}
		// 	return true;
		// }
		return parent::save($data);
	}
	public function getAll()
	{
		$products =  $this->asObject()->findAll();
		for($i=0; $i<count($products); $i++)
		{
			$products[$i]->Path =FileConstant::PATH_TO_PRODUCT_IMAGES_TO_LOCALHOST. $products[$i]->Path ;
		}
		return $products;
	}
}
