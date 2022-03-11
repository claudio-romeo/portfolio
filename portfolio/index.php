<?php include 'lib/include.php'; ?>
<?php include 'partial/header.php'; ?>



<h1>Mon Portfolio</h1>


<?php

$select= $db->query("SELECT * FROM users");
var_dump($select->fetch());


?>




<?php include 'lib/debug.php'; ?>
<?php include 'partial/footer.php'; ?>