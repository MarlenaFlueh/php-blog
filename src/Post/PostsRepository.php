<?php

namespace App\Post;

use PDO;

class PostsRepository
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function fetch_posts()
    {
        $stmt = $this->pdo->query("SELECT * FROM `posts`");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, "App\\Post\\PostModel");
        return $posts;
    }

    function fetch_post($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\\Post\\PostModel");
        $post = $stmt->fetch(PDO::FETCH_CLASS);
        return $post;
    }
}
