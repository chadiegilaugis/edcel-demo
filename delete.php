<?php 

require 'db.php';

$stmt = $conn->prepare('DELETE from students WHERE id=' . $_GET['id']);
$stmt->execute();
header('location:index.php');
?>