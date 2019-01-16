<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username',$username,time()+3600);
        header('Location: page2.php');
    };
?>
<html>
    <head>
    <title>PHP Sessions</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    </head>
    <body>
        
    <form method="POST" action="<?php echo$_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username"
        placeholder="Enter Username";>
    <br>
       <input type="submit" name="submit" value="Submit">
       </form>
    </body>
</html>