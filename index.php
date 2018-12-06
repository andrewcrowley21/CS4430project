<?php
session_start();
if (!$_SESSION['userID']) {
  header('Location:login.php');
  die();
}
header('Location:profile.php');
die();

?>
