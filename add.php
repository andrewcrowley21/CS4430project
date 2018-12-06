<?php
include "required.php";
include "redirect.php";


	$IID = $_POST['IID'];
	$UID = $_POST['UID'];
	$alreadyAdded = false;
	
	
	$sql= "SELECT * FROM `user_items_connect`, `user`, `catalog` where catalog.id = user_items_connect.ItemID
							AND user.UID = user_items_connect.UID and user_items_connect.UID = '" . $UID . "'";
							
							$stmt = $pdo->prepare($sql);



							$stmt->execute();

							$result = $stmt->fetchAll();
							
							for($i =0; $i<count($result); $i++){
								if ($result[$i]['ItemID'] = $IID) {
									echo '<h3>This item is already in your wish list. Please return to the <a href="catalog.php">catalog page</a> to browse for other options.</h3>';
									$alreadyAdded = true;
								}
							}
							
							
	
	
	
if ($alreadyAdded = false) {
  $sql = "INSERT INTO user_items_connect (`UID`,`ItemID`) VALUES (?,?)";

  $stmt= $pdo->prepare($sql);
 $stmt->bindValue(1,$UID);
  $stmt->bindValue(2,$IID);

  $stmt->execute();

  redirect('catalog.php');
  
	}



?>
