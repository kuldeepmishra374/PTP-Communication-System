<?php

    session_start();
    include "Classes/Chat.php";

    $chat = new Chat();
    $chat->setChatUserName($_SESSION['UserNameSession']);
    $chat->setChatText($_POST['ChatText']);
    $chat->InsertChatMessage();

?>
