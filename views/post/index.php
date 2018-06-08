<?php include __DIR__ . "/../layout/header.php"; ?>
<?php include __DIR__ . "/../layout/nav.php"; ?>

<br />
<br />
<br />
<ul>
    <?php foreach ($posts AS $post): ?>
    <li>
        <a href="post?id=<?php echo escape($post->id); ?>">
            <?php echo escape($post->title); ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__ . "/../layout/footer.php"; ?>
