<?php
session_start();

    include("connection.php");
    include("functions.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // If there is a post request
    
    $user_name = $_POST["user_name"]; // store entered user name in $user_name
    $password = $_POST["password"]; // store entered password in $password

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) { // if the username and password are not empty and name contains no numbers
        
        // Insert into database
        $query = "insert into users (user_name, password) values (?, ?)"; // sql to insert info into db (Vulnerable to SQL injection attack)
        $stmt = $con->prepare($query); // prepare statement
        $stmt ->bind_param("ss", $user_name, $password); //bind parameters
        $stmt ->execute();
        
        if ($stmt->affected_rows == 1) { // if exactly one row was affected, user was successfully added
            echo "User successfully signed up!";
        } else {
            echo "Error signing up user.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <style type= "text/css">
        
    #login-box {
        width: 300px;
        margin: 0 auto;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: 20px;
        text-align: center;
    }

    #login-input {
        display: block;
        width: 92%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #login-button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #login-button:hover {
        background-color: #0069d9;
    }


</style>
<div id="login-box">

    <form method="POST">
        <input id="login-input" type="text" name="user_name"><br><br>
        <input id="login-input" type="password" name="password"><br><br>

        <input type="submit" value="login" id="login-button" ><br><br>

        <a href="signup.php">Click to Signup</a><br><br>

    </form>
</div>


</body>
</html>