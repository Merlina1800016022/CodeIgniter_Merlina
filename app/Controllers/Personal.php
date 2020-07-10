<?php namespace App\Controllers;
use App\Models\Personal_m;


class Personal extends BaseController
{
	public function index()
	{
		return view('Login');
	}

	//--------------------------------------------------------------------
	public function signup()
	{
		return view ('signup');
	}
	public function save()
	{
		$Personal_m = new Personal_m ();
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$Personal_m->insert($_POST);
		return $this->response->redirect(site_url('Personal'));
	}
}
