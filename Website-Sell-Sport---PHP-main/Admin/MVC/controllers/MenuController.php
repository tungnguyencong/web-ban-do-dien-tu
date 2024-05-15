<?php
require_once("MVC/Models/menu.php");
class MenuController
{
	var $menu_model;
	function __construct()
	{
		$this->menu_model = new Menu();
	}

	public function list()
	{
		$data = array();
		$data = $this->menu_model->All(); 
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/list.php');
	}

	public function add()
	{
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/add.php');
	}
	public function store()
	{
		$data = array(
			'TenMenu' => $_POST['TenMenu'],
			'Link' => $_POST['Link'],
			'NoiDung' => $_POST['NoiDung'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->menu_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->menu_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->menu_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->menu_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
		$data = array(
			'id' => $_POST['id'],
			'TenMenu' => $_POST['TenMenu'],
			'Link' => $_POST['Link'],
			'NoiDung' => $_POST['NoiDung'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->menu_model->update($data);
	}
}
