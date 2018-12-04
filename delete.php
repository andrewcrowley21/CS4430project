<?php


	
	

	function deleteFromWishList($id){

		
		$sql = "DELETE FROM user_items_connect WHERE UID = ?";

		$stmt = $GLOBALS['pdo']->prepare($sql);

		$stmt->bindValue(1,$id);

		$stmt->execute();

	}

	function deleteProfile($id){
		//delete from user_items_connect 

		deleteFromWishList($id, false);


		$sql = "DELETE FROM user WHERE UID = ?";

		$stmt = $GLOBALS['pdo']->prepare($sql);

		$stmt->bindValue(1,$id);

		$stmt->execute();

	}
?>