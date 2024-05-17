<?php
// Start the session
session_start();

// Check if user is logged in
// if (!isset($_SESSION['userdata'])) {
//     header("location: ../index.php"); // Redirect to login page if not logged in
//     exit(); // Stop further execution
// }

// Include the database connection file
include("php/connection.php");

// Retrieve the username from the session variable
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Handle the case when username is not set
    $username = "Username not available";
}

// Fetch user details from the database
$userDetailsQuery = "SELECT * FROM user WHERE username = '$username'";
$userDetailsResult = mysqli_query($connect, $userDetailsQuery);

// Check if user details are fetched successfully
if ($userDetailsResult) {
    $userDetails = mysqli_fetch_assoc($userDetailsResult);
} else {
    // Handle the case when user details cannot be fetched
    $userDetails = array(); // Set empty array
}

// Close the database connection
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard--EVM Online</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/deshboard.css">
    <script>
        function displayVotedStatus() {
            var statusElement = document.getElementById("votedStatus");
            var userDetails = <?php echo json_encode($userDetails); ?>;
            if (userDetails && userDetails.status == 1) {
                statusElement.textContent = "Voted";
                statusElement.classList.add("voted");
                document.getElementById("voteForm").querySelector("button[type=submit]").disabled = true;
                
            } else {
                statusElement.textContent = "Not Voted";
                statusElement.classList.remove("voted");
                document.getElementById("voteForm").querySelector("button[type=submit]").disabled = false;
            }
        }

        function changePartyPhoto() {
            var partyImage = document.getElementById("partyImage");
            var partySelect = document.getElementById("party");
            var selectedParty = partySelect.options[partySelect.selectedIndex].value;
            var imageUrl = "images/" + selectedParty + ".jpg"; // Adjust this path to your actual image path
            partyImage.src = imageUrl;
        }
    </script>
</head>
<body onload="displayVotedStatus()">
    
    <button id= "logOut">Logout</button>

    <script>
        // JavaScript function to handle logout
        function logout() {
            // Redirect to index.php
            window.location.href = "index.php";
            console.log("loged out");
        }

        // Add event listener to the logout button
        document.getElementById("logOut").addEventListener("click", logout);
    </script>

    <h1>Details of Voter</h1>
    <br>
    
    <div class="box">
        <div id="profile">
            <h2>User Details</h2>
            <ul>
                <li>Name: <?php echo isset($userDetails['username']) ? $userDetails['username'] : "N/A"; ?></li>
                <li>Mobile: <?php echo isset($userDetails['mob']) ? $userDetails['mob'] : "N/A"; ?></li>
                <li>Address: <?php echo isset($userDetails['address']) ? $userDetails['address'] : "N/A"; ?></li>
                <li>Status: <span id="votedStatus"></span></li>
            </ul>
        </div>
        <div id="group">
            <form id="voteForm" action="php/vote.php" method="post" onchange="changePartyPhoto()">
                <label for="party">Select Party:</label>
                <select name="party" id="party">
                    <option value="0" class= "no-option">Select option</option>
                    <option value="1">Rohit Janta Party</option>
                    <option value="2">Anukul Viswash Mat</option>
                    <option value="3">Suraj Riders</option>
                    <option value="4">Akriti Vikash Party</option>
                </select>
                <br>
                <img id="partyImage" src="images/0.jpg" alt="Party Image">
                <br>
                <button type="submit" id= "btn">Vote</button>
            </form>
            
        </div>
    </div>


    <div class="bottom-nav">

        
        
        <ul>

            <p id="heading">Cotanct</p><br>
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
