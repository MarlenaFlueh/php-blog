<?php

namespace App\User;

use  App\Core\AbstractRepository;
use PDO;

class UserRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "users";
    }

    public function getModelName()
    {
        return "App\\User\\UserModel";
    }

    function findByUsername($username)
    {
        $model = $this->getModelName();
        $table = $this->getTableName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
    }
}

?>