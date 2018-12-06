<?php
include "redirect.php";
session_start();
if (!$_SESSION['userID']) {
  redirect('login.php');

}
redirect('profile.php');

?>
