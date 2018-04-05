<?php

namespace App\Post;

class PostsRepository
{
    function fetch_posts()
    {
        global $pdo;
        return $pdo->query("SELECT * FROM `posts`");
    }

    function fetch_post($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
