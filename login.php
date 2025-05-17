<?php 
    
        $username = "";
        $password = "";
        $userLogin = false;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
         $username = $_POST['username'];
         $password = $_POST['password'];
            
         if($username == "Amritanshu" && $password=="pass"){
            $userLogin = true;
         }

        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Form</h1>
    <form  method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit">
    </form>

    <?php 
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($userLogin){
            echo "<h2>Welcome,user $username is loggedin</h2>";
            echo "$username";
            echo "$password";
        }
        else{
            echo "<h3>Invalid User</h3>";
        }
    }
    
    ?>

  
    

</body>
</html>