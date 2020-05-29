<?php


class Chat
{
    private $ChatUserName,$ChatText;

    public function getChatUserName()
    {
        return $this->ChatUserName;
    }

    public function setChatUserName($ChatUserName)
    {
        $this->ChatUserName = $ChatUserName;
    }

    public function getChatText()
    {
        return $this->ChatText;
    }

    public function setChatText($ChatText)
    {
        $this->ChatText = $ChatText;
    }

    public function InsertChatMessage()
    {
        $user_name = "root";
        $password = "";
        $database = "3621";
        $host_name = "127.0.0.1";


        $chat_user_name = self::getChatUserName();
        $chat_text = self::getChatText();

        $link = new PDO('mysql:host=127.0.0.1;dbname=3621','root','');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $link->prepare("INSERT INTO chat(ChatUserName,ChatText) VALUES(?,?)");
        $statement->execute(array($chat_user_name,$chat_text));
        $link = null;
    }

    public function DisplayMessage()
    {
        $user_name = "root";
        $password = "";
        $database = "3621";
        $host_name = "127.0.0.1";

        $bdd = new PDO('mysql:host=127.0.0.1;dbname=3621','root','');
        $ChatReq = $bdd->prepare("SELECT * FROM chat ORDER BY ChatId ASC");
        $ChatReq->execute();

        while($DataChat = $ChatReq->fetch())
        {
            ?>
            <span class="UserNameS"><?php echo $DataChat['ChatUserName'];?></span> says :<br/>
            <span class="ChatMessageS"><?php echo $DataChat['ChatText'];?></span><br/>
            <br/>
            <?php
        }
    }
};

?>
