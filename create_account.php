<?php

session_start();

    include("connection.php");
    include("functions.php");
    $createAccountStatus = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

            $createAccountStatus = "Account Created Successfully";

            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else{

            $createAccountStatus = "Account Information Not Accepted.";
        

        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>

    <style type ="text/css">

#bg{
            background-image: url("https://i.postimg.cc/vHxnz9kP/sincerely-media-p-NQlm-Gv-FC8-unsplash.jpg");
            height: 100%; 
             background-position: center;
             background-repeat: no-repeat;
            background-size: cover;
        }

body, html{
            height: 100vh;
            margin: auto;
            overflow: hidden;
        }

#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
font-weight: 600;
color: black;
background-color: #F7B733;
border: none;
border-radius: 20px;

}

#box{

background-color: #353839;
position:fixed;
left:40%;
right: 50%;
top:50%;
transform: translateY(-50%);
width: 300px;
padding: 20px;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
border-radius: 8px;

}

.status_message{
            font-weight: 600;
            color: #FC4A1A;
        }
  </style>

<div id="bg">
    <div id="box">

        <img src="https://i.postimg.cc/Pf3ndv6Q/PortalML.png" width=100%>

        <form method ="POST">
        <div style="font-size: 20px; margin: 10px; color:#F7B733;">Create Account</div>
            <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>

            <input id="button" type="submit" value="SIGN UP"><br><br>

            <a href="login.php" style="color:#4ABDAC">Login</a><br><br>

            <span class="status_message"><?php echo $createAccountStatus;
            ?></span>

        </form>
    </div>
</div>

</body>
</html>