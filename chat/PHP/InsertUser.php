<?php

    include "Classes/User.php";
    $user = new User();
    $user_name = "root";
    $password = "";
    $database = "3621";
    $host_name = "127.0.0.1";

    if (!empty($_POST['UserName']) && !empty($_POST['UserMail']) && !empty($_POST['Mobile']) && !empty($_POST['UserPassword']))
    {
        if ($_POST['UserPassword2']!=$_POST['UserPassword'])
        {
            include "RegisterPage.php";
            echo '<script language="javascript">';
            echo 'alert("The two passwords do not match with each other!")';
            echo '</script>';
        }
        else
        {
            $link = new PDO('mysql:host=127.0.0.1;dbname=3621','root','');
            $statement = $link->prepare("SELECT UserId FROM users WHERE UserName=?");
            $statement->execute(array($_POST['UserName']));

            if ($statement->rowCount() == 0)
            {
                $user->setUserName($_POST["UserName"]);
                $user->setUserMail($_POST["UserMail"]);
                $user->setUserPassword($_POST["UserPassword"]);
                $user->InsertUser();
                header ("Location: RegistrationSuccess.php?success=1");
            }
            else
            {
                include "RegisterPage.php";
                echo '<script language="javascript">';
                echo 'alert("Sorry, this username already exists.")';
                echo '</script>';
            }
        }
    }
    else
    {
        include "RegisterPage.php";
        echo '<script language="javascript">';
        echo 'alert("Please fill in all the fields!")';
        echo '</script>';
    }
?>
