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
        <h1>Posts</h1>
        <p class="lead">This are the posts.</p>
        </div>
        <div>
        <?php
            $id = $_GET['id'];
            $post = fetch_post($id);

        ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo $post["title"]; ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo $post["content"]; ?>
                </div>
            </div>
        </div>
    </div>

<?php require "elements/footer.php"; ?>
