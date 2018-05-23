<?php

include "../init.php";
require "elements/header.php";
require "elements/nav.php";

?>

</br>
</br>

<?php

$postsController = $container->make("postsController");
$postsController->index();

?>
