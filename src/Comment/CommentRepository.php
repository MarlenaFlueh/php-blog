<?php

namespace App\Comment;

use App\Core\AbstractRepository;
use PDO;

class CommentRepository extends AbstractRepository
{
    public function getTableName()
    {
        return 'comments';
    }

    public function getModelName()
    {
        return "App\\Comment\\CommentModel";
    }

    public function insertForPost($postId, $content)
    {
        $table = $this->getTableName();

        $stmt = $this->pdo->prepare(
            "INSERT INTO `$table` (`content`, `post_id`) VALUES (:content, :postId)");
        $stmt->execute([
            'content' => $content,
            'postId' => $postId
        ]);
    }

    public function allByPost($id)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();

        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE post_id = :id");
        $stmt->execute(['id' => $id]);

        $comments = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return $comments;
    }
}

?>