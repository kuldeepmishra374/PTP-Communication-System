<?php
class User
{
    private static $UserName,$UserMail,$UserPassword;

    public static function getUserName()
    {
        return self::$UserName;
    }

    public static function setUserName($UserName)
    {
        self::$UserName = $UserName;
    }

    public static function getUserMail()
    {
        return self::$UserMail;
    }

    public static function setUserMail($UserMail)
    {
        self::$UserMail = $UserMail;
    }

    public static function getUserPassword()
    {
        return self::$UserPassword;
    }

    public static function setUserPassword($UserPassword)
    {
        self::$UserPassword =password_hash($UserPassword,PASSWORD_BCRYPT);
    }


    public static function InsertUser()
    {
        $user_name = "root";
        $password = "";
        $database = "3621";
        $host_name = "127.0.0.1";

        $UserName = self::getUserName();
        $UserMail = self::getUserMail();
        $UserPassword = self::getUserPassword();

        $link = new PDO('mysql:host=127.0.0.1;dbname=3621','root','');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $link->prepare("INSERT INTO users(UserName,UserMail,UserPassword) VALUES (?, ?, ?)");
        $statement->execute(array($UserName,$UserMail,$UserPassword));
        $link = null;

    }


    public function UserLogin($login_name, $login_password)
    {
        $user_name = "root";
        $password = "";
        $database = "3621";
        $host_name = "127.0.0.1";

        $link = new PDO('mysql:host=127.0.0.1;dbname=3621','root','');
       // $statement = $link->prepare("SELECT UserId FROM users WHERE UserName=? AND UserPassword=?");
        //$statement->execute(array($login_name,$login_password));
	
	$stmt =  $link->prepare("SELECT UserPassword FROM users WHERE UserName = ?");
	$stmt->execute(array($login_name));
	$user = $stmt->fetch();

	if ($user && password_verify($login_password, $user['UserPassword']))
	{
		return true;
	} 
	else 
	{
		return false;
	}	


	
	/*if ($statement->rowCount() == 0)
        {
            return false;
        }
        else
        {
            return true;
        }*/
    }

};

?>
