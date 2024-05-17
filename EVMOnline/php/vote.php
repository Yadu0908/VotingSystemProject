<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");

    $username = $_SESSION['username'];
    $party = $_POST['party'];

    // Update user status and vote in the database
    $updateQuery = "UPDATE user SET status = 1, votes = $party WHERE username = '$username'";
    if (mysqli_query($connect, $updateQuery)) {
        // Success message or redirect to dashboard
        $_SESSION['message'] = "Vote submitted successfully!";
        header("Location: ../deshboard.php");
        exit();
    } else {
        // Error message
        $_SESSION['error'] = "Failed to submit vote.";
        header("Location: ../deshboard.php");
        exit();
    }

    // Close the database connection
    mysqli_close($connect);
}
?>
