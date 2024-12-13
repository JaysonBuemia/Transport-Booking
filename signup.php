<?php

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

$Email = $_POST ["email"];
$Password = $_POST ["password"];
$RPassword = $_POST["rpassword"];

if (!empty($Email) && !empty($Password) && !empty($RPassword) && $RPassword === $Password)
{

$user_id = random_int(0, 50);
$query = "insert into `loginadmin` (users_id,email,password) values('$users_id', '$Email', '$Password')"; 

mysqli_query($con, $query);
header("Location: login.php");
die;

}else

{
  $error_message = "Invalid email or unmatched password!";
}
} 


?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup</title>
<link rel="stylesheet" href="">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" media="screen" href="screen.css">

</head>

<body>

<form action="" method="POST">
<div class="container">

<form action="" method="POST">
<div class="container">

<p>Transport Administrator:</p>
<h1 class="title">Sign up as Administrator</h1>

<?php if (!empty($error_message)) { ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php } ?>

<label for="email">Email Address:</label>
<input id="Email" name="email" type="text" placeholder="Input email" required> 

<label for="password">Password:</label>
<input id="Password" name="password" type="password" placeholder="Input password" required>

<label for="rpassword">Repeat password:</label>
<input id="RPassword" name="rpassword" type="password" placeholder="Input password" required>

<button type="submit">Sign Up</button>

</div>  
</div>
</body>
</div>
</html>

<body>
<style>

.error-message{
color: red;
margin-left: 118px;
font-size: 15px;
}

body {
font-family: Arial, sans-serif;
background-color: rgb(0, 219, 172);
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}

a {
position: inherit;
color: rgb(0, 0, 0);

}

form {
background-color: white;
padding: 50px;
border-radius: 5px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
width: 100%;
max-width: 500px;
}

.title{
color: rgb(151, 21, 125);
text-align: center;
}

label {
display: block;
margin-bottom: 8px;
font-weight: bold;
color: Black;
}

input {
width:100%;
padding: 12px;
margin-bottom: 16px;
border: 1px solid rgb(0, 0, 0);
border-radius: 5px;
box-sizing: border-box;
border-color: rgb(0, 0, 0);

}

button {
background-color: aqua;
color: black;
padding: 10px;
border: none;
border-radius: 4px;
cursor: pointer;
width: 100%;
height: 40px;
}

button:hover {
background-color: #441099;
}

h1 {
position: center;
font: icon;
height: 20px;
}

/* sign up to socials buttons */


.container2 {
display: flex;
flex-direction: column;
align-items: center;
margin-top: 2vh;
margin-bottom: -5vh;
}


.loginBtn {
box-sizing: border-box;
position: relative;
align-items: center;
margin: 0.2em;
padding: 0 50px 0 46px;
border: none;
text-align: none;
line-height: 34px;
white-space: nowrap;
border-radius: 0.2em;
font-size: 16px;
color: #f2f2f2;
width: 40vh;
margin-top: 0px;
margin-left: 100px;
cursor: pointer;
}
.loginBtn:before {
content: "";
box-sizing: border-box;
position: absolute;
top: 0;
left: -1px;
width: 34px;
height: 100%;
}
.loginBtn:focus {
outline: none;
}
.loginBtn:active {
box-shadow: inset 0 0 0 32px rgba(255, 0, 0, 0.1);
}

.loginBtn--facebook {
background-color: #4682f3;;
background-image: linear-gradient(#4682f3, #4682f3);
text-shadow: 0 -1px 0 #354C8C;
}

.loginBtn--facebook:before {
border-right: #1d275a 1px solid;
background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
background-color: #5B7BD5;
background-image: linear-gradient(#5B7BD5, #4864B1);
}

.loginBtn--google {
background: #e03e1e;
}
.loginBtn--google:before {
border-right: #574442 1px solid;
background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
background: #E74B37;
}

@media screen and (max-width: 600px) {

}

</style>
</body>