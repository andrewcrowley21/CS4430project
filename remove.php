<?php

function removeFromWishList($IID){


  $sql = "DELETE FROM user_items_connect WHERE UID = $userID & ItemID = ?";

  $stmt = $GLOBALS['pdo']->prepare($sql);

  $stmt->bindValue(1,$IID);

  $stmt->execute();

  header('Location:profile.php');
  die();

}

?>
