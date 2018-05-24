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
        $posts = $this->postsRepository->fetch_posts();
        include __DIR__ . "/../../views/post/index.php";
    }
}

?>
