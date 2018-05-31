<?php

namespace App\Post;

use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository
{
    protected function getTableName()
    {
        return "posts";
    }

    protected function getModelName()
    {
        return "App\\Post\\PostModel";
    }
}
