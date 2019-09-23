<?php
include 'destination.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
	<div class="navbar">
		
			<a target="blank" href="index.php">Home</a>
			<a target="blank" href="locals.php">Advisory</a>
			<a target="blank" href="sites.php">Sites</a>
			<a target="blank" href="weather.php">Weather</a>

	</div>
	<div class="header">Register The Site You Choose To visit.</div>
	<h3>Input Your Details In the Form Provide Below.</h3>
	 <form action="destination.php" method="POST" >
	 	<!-- display validation errors here -->
	 	<?php include 'errors.php'; ?>
	      <div class="input-group">
               <label>Name</label>
               <input type="text" name="name">
          </div>
          <div class="input-group">
               <label>Email</label>
               <input type="email" name="email">
          </div>
          <div class="input-group">
          	<label>Country</label>
          	<input type="country" name="country">
          </div>
          <div class="input-group">
          	<label>Date</label>
          	<input type="date" name="date">
          </div>
          <div class="input-group">
          	<label>Sites</label>
          	<input type="text" name="sites">
          </div>
          <div class="input-group">
               <button type="submit" name="register" class="btn">register</button>
          </div>
          </form><br><br>

</body>
</html>