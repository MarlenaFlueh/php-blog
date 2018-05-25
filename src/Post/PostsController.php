<?php

namespace App\Post;

class PostsController
{

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    protected function render($view, $params)
    {
        extract($params);
        include __DIR__ . "/../../views/{$view}.php";
    }

    public function index()
    {
        $posts = $this->postsRepository->fetch_posts();
        $this->render("post/index", ['posts' => $posts]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $post = $this->postsRepository->fetch_post($id);
        $this->render("post/post", ['post' => $post]);
    }
}

?>