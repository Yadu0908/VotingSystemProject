<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");

    $mob = $_POST['mob'];
    $password = $_POST['password'];
    $vote = $_POST['vote'];

    // Validation.
    $validateQuery = "SELECT * FROM user WHERE mob = '$mob' AND password = '$password'";
    $result = mysqli_query($connect, $validateQuery);

    // Check if there's a match
    if (mysqli_num_rows($result) == 1) {
        // Fetch the username
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];

        // Store the username in a session variable
        $_SESSION['username'] = $username;

        // If validation is successful, insert data into 'login' table
        $insertQuery = "INSERT INTO login (mob, password, vote) VALUES ('$mob', '$password', '$vote')";
        if (mysqli_query($connect, $insertQuery)) {
            // If insertion is successful, redirect the user to deshboard.php
            $_SESSION['message'] = "Data inserted successfully!";
            header("Location: ../deshboard.php");
            exit();
        } else {
            // If insertion fails, display an error message
            $_SESSION['error'] = "Error: " . $insertQuery . "<br>" . mysqli_error($connect);
            echo "<script>alert(\"Insertion failed !!!\");</script>";
        }
    } else {
        // If validation fails, display an error message
        $_SESSION['error'] = "Invalid mobile number or password!";
        echo "<script>alert(\"Your mobile number or password is incorrect.\");</script>";
    }

    // Close the database connection
    mysqli_close($connect);
}
?>
