<?php
include "required.php";
include "redirect.php";

<<<<<<< HEAD
<<<<<<< HEAD
=======
function addToWishList($IID){

>>>>>>> parent of 59ec49c... Update add.php


	echo "Test";
=======
function addToWishList($IID){
>>>>>>> parent of 59ec49c... Update add.php


  $sql = "INSERT INTO user_items_connect (`UID`,`ItemID`) VALUES ($userID,?)";

  $stmt = $GLOBALS['pdo']->prepare($sql);

  $stmt->bindValue(3,$IID);

  $stmt->execute();

  redirect(catalog.php);

}

?>
