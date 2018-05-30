<?php

require __DIR__ . "/../init.php";

$path = $_SERVER['PATH_INFO'];

if ($path == "/index") {
    $postsController = $container->make("postsController");
    $postsController->index();
} elseif ($path == "/post") {
    $postsController = $container->make("postsController");
    $postsController->show();
}

?>

