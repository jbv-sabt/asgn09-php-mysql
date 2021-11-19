<?php require_once('../../private/initialize.php'); ?>
<?php

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? NULL ; // PHP > 7.0
$name = $_GET['name'] ?? 'Salamander';

print("<p>Name: ".h($name) ."<br> ID: ". h($id). "</p>");


?>

<a href="show.php?id=<?php echo u($id); ?>"><br>Link</a><br/>
