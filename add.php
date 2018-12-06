<?php
include "required.php";
include "redirect.php";

<<<<<<< HEAD
=======
function addToWishList($IID){

>>>>>>> parent of 59ec49c... Update add.php

	$IID = $_POST['IID'];
	$UID = $_POST['UID'];


  $sql = "INSERT INTO user_items_connect (`UID`,`ItemID`) VALUES (?,?)";

  $stmt= $pdo->prepare($sql);
 $stmt->bindValue(1,$UID);
  $stmt->bindValue(2,$IID);

  $stmt->execute();

  redirect('catalog.php');

}

?>
