
<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "bilel";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);

									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}


									$id = $_GET['id'];

									$sql = "DELETE FROM etudiants WHERE id='$id';";

									if ($conn->query($sql) === TRUE) {
										echo "Record deleted successfully";
										include "listeetudiants.php";
									} else {
										echo "Error deleting record: " . $conn->error;
									}

									?>