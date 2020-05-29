<?php

    session_start();
    include "Classes/User.php";
    $user = new User();

    if (!empty($_POST['UserNameLogin']) && !empty($_POST['UserPasswordLogin']))
    {
        if ( $user->UserLogin($_POST['UserNameLogin'],$_POST['UserPasswordLogin']) )
        {
            $_SESSION['UserNameSession'] = $_POST['UserNameLogin'];
            $_SESSION['UserPasswordSession'] = $_POST['UserPasswordLogin'];
            include "WelcomeUser.php";
	    echo '<script language="javascript">';
            echo 'alert("You are Successfully Loged In...! Please Hit Enter To Enjoy Chat Room")';
            echo '</script>';
        }
        else
        {
            include "LoginPage.php";
            echo '<script language="javascript">';
            echo 'alert("Wrong Username or Password!")';
            echo '</script>';
        }
    }
    else
    {
        include "LoginPage.php";
        echo '<script language="javascript">';
        echo 'alert("Please fill in all the fields to log in!")';
        echo '</script>';
    }

?>
