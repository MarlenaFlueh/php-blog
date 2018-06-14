<?php

namespace App\User;
use App\Core\AbstractController;

class UserController extends AbstractController
{
    public function __construct(userRepository $userRepository)
    {
        $this->UserRepository = $userRepository;
    }

    public function login()
    {
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            var_dump($username);
            var_dump($password);
        };
        $this->render("user/login", []);
    }
}

?>