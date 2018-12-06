<?php
include "required.php";
include "redirect.php";


  $sql = "INSERT INTO user_items_connect (`UID`,`ItemID`) VALUES ($userID,?)";

  $stmt = $GLOBALS['pdo']->prepare($sql);

  $stmt->bindValue(3,$IID);

  $stmt->execute();

  redirect(catalog.php);



?>
