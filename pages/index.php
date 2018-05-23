<?php

include "../init.php";
require "elements/header.php";
require "elements/nav.php";

?>

</br>
</br>

<h1>The new Blog</h1>
<p class="lead">Welcome to the new Blog.</p>

<?php
    $postsRepository = $container->getPostsRepository();
    $res = $postsRepository->fetch_posts();

    $postsRepository1 = $container->getPostsRepository();
    $postsRepository2 = $container->getPostsRepository();

    var_dump($postsRepository1);
    var_dump($postsRepository2);
?>

<ul>
    <?php foreach($res as $row): ?>
        <li>
            <a href="post.php?id=<?php echo $row->id; ?>">
                <?php echo $row->title ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<?php require "elements/footer.php"; ?>
