 <?php
$servername = "localhost";
$username = "drinkspot";
$password = "drinkspot";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
