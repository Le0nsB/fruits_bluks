
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>
  <h1>Augļi</h1>
  
    <form class="cont">
      <input class="input" name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
      <button class="index_button">🍎</button>
    </form>


  <?php if(count($fruits) == 0){ ?>
    <p><?= $_GET["search_query"] ?> Nav atrasts</p>
  <?php } ?>

  <div>
    <ul>
      <?php foreach($fruits as $fruit) { ?>
        <li><a class="aij" href="show?id=<?= $fruit["id"] ?>"> <p><?= $fruit["name"] ?></p></a> </li>
      <?php } ?>
    </ul>
  </div>
<?php require "views/components/footer.php" ?>