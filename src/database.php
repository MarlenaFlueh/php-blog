<?php
// was bedeuten fetch() und $_GET?

$pdo = new PDO("mysql:host=localhost; dbname=blog", "root", "");

function fetch_posts()
{
    global $pdo;
    return $pdo->query("SELECT * FROM `posts`");
}

function fetch_post($id)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();

}

?>
