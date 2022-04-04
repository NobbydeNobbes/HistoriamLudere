
<?php
$dsn="mysql:host=localhost;dbname=historiamludere";
$db= new PDO($dsn, "root", "");
$query = $db->query("SELECT * FROM characters");
$characters= $query->fetchAll();
require("header.php");
?>

        
        <div class="character-display">
            <?php foreach($characters as $character){?>
                <img src="../public/assets/img/<?=$character["firstname"]?>.png" alt="portrait du personnage">
                <p><?=$character["firstname"]?> <?=$character["lastname"]?></p>

            <?php } ?>
        </div>
    </div>
</body>
</html>
