 <html>
	<head/>
	<body>

		<?php

$servername = "localhost";
$username = "mysql";
$password = "mysql";
$dbname = "projecta";

/*
if( $_POST["name"] || $_POST["from"] || $_POST["from"] || $_POST["datetime"] )
{
echo "Welcome: ". $_POST['name']. "<br />";
echo "You need a lift from: ". $_POST["from"]. "<br />";
echo "To: ". $_POST["to"]. "<br />";
echo "On: ". $_POST["datetime"];
}
?>
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `trips` (`name`, `from`, `to`, `date`, `space`, `email`, `telephone`)
        VALUES ('".$_POST["name"]."','".$_POST["from"]."','".$_POST["to"]."','".$_POST["datetime"]."','".$_POST["space"]."','".$_POST["email"]."','".$_POST["telephone"]."')";

if ($conn->query($sql) === TRUE) {
    echo " <script type='text/javascript'>alert('New trip added successfully') </script> ";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
			<br>
				<br>
					<button onclick="window.location.href='/index.html'" >Go back</button>
				</body>
			</html> 