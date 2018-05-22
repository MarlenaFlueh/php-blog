<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;

class Container
{
    public function getPdo()
    {
        $pdo = new PDO("mysql:host=localhost; dbname=blog", "blog", "WL5PwNLJqLw0Wl9k");
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public function getPostsRepository()
    {
        $pdo = $this->getPdo();
        return new PostsRepository($pdo);
    }
}

?>