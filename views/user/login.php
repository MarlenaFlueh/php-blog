<?php

require __DIR__ . "/../layout/header.php";
require __DIR__ . "/../layout/nav.php";

?>
</br>
</br>
</br>

<div class="container">

<?php if (!empty($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>
</br>
    <form method="POST" method="login" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-3">
                Benutzername:
            </label>
            <div class="col-md-4">
                <input type="text" name="username" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">
                Passwort:
            </label>
            <div class="col-md-4">
                <input type="password" name="password" class="form-control" />
            </div>
        </div>
            <input type="submit" value="Einloggen" class="btn btn-primary />
    </form>
</div>

<?php

require __DIR__ . "/../layout/footer.php";

?>
