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
// lucky_wheel.php
<?php
// Generate random account
$random_account = generateRandomAccount();

// Display lucky wheel result
echo "<p>Congratulations! You won: " . $random_account . "</p>";
?>

// Function to generate random account
function generateRandomAccount() {
    // Your logic to generate a random account goes here
    return "Random Account";
}
// top_up.php
<?php
// Handle top-up request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_method = $_POST["payment_method"];
    $amount = $_POST["amount"];

    // Process top-up request based on payment method
    if ($payment_method == "card") {
        // Process card payment
    } elseif ($payment_method == "atm") {
        // Process ATM payment
    } elseif ($payment_method == "momo") {
        // Process Momo payment
    }
}

// Display top-up form
echo "<form method='post'>";
echo "Payment Method: <select name='payment_method'>";
echo "<option value='card'>Card</option>";
echo "<option value='atm'>ATM</option>";
echo "<option value='momo'>Momo</option>";
echo "</select>";
echo "Amount: <input type='number' name='amount'>";
echo "<input type='submit' value='Top-up'>";
echo "</form>";
?>
