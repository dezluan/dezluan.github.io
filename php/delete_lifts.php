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

$sql = "DELETE FROM `trips` WHERE `from` = '".$_POST["from"]."' AND `to` = '".$_POST["to"]."'  AND `date` = '".$_POST["datetime"]."' ";

if ($conn->query($sql) === TRUE) {
    echo " <script type='text/javascript'>alert('Trip deleted!') </script> ";

} else {
    echo "Trip was NOT DELETED. Please ensure all trip information is correct." ;
}

$conn->close();
?>
		<br>
			<br>
				<button onclick="window.location.href='/manage_user.html'" >Go back</button>
			</body>
		</html> 