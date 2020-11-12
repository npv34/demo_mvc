<?php
namespace app\controllers;

use app\models\UserModel;

class UserController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getAll() {
        $users = $this->userModel->getAll();
        include_once 'view/users/list.php';
    }

    public function create() {
        include_once 'view/users/add.php';
    }

    public function store() {
        header('location: index.php?page=users&action=show-list');
    }

    function delete() {
        $id = $_REQUEST['user-id'];
        $this->userModel->delete($id);
        header('location: index.php?page=users&action=show-list');
    }

    function update() {
        //show view update
    }

    function edit() {
        //thuc hien chuc nang edit

        //quay tro lai trang danh sach
    }
}