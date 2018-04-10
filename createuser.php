<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? php
		$servername = "localhost";
		$username = "root";
		$password = "nandu1!";
		$dbname = "sampleuser";
		echo "hellow world";
		// Create connection
		$conn = new MySQLi($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_errno) {
			echo "echo error";
		    die("Connection failed: ".$conn->connect_error);
		}
		else{
		$username = $_GET['uname'];
		$password = $_GET['psw'];

		$sql = "INSERT INTO userdata (username, password)
		VALUES ('".$username."', '".$password."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
	?> 

	<p>
		<a href="/">Go Back</a>
	</p>

</body>
</html>
