<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM products WHERE id_produit= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>