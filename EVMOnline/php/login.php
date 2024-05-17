<?php

    session_start();
    include("connection.php");

    $mobile = $_POST['mob'];
    $password = $_POST['password'];
    // $role = $_POST['role'];

    $check= mysqli_query($connect, "SELECT * from user WHERE mob = '$mobile' and password= '$password'  ");
    // AND role= '$role'

    if(mysqli_num_rows($check)> 0){
        $userdata= mysqli_fetch_array($check);
        // $groups= mysqli_query($connect, "SELECT * from user WHERE role= 2");
        // $groupData= mysqli_fetch_all($groups, MYSQLI_ASSOC);


        $_SESSION['userdata']= $userdata;
        // $_SESSION['groups']= $groups;


        echo "
            <script>
                
                window.location = \"../deshboard.php\";
            </script>
    ";
    }
    

    else{

        echo "
            <script>
                alert(\"Invalid credentials Or user not found\");
                window.location = \"../index.php\";
            </script>
    ";
    }

?>
