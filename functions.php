<?php

function check_login($con)
{
    if (isset($_SESSION['users_id']))
    {
        $id = $_SESSION['users_id'];
        $query = "SELECT * FROM loginadmin WHERE users_id = ? LIMIT 1";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header("Location: login.php");
    die;
}