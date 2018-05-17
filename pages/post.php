<?php
require "elements/header.php";
require "elements/nav.php";
include("../init.php");

?>

<br />
<br />

<h1>Post.php</h1>

<?php

    $postsRepository = new App\Post\PostsRepository($pdo);
    $id = $_GET['id'];
    $post = $postsRepository->fetch_post($id);

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?php echo $post->title; ?>
        </h3>
    </div>
    <div class="panel-body">
        <?php echo nl2br($post->content); ?>
    </div>
</div>

<?php require "elements/footer.php"; ?>
