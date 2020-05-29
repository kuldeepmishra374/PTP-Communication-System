<!doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
        <title>Welcome!</title>
        <link href='../CSS/ChatStyle.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="../Javascript/jquery.js"></script>
        <script type="text/javascript" src="../Javascript/WelcomeUserJS.js"></script>
    </head>

    <body>

        <?php
            echo "<h1><b><u>Welcome ".$_SESSION['UserNameSession']."!</u></b></h1>";
        ?>
	 <!--<label id = "ChatTypeLabel">This is a Public Chatroom</label><br/><br/>-->
        <br/> <br/>
	
        <div id="ChatBox">
            <div id="ChatMessages"></div>
            <textarea id="ChatText" name="ChatText" placeholder='Write Your Message here..!'></textarea>
        </div>

        <form id="radio">
            <label>Auto Refresh: </label>
            <input type="radio" name="gender" value="radio1" id="radio1" checked="checked">Enable
            <input type="radio" name="gender" value="radio2" id="radio2">Disable<br/><br/>
         	  
        </form>
        <form method="post" action="Redirect.php">
            <button name="exitRoom" id="Exit">Exit Chatroom</button>
        </form>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5de6a75dd96992700fca9127/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </body>
</html>
