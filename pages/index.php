<?php
require "elements/header.php";
require "elements/nav.php";
include("../src/database.php");

?>

    <br />
    <br />
    <br />

    <div class="container">
        <div class="starter-template">
        <h1>The new Blog</h1>
        <p class="lead">Welcome to the new Blog.</p>
        </div>
        <div>
            <?php $res = fetch_posts(); ?>
            <ul>
                <?php foreach($res as $row): ?>
                    <li>
                        <a href="post.php?id=<?php echo $row["id"]; ?>">
                            <?php echo $row["title"] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

<?php require "elements/footer.php"; ?>
