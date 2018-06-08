<?php include __DIR__ . "/../layout/header.php"; ?>
<?php include __DIR__ . "/../layout/nav.php"; ?>


<br />
<br />
<div class="container">

    <h1>Actual post</h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php
                echo escape($post['title']); ?>
            </h3>
        </div>
        <div class="panel-body">
            <?php echo nl2br(escape($post->content)); ?>
        </div>
    </div>

    <ul class="list-group">
        <?php foreach($comments AS $comment): ?>
        <li class="list-group-item">
            <?php echo escape($comment->content); ?>
        </li>
        <?php endforeach; ?>
    </ul>

    <form method="post" action="post?id=<?php echo escape($post['id']); ?>">
        <textarea name="content" class="form-control"></textarea>
        </br>
        <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary" />
    </form>
</div>
</br>
</br>
</br>

<?php include __DIR__ . "/../layout/footer.php"; ?>
