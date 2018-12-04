<?php
	include 'required.php';
	include 'redirect.php';
	include 'header.inc.php';
	
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" type="text/css" href="css/profileCSS.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/gallery.css"> -->


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
       
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class=>

	<h2 align="center">View Our Catalog<h2>
	

	<?php 
	//$servername = "sql9.freemysqlhosting.net";
	//$username = "sql9268464";
	//$password = "Et55h2EG5e";
	//$dbname = "sql9268464";

	// Create connection
	//$conn = pg_connect("host=sql9.freemysqlhosting.net port=3306 dbname=sql9268464 user=sql9268464 password=Et55h2EG5e");
	// Check connection
	//if (!$conn) {
		//echo("Connection failed: We Ded" );
	//GOTO http://www.phpmyadmin.co AND SIGN IN USING THOSE CREDENTIALS TO ACCESS DATABASE PHPMYADMIN
	// Use this for learnig how to call, the pg is postgres, not mysql. https://www.w3schools.com/php/php_mysql_intro.asp
	//class is boring, got a working test file. See you at 6:20ish
	$con=mysqli_connect("sql9.freemysqlhosting.net","sql9268464","Et55h2EG5e","sql9268464");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM catalog");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. " - Description: " .  $row["description"] . " - Link:" .  $row["link"] . " Imgpath: ". $row["imgpath"] . " Type:" . $row["type"] . "<br>";
}}
$con->close();


	?>
	
</body>
</html>