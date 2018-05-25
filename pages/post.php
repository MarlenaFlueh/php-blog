<?php
include("../init.php");

?>

<?php

    $postsController = $container->make("postsController");
    $postsController->show();

?>
