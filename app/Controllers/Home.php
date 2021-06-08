<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if(session()->isLoggedIn)
			return view("Dashboard");
		return view('login');
	}
	public function logIn()
	{
		$session = session();
		$login = new Login();
		$username = $this->request->getVar('UserName');
		$password = $this->request->getVar('Password');
		if($login->authentication($username, $password))
		{
			return redirect()->to('/Dashboard');
		}else
		{

			$session->setFlashdata('msg', 'Credenciales incorrectas');
			return redirect()->to('/');
		}

	}
	public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
		$login = new Login();
		return $login->logout();
	}
	
}
