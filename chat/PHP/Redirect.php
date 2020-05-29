<?php

    if (isset($_POST['enterChat']))
    {
        include "RegisterPage.php";
    }

    if (isset($_POST['exitRoom']))
    {
        include "LoginPage.php";
    }
    
    if (isset($_POST['exitTunnel']))
    {
        include "index.php";
    }

?>
