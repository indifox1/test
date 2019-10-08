<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../classes/Controller.php';

class UsersController extends Controller
{
    public function index()
    {
        $model = new User();
        $users = $model->all();

        return $this->view('users/index');

    }
}