<?php
// Step 1: Connect to the Database
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

// Step 2: Retrieve Vote Counts for Each Nominee
$sql = "SELECT votes, COUNT(*) AS vote_count FROM user GROUP BY votes";

$result = $conn->query($sql);

// Initialize variables for winner's position and vote count
$winner_votes = 0;
$winner_positions = [];

if ($result->num_rows > 0) {
    // Step 3: Find the Winner(s)
    while ($row = $result->fetch_assoc()) {
        if ($row["vote_count"] > $winner_votes) {
            $winner_votes = $row["vote_count"];
            $winner_positions = [$row["votes"]];
        } elseif ($row["vote_count"] == $winner_votes) {
            $winner_positions[] = $row["votes"];
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote's count</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/admin.css">
</head>
<body>

<div class="nav">
    <img src="../images/vote.png" alt="" class= "logo"> 
    <ul>
        <li><a href="../">Home</a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="#">Nominee</a></li>
        <li><a href="../register.php">Sign-Up</a></li>
        <li><a href="../adminLogin.php">Admin</a></li>
    </ul>
</div>
<h2 class="heading2">Admin panel</h2>
<div class="tableBox">
    <table>
        <tr>
            <th>S.no: </th>
            <th>Party name: </th>
            <th>Party logo: </th>
            <th>Position</th>
        </tr>

        <?php
        $party_names = array("Rohit Janta Party", "Anukul Viswash Mat", "Suraj Riders", "Akriti Vikash Party");
        $party_logos = array("../images/1.jpg", "../images/2.jpg", "../images/3.jpg", "../images/4.jpg");

        for ($i = 0; $i < count($party_names); $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $party_names[$i] . "</td>";
            echo "<td><img src='" . $party_logos[$i] . "' alt=''></td>";
            echo "<td>";
            if (in_array($i + 1, $winner_positions)) {
                echo "Winner (Votes: " . $winner_votes . ")";
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</div>

<div class="bottom-nav">
    <ul>
        <p id="heading">Contact</p><br>
        <li>+91 7895712280</li>
        <li>Haldwani, Uttarakhand</li>
        <li>code_with_bot@gmail.com</li>
    </ul>
    <ul>
        <p id="heading">Social Handles</p><br>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter (X)</a></li>
        <li><a href="#">Instagram</a></li>
    </ul>
    <ul>
        <p id="heading">Explore</p><br>
        <li><a href="#">About</a></li>
        <li><a href="#">Nominee</a></li>
        <li><a href="#">Sign-Up</a></li>
    </ul>
</div>

</body>
</html>
