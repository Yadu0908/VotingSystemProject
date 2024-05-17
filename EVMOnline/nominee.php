<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominee Details</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/nominee.css">
</head>
<body>

<div class="nav">
    <img src= "images/vote.png" alt="" class="logo"> 
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Nominee</a></li>
        <li><a href="register.php">Sign-Up</a></li>
        <li><a href="adminLogin.php">Admin</a></li>
    </ul>
</div>

<h2 class="heading">Nominee Details</h2>

<div class= "nomineeBox">

    <?php
    $party_names = array("Rohit Janta Party", "Anukul Viswash Mat", "Suraj Riders", "Akriti Vikash Party");
    $party_logos = array("Images/1.jpg", "Images/2.jpg", "Images/3.jpg", "Images/4.jpg");

    // Loop through each party nominee
    for ($i = 0; $i < count($party_names); $i++) {
        echo '<div class="nominee n' . ($i + 1) . '">';
        echo '<h3>' . $party_names[$i] . '</h3>';
        echo '<img src="' . $party_logos[$i] . '" alt="">';
        echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit, libero a tincidunt ultricies, enim urna consectetur justo, ut rhoncus mi quam at arcu. Phasellus auctor magna nec tellus consectetur, eu fermentum dui commodo. Donec orem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit, libero a tincidunt ultricies, enim urna consectetur justo, ut rhoncus mi quam at arcu. Phasellus auctor magna nec tellus consectetur, eu fermentum dui commodo. Donec egetorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit, libero a tincidunt ultricies, enim urna consectetur justo, ut rhoncus mi quam at arcu. Phasellus auctor magna nec tellus consectetur, eu fermentum dui commodo. Donec egeteget mi eget velit vehicula suscipit eu id nulla. Donec volutpat, purus at mattis blandit, nisi nulla congue ex, et malesuada nulla eros sed ante. Proin at nunc a velit consectetur vehicula. Donec hendrerit dictum risus. Ut ac erat nec nunc fermentum aliquet a non ante.</p>
        ';
        echo '</div>';
    }
    ?>

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
