<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votingdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if admin credentials are correct
    $adminName = "admin";
    $adminPassword = "admin";

    $enteredName = $_POST['aname'];
    $enteredPassword = $_POST['apss'];

    // SQL query to retrieve admin credentials from the database
    $sql = "SELECT * FROM adminTable WHERE aname = '$enteredName' AND apass = '$enteredPassword'";
    $result = $conn->query($sql);

    // Check if there is a matching record
    if ($result->num_rows > 0) {
        // Redirect to admin panel
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Invalid admin credentials. Please try again.');</script>";
        header("Location: ../adminLogin.php");
    }
}

$conn->close();
?>
