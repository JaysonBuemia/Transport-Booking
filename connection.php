<?php

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "logintba";

        if (!$con = new mysqli ($host, $dbusername, $dbpassword, $dbname))
        {
            die("failed to connect!");
        }