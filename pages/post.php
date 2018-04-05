<?php
require "elements/header.php";
require "elements/nav.php";
include("../init.php");

?>

<br />
<br />

<h1>Posts</h1>
<p class="lead">This are the posts.</p>

<?php

    $postsRepository = new App\Post\PostsRepository();
    $id = $_GET['id'];
    $post = $postsRepository->fetch_post($id);

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?php echo $post["title"]; ?>
        </h3>
    </div>
    <div class="panel-body">
        <?php echo nl2br($post["content"]); ?>
    </div>
</div>

<?php require "elements/footer.php"; ?>
