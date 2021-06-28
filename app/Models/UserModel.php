<?php

namespace App\Models;

use CodeIgniter\Model;
use  App\Controllers\Constant\FileConstant;
class UserModel extends Model
{
	protected $table = 'user';
	protected $primaryKey = "idUser";
	protected $useTimestamps  = true;
	protected $createdField = "CreateAt";
	protected $updatedField = "UpdateAt";
	protected $allowedFields = ['idUser', 'Password', 'UserName', 'Type', 'FullName', 'Email', 'Phone', 'Photo'];
	private $userData = [];

	public function existUser($id_or_username)
	{

		$data = [];
		if (is_numeric($id_or_username)) {
			$data = $this->where('idUser', $id_or_username)->first();
		} else {
			$data = $this->where('UserName', $id_or_username)->first();
		}
		if ($data) {
			$this->userData = $data;
			return true;
		}
		return false;
	}
	public function getUserData()
	{
		return $this->userData;
	}
	public function save($data): bool
	{
		$where = "UserName='{$data['UserName']}' OR Email='{$data['Email']}'";
		$result = $this->where($where)->first();
		if ($result) {
			return false;
		}
		$data['Password'] = password_hash($data['Password'], PASSWORD_DEFAULT);
		return parent::save($data);
	}
	public function getAll()
	{
		$users = $this->asObject()->findAll();
		for($i = 0; $i<count($users); $i++)
        {
            $users[$i]->Photo = FileConstant::PATH_TO_USER_IMAGES_TO_LOCALHOST.$users[$i]->Photo;
        }
		return $users;

	}
}
