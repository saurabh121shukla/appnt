<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "lotushospital");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$PatientName = $_REQUEST['PatientName'];
		$sex = $_REQUEST['sex'];
		$email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        $doctor = $_REQUEST['doctor'];
        $apptDate = $_REQUEST['apptDate'];
        $doctor_slot = $_REQUEST['doctor_slot'];
        
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO appn VALUES ('$PatientName',
			'$sex','$email' , '$number','$doctor' , '$apptDate' , '$doctor_slot' )";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1> Congratulation  '$PatientName', Your appointment is confirm with</h1>";
        
			echo nl2br(" <h2> $doctor\n on $apptDate\n at $doctor_slot\n please come 10 min early to your scheduled time  <h1> Thankyou</h1></h2>  ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
