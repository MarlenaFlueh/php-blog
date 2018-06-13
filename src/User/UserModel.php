<?php

namespace App\User;

use ArrayAccess;
use App\Core\AbstractModel;

class UserModel extends AbstractModel
{
    public $id;
    public $username;
    public $password;
}

?>
