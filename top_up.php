// buy_account.php
<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve available game accounts
$sql = "SELECT * FROM game_accounts";
$result = mysqli_query($conn, $sql);

// Display available game accounts
while($row = mysqli_fetch_assoc($result)) {
    echo "<p>Account: " . $row["account_name"] . " - Price: " . $row["price"] . "</p>";
}

// Close connection
mysqli_close($conn);
?>