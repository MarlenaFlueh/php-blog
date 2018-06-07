<?php

namespace App\Comment;

use ArrayAccess;
use App\Core\AbstractModel;

class CommentModel extends AbstractModel
{
    public $id;
    public $title;
    public $post_id;
}

?>
