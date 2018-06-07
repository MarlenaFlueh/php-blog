<?php

namespace App\Post;

use App\Core\AbstractController;
use App\Comment\CommentRepository;

class PostsController extends AbstractController
{
    public function __construct(PostsRepository $postsRepository, CommentRepository $commentRepository)
    {
        $this->postsRepository = $postsRepository;
        $this->commentRepository = $commentRepository;
    }

    public function index()
    {
        $posts = $this->postsRepository->all();
        $this->render("post/index", ['posts' => $posts]);
    }

    public function show()
    {
        $id = $_GET['id'];
        if(isset($_POST['content'])) {
            $content = $_POST['content'];
            $this->commentRepository->insertForPost($id, $content);
        }

        $post = $this->postsRepository->find($id);
        $comments = $this->commentRepository->allByPost($id);

        $this->render("post/post", ['post' => $post, 'comments' => $comments]);
    }
}

?>
P