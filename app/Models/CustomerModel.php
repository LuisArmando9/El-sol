<?php namespace App\Models;

use CodeIgniter\Model;
class CustomerModel extends Model
{
	protected $table = 'customer';
	protected $primaryKey = "idCustomer";
	protected $useTimestamps  = true;
	protected $createdField = "CreateAt";
	protected $updatedField = "UpdateAt";
	protected $allowedFields = ['idCustomer', 'FullName', 'Phone', 'Email', 'CreateAt', 'UpdateAt', 'User_idUser'];
	public function save($data):bool
	{
		$session = session();
		$data['User_idUser'] = $session->Id;
		return parent::save($data);
	}
	public function getAll()
	{
		return $this->asObject()->findAll();

	}
	

	
}