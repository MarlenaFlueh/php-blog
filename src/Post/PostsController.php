<?php

namespace App\Post;

class PostsController
{

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function index()
    {
        $res = $this->postsRepository->fetch_posts();
        echo "<h1>test datei</h1>";
    }
}

?>
