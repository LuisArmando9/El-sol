<?php namespace App\Models;

use CodeIgniter\Model;
class UserModel extends Model
{
	protected $table = 'user';
	protected $allowedFields = ['Password', 'UserName'];
	private $userData = [];

	public function existUser($id_or_username)
	{

		$data = [];
		if(is_numeric($id_or_username))
		{
			$data = $this->where('idUser', $id_or_username)->first();
		}
		else
		{
			$data = $this->where('UserName', $id_or_username)->first();
		}
		if($data)
		{
			$this->userData = $data;
			return true;
		}	
		return false;
	}
	public function getUserData()
	{
		return $this->userData;
	}
	

	
}