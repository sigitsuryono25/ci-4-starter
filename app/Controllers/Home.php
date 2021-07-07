<?php

namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		$data['admin'] = $this->adminModel->where('username', 'surelabsid')->findAll();
		$master['page'] = view("page", $data);
		return view('master-page', $master);
	}
}
