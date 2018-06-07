<?php

namespace App\Core;

use PDO;

abstract class AbstractRepository
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    abstract protected function getTableName();

    abstract protected function getModelName();

    function all()
    {
        $model = $this->getModelName();
        $table = $this->getTableName();
        $stmt = $this->pdo->query("SELECT * FROM `$table`");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return $posts;
    }

    function find($id)
    {
        $model = $this->getModelName();
        $table = $this->getTableName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
        $post = $stmt->fetch(PDO::FETCH_CLASS);
        return $post;
    }
}

?>
