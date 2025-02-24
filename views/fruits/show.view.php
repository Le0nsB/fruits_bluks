<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1><?= htmlspecialchars($fruit["name"]) ?></h1>
<div class="cont">

    <div class="buttons">
        <a href="edit?id=<?= $fruit["id"] ?>" class="edit"><p>Rediģēt</p></a> 

        <form action="/delete" method="POST" >
            <input name="id" value = "<?= $fruit["id"] ?>" type="hidden" class="input"/>
            <button class="delete">Dzēst</button>
        </form>
    </div>
</div> 
<?php require "views/components/footer.php" ?>