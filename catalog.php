<?php
	include 'required.php';
	include 'redirect.php';
	include 'header.inc.php';

	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catalog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />


    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" type="text/css" href="css/profileCSS.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/gallery.css"> -->


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class=>

	<h1 align="center">View Our Catalog<h1>
	<hr>
	<h4 style="display: inline; margin: 10px;"><a href="#graphics">Graphics Cards</a></h4>
	<h4 style="display: inline; margin: 10px;"><a href="#cpu">CPU's</a></h4>
	<h4 style="display: inline; margin: 10px;"><a href="#coolers">Cooling Units</a></h4>
	<h4 style="display: inline; margin: 10px;"><a href="#motherboards">Motherboards</a></h4>

	<?php

							echo '
							<section>
							<h2 id="graphics" align="center">Graphics Cards</h2>
							<div class="tbl-header">
								<table cellpadding="0" cellspacing="0" border="0">
									<thead>
										<tr>
											<th>Number</th>
											<th>Name</th>

											<th>Price</th>
											<th>Description</th>
											<th>Link</th>
											<th>Picture</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>';
							$sql= "SELECT * FROM catalog where type = 'Graphics card' order by price";

							$stmt = $pdo->prepare($sql);



							$stmt->execute();

							$result = $stmt->fetchAll();





							echo '<div class="tbl-content">
										<table cellpadding="0" cellspacing="0" border="0">
											<tbody>';

							for($i =0; $i<count($result); $i++){

								echo '
												<tr>
													<td>'. $i .'</td>
													<td>'. $result[$i]['name'] .'</td>

													<td>$'. $result[$i]['price'] .'</td>
													<td>'. $result[$i]['description'] .'</td>
													<td><a href="'. $result[$i]['link'] .'"target = _blank""><strong>Check it out</strong></a></td>
													<td><img src="'. $result[$i]['imgpath'] .'" height="15%" width="60%"></td>';
													if(!isset($_SESSION['userID'])) {
														echo '<td><a href="login.php"><strong>Add to Wish List</a></td>';
													}
													else {
														echo '<td><a href="#"><strong>Add to Wish List</a></td>';
													}

												echo '</tr>';
							}

							echo ' 			</tbody>
										</table>
								</div>
								</section>';


								echo '
							<section>
							<h2 id="cpu" align="center">CPU\'s</h2>
							<div class="tbl-header">
								<table cellpadding="0" cellspacing="0" border="0">
									<thead>
										<tr>
											<th>Number</th>
											<th>Name</th>

											<th>Price</th>
											<th>Description</th>
											<th>Link</th>
											<th>Picture</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>';
							$sql= "SELECT * FROM catalog where type = 'CPU' order by price";

							$stmt = $pdo->prepare($sql);



							$stmt->execute();

							$result = $stmt->fetchAll();





							echo '<div class="tbl-content">
										<table cellpadding="0" cellspacing="0" border="0">
											<tbody>';

							for($i =0; $i<count($result); $i++){
								echo '
												<tr>
													<td>'. $i .'</td>
													<td>'. $result[$i]['name'] .'</td>

													<td>$'. $result[$i]['price'] .'</td>
													<td>'. $result[$i]['description'] .'</td>
													<td><a href="'. $result[$i]['link'] .'"target = _blank""><strong>Check it out</strong></a></td>
													<td><img src="'. $result[$i]['imgpath'] .'" height="15%" width="60%"></td>';
													if(!isset($_SESSION['userID'])) {
														echo '<td><a href="login.php"><strong>Add to Wish List</a></td>';
													}
													else {
														echo '<td><a href="#"><strong>Add to Wish List</a></td>';
													}

												echo '</tr>';
							}

							echo ' 			</tbody>
										</table>
								</div>
								</section>';


								echo '
							<section>
							<h2 id="coolers" align="center">Cooling Units</h2>
							<div class="tbl-header">
								<table cellpadding="0" cellspacing="0" border="0">
									<thead>
										<tr>
											<th>Number</th>
											<th>Name</th>

											<th>Price</th>
											<th>Description</th>
											<th>Link</th>
											<th>Picture</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>';
							$sql= "SELECT * FROM catalog where type = 'cooler' order by price";

							$stmt = $pdo->prepare($sql);



							$stmt->execute();

							$result = $stmt->fetchAll();





							echo '<div class="tbl-content">
										<table cellpadding="0" cellspacing="0" border="0">
											<tbody>';

							for($i =0; $i<count($result); $i++){
								echo '
												<tr>
													<td>'. $i .'</td>
													<td>'. $result[$i]['name'] .'</td>

													<td>$'. $result[$i]['price'] .'</td>
													<td>'. $result[$i]['description'] .'</td>
													<td><a href="'. $result[$i]['link'] .'"target = _blank""><strong>Check it out</strong></a></td>
													<td><img src="'. $result[$i]['imgpath'] .'" height="15%" width="60%"></td>';
													if(!isset($_SESSION['userID'])) {
														echo '<td><a href="login.php"><strong>Add to Wish List</a></td>';
													}
													else {
														echo '<td><a href="#"><strong>Add to Wish List</a></td>';
													}

												echo '</tr>';
							}

							echo ' 			</tbody>
										</table>
								</div>
								</section>';



								echo '
							<section>
							<h2 id="motherboards" align="center">Motherboards</h2>
							<div class="tbl-header">
								<table cellpadding="0" cellspacing="0" border="0">
									<thead>
										<tr>
											<th>Number</th>
											<th>Name</th>

											<th>Price</th>
											<th>Description</th>
											<th>Link</th>
											<th>Picture</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>';
							$sql= "SELECT * FROM catalog where type = 'motherboard' order by price";

							$stmt = $pdo->prepare($sql);



							$stmt->execute();

							$result = $stmt->fetchAll();





							echo '<div class="tbl-content">
										<table cellpadding="0" cellspacing="0" border="0">
											<tbody>';

							for($i =0; $i<count($result); $i++){
								echo '
												<tr>
													<td>'. $i .'</td>
													<td>'. $result[$i]['name'] .'</td>

													<td>$'. $result[$i]['price'] .'</td>
													<td>'. $result[$i]['description'] .'</td>
													<td><a href="'. $result[$i]['link'] .'"target = _blank""><strong>Check it out</strong></a></td>
													<td><img src="'. $result[$i]['imgpath'] .'" height="15%" width="60%"></td>';
													if(!isset($_SESSION['userID'])) {
														echo '<td><a href="login.php"><strong>Add to Wish List</a></td>';
													}
													else {
														echo '<td><a href="#"><strong>Add to Wish List</a></td>';
													}

												echo '</tr>';
							}

							echo ' 			</tbody>
										</table>
								</div>
								</section>';

	?>


</body>
</html>
