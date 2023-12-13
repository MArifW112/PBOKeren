<?php

namespace App\Controllers;

use App\Core\Controller;

class Games extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Game();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('games/index', $data);
	}

	public function input()
	{
		$this->dashboard('games/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/games');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('games/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/games');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/games');
	}
}
