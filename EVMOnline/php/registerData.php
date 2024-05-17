<?php

include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$role = $_POST['role'];
$address = $_POST['address'];

$insert = mysqli_query($connect, "INSERT INTO USER (username, password, mob, role, address, status, votes) VALUES ('$username', '$password', '$mobile', '$role', '$address', 0, 0)");

if ($insert) {
    echo "
    <script>
        alert(\"Registration data is inserted\");
        window.location = \"../index.php\";
    </script>
    ";
} else {
    echo "
    <script>
        alert(\"Registration data insertion failed\");
        window.location = \"../register.php\";
    </script>
    ";
}

?>
