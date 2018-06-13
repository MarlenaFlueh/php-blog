<?php

namespace App\Core;

use App\Comment\CommentRepository;
use PDO;
use Exception;
use PDOException;
use App\Post\PostsRepository;
use App\Post\PostsController;
use App\User\UserRepository;

class Container
{
    private $receipts = [];
    private $instances = [];

    public function __construct()
    {
        $this->receipts = [
            'postsController' => function()
            {
                return new PostsController(
                    $this->make('postsRepository'),
                    $this->make('commentRepository')
                );
            },
            'postsRepository' => function()
            {
               return new PostsRepository(
                   $this->make("pdo")
               );
            },
            'commentRepository' => function()
            {
                return new CommentRepository(
                    $this->make("pdo")
                );
            },
            'userRepository' => function()
            {
                return new UserRepository(
                    $this->make("pdo")
                );
            },
            'pdo' => function() {
                try {
                    $pdo = new PDO("mysql:host=localhost; dbname=blog", "blog", "WL5PwNLJqLw0Wl9k");

                } catch (PDOException $e) {
                    echo 'Verbindung zur Datenbank fehlgeschlagen.';
                    die();
                }
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }

    public function make($name)
    {
        if (!   empty($this->instances[$name])) {
            return $this->instances[$name];
        }

        if (isset($this->receipts[$name])) {
            $this->instances[$name] = $this->receipts[$name]();
        }
        //Erzeugen
        return $this->instances[$name];
    }

    // public function getPdo()
    // {
    //     if (!empty($this->pdo)) {
    //         return $this->pdo;
    //     }
    //     $this->pdo = new PDO("mysql:host=localhost; dbname=blog", "blog", "WL5PwNLJqLw0Wl9k");
    //     $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //     return $this->pdo;
    // }

    // public function getPostsRepository()
    // {
    //     if (!empty($this->postsRepository)) {
    //         return $this->postsRepository;
    //     }
    //     $this->postsRepository = new PostsRepository($this->getPdo());
    //     return $this->postsRepository;
    // }
}

?>