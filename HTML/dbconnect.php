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

$query = "SELECT * FROM WebServices";

$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
echo $row['domain'];
echo " ";
echo $row['w_name'];
echo "<br>";
}
?> 
