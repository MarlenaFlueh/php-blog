<?php

namespace App\Post;

use ArrayAccess;

use App\Post\AbstractModel;

class PostModel extends AbstractModel
{
    public $id;
    public $title;
    public $content;
}

?>