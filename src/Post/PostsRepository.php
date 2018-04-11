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
        return $this->pdo->query("SELECT * FROM `posts`");
    }

    function fetch_post($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $postArray = $stmt->fetch();

        $postObject = new PostModel;
        $postObject->id = $postArray["id"];
        $postObject->title = $postArray["title"];
        $postObject->content = $postArray["content"];
        var_dump($postObject);

        return $postObject;
    }
}
