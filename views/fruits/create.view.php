<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Pievienot augli</h1>
<form method="POST">
    <label>
        <input class="input" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" />
        <button type="submit" class="index_button"><span>🍊</span></button>
    </label>
    <?php if(isset($errors["name"])) { ?>
       <p><?= htmlspecialchars($errors["name"]) ?></p>
     <?php } ?>
</form>
<?php require "views/components/footer.php" ?>