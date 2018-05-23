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
    $postsRepository = $container->make("postsRepository");
    $res = $postsRepository->fetch_posts();
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
