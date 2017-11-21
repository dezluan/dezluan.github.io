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

$sql = "SELECT * FROM `trips` WHERE `from` = '".$_POST["from"]."' AND `to` = '".$_POST["to"]."' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " ------------------- <br>
			<strong> Name:</strong> " .$row["name"].
        "<br>".
         "<strong>Email:</strong> " . $row["email"].
         "<br>". 
         "<strong>Phone:</strong> " . $row["telephone"].
          "<br>
						<strong>From:</strong> " . $row["from"]. "<br>
							<strong>To:</strong> " . $row["to"]. "<br>
								<br>". "<strong>Space available: </strong>". $row["space"]. "<br>
										<br>";
    }
} else {
    echo " 0 trips available for your selection" ;
}

mysqli_close($conn);
?>
											<br>
												<button onclick="window.location.href='/seek_lift.html'" >Go back</button>
											</body>
										</html> 