<?php
include "required.php";
include "redirect.php";



	echo "Test";


  $sql = "INSERT INTO user_items_connect (`UID`,`ItemID`) VALUES ($userID,?)";

  $stmt = $GLOBALS['pdo']->prepare($sql);

  $stmt->bindValue(3,$IID);

  $stmt->execute();

  redirect(catalog.php);



?>
