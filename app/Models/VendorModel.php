<?php

namespace App\Models;

use CodeIgniter\Model;
use  App\Controllers\Constant\FileConstant;
class VendorModel extends Model
{
	protected $table = 'provider';
	protected $primaryKey = "idProvider";
	protected $useTimestamps  = true;
	protected $createdField = "CreateAt";
	protected $updatedField = "UpdateAt";
	protected $allowedFields = [
		'idProvider',
		'BusinessName',
		'Address',
		'WebPage',
		'AgentNameOfBusiness',
		'BusinessPhoneNumber',
		'AgentEmail',
		'RFC',
		'BusinessEmail',
		'CreateAt',
		'UpdateAt',
		'IdUser',
		'Photo',
		'AgentPhone'
	];
	public function save($data):bool
	{
		$session = session();
		$data['IdUser'] = $session->Id;
		return parent::save($data);
	}
	public function getAll()
	{
		$vendors = $this->asObject()->findAll();
		for($i = 0; $i<count($vendors); $i++)
        {
            $vendors[$i]->Photo = FileConstant::PATH_TO_VENDOR_IMAGES_TO_LOCALHOST.$vendors[$i]->Photo;
        }
		return $vendors;
	}
}
