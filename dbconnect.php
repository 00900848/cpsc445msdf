 <?php
$servername = "capstonedatabase.cg52v8vcyqyj.us-east-2.rds.amazonaws.com";
$username = "David";
$password = "Capstonedm";
$dbname = "CapstoneDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 