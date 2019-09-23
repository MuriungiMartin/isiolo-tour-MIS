<?php 
	session_start();

	// variable declaration
	$name = "";
	$email    = "";
	$country = "";
	$date = "";
	$sites = "";
	$errors = array(); 


	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'booking');

	// REGISTER USER
	if (isset($_POST['register'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$country = mysqli_real_escape_string($db, $_POST['country']);
		$date = mysqli_real_escape_string($db, $_POST['date']);
		$sites = mysqli_real_escape_string($db, $_POST['sites']);


		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($country)) { array_push($errors, "country is required"); }
		if (empty($date)) { array_push($errors, "date is required"); }
		if (empty($sites)) { array_push($errors, "site is required"); }
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO tourist (id,name, email, country, date, site) 
					  VALUES('','$name', '$email', '$country', '$date', '$sites')";
			$in=mysqli_query($db, $query);

			if($in){
				echo "Dear $name, you have successifully booked $sites on $date, Welcome.";

			}
else{echo mysqli_error($db);}



		}

	



?>