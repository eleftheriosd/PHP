<?php
  
    session_start();

    $name= isset($_SESSION['name'])? $_SESSION['name']:'Guest';
    $name= isset($_SESSION['email'])? $_SESSION['email']:'Not subscribed';

?>
<html>
    <head>
    <title>PHP Sessions</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    </head>
    <body>
    <h1>Hello <?php echo $name; ?>
    </h1>
    </body>
</html>