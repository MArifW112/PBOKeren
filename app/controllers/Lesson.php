<?php

namespace App\Controllers;

use App\Core\Controller;

class Lesson extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Lesson();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('lesson/index', $data);
	}

	public function input()
	{
		$this->dashboard('lesson/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/lesson');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('lesson/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/lesson');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/lesson');
	}
}
