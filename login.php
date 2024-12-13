<?php

        session_start();

        include("connection.php");
        include("functions.php");

        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {

        $Email = $_POST ['email'];
        $Password = $_POST ['password'];

        if (!empty($Email) && !empty($Password))
        {

        $query = "select * from loginadmin where email = '$Email' limit 1"; 
        $result = mysqli_query($con, $query);
        
        if($result)
        {
            if ($result && mysqli_num_rows($result) > 0) 
            {     
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data ['password'] === $Password);
        {

            $_SESSION['users_id'] = $user_data ['users_id'];
            header("Location: admin.php");
            die;
        }
        }
    }

        $error_message = "Enter valid information";
        }else
    {
        $error_message = "Enter valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>
    <form action="" method="POST">
        <a href="admin.php" class="ca"></a>

        <div class="container">
            <h1 class="form-title">Log in Administrator</h1>

            <?php if (!empty($error_message)) { ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php } ?>

            <label for="email">Email Address: </label>
            <input type="text" id="Email" name="email" placeholder="Input Email" required>
    
            <label for="password">Password: </label>
            <input type="password" id="Password" name="password" placeholder="Input Password" required>
                      
            <button href="admin.php">Log in</button>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </form>

<style>

        body{
            background-color: white;
        }

        .container{
            background-color: rgb(0, 219, 172);
        }
        button{
            background-color: aqua;
            border: none;
            width: 320px;
            height: 30px;
            margin: 16px;
            margin-left: 20px;
            border-radius: 2px;
        }
        .error-message{
            color: red;
        }
        
</style>

</body>
</html>