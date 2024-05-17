<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System | HTML | CSS | JS |</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>

<div class="nav">
    <img src="images/vote.png" alt="" class= "logo"> 
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="nominee.php">Nominee</a></li>
        <li><a href="register.php">Sign-Up</a></li>
        <li><a href="#">Admin</a></li>
    </ul>
</div>

<div class="page-one">
    <h1>Admin login</h1>
</div>

<div class="form-div">
    <form method="post" action="php/adminData.php">
        <input type="text" name="aname" class="ip-class" placeholder="Enter your name" required>
        <br>
        <input type="password" name="apss" class="ip-class" placeholder="Password" required>
        <br>
        <select name="vote" id="dropdown">
            <option value="1">Admin</option>
        </select>
        <br>
        <span>
            <input type="submit" value="submit" name="submit" id="btn" required>
            <!-- <p>New user? <a href="register.php">Register here</a></p> -->
        </span>
    </form>
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
