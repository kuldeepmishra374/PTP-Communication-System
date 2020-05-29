<!DOCTYPE html>

<html>
    <head>
        <title>Success!</title>
        <link href='../CSS/RegistrationSuccessStyle.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="../Javascript/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                setTimeout(function()
                    {
                        $(location).attr('href','LoginPage.php');
                    }, 2000);
            });
        </script>
    </head>

    <body>
        <h1 id="label">Registration was successful!</h1>

    </body>

</html>
