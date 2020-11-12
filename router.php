<?php

$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : null;
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : null;

$userController = new \app\controllers\UserController();


switch ($page) {
    case 'users':
        switch ($action) {
            case 'show-list':
                $userController->getAll();
                break;
            case 'create':
                $userController->create();
                break;
            case 'store':
                $userController->store();
                break;
            case 'delete':
                $userController->delete();
                break;
            case 'update':
                $userController->update();
                break;
            case 'edit':
                $userController->edit();
                break;
        }
        break;
}