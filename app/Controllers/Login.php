<?php namespace App\Controllers;

use  App\Models\UserModel;
class Login
{
	public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
		$session = session();
        $session->destroy();
        return redirect()->to('/');

	}
	private function enableSession($userdata)
	{

		if(isset($userdata['UserName']))
		{
				$session = session();
				$sessionData =
				[
					'UserName' => $userdata['UserName'],
					'FullName' => $userdata['FullName'],
					'Rol' => $userdata['Type'],
					'Photo' => $userdata['Photo'],
					'isLoggedIn' => true

				];
			$session->set($sessionData);
		}

	}
	public function authentication($id_or_username, $password): bool
    {
		$session = session();
		$userModel = new UserModel();
		$isCorrectPassword = false;
		if($userModel->existUser($id_or_username))
		{
			$isCorrectPassword = password_verify($password, $userModel->getUserData()['Password']);
			if($isCorrectPassword)
			{
				$this->enableSession($userModel->getUserData());
			}
		}
		return $isCorrectPassword;
	}



	
}