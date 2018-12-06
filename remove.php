<?php
include "required.php";
include "redirect.php";

	$UID = $_POST['UID'];
	$IID = $_POST['IID'];


  $sql = "DELETE * FROM user_items_connect WHERE UID = ? & ItemID = ?";

  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(1,$UID);

  $stmt->bindValue(2,$IID);

  $stmt->execute();

  redirect("profile.php");



?>
