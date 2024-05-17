<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System |Register|</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/register.css">

</head>
<body>
<div class="nav">

<img src="images/vote.png" alt="" class= "logo"> 
<ul>

    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="nominee.php">Nominee</a></li>
    <li><a href="#">Sign-Up</a></li>
    <li><a href="adminLogin.php">Admin</a></li>
</ul>
</div>
    <div class="page-one">

    </div>
    <div class="register-div">
        <form action="php/registerData.php" method="post">
            <h2>Registrantion</h2>
            <input type="text" name="username" id="" placeholder="Enter your name" required><br>
            <input type="password" name="password" id="" placeholder="password" required><br>
            <input type="number" name="mobile" id="" placeholder="Mobile nu." required>
            <br>    
            <!-- <input type="password" name="c-pass" id="" placeholder= "confirm password" required><br> -->
            <select name="role" id="dropdown" >

                    <option value="1">Voter</option>
                    
                </select>
                <br>
            <input type="text" name="address" id="" placeholder="Address" required>
            <br>
            <span>
                    <input type="submit" value="submit" name="submit" id= "btn">
                    <p>Already user? <a href="index.php">Login here</a></p>
                    
                </span>
        </form>


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