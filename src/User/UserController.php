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

            $user = $this->UserRepository->findByUsername($username);

            if (!empty($user)) {
                if ($user->password == $password) {
                    echo "Login erfolgreich.";
                    die();
                } else {
                    $error = "Das Passwort stimmt nicht.";
                }
            } else {
                $error = "Der Nutzer konnte nicht gefunden werden.";
            }
        };
        $this->render("user/login", [
            'error' => $error
        ]);
    }
}

?>
