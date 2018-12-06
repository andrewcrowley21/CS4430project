<?php

function addToWishList($IID){


  $sql = "INSERT INTO user_items_connect (`UID`,`ItemID`) VALUES ($userID,?)";

  $stmt = $GLOBALS['pdo']->prepare($sql);

  $stmt->bindValue(3,$IID);

  $stmt->execute();

}

function redirect() {
  header('Location:catalog.php');
  die();
}

?>
