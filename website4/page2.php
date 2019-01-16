<?php
  
    session_start();

    // $_SESSION['name']='John Doe';
    $name= $_SESSION['name'];
    $email= $_SESSION['email'];

?>
<html>
    <head>
    <title>PHP Sessions</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    </head>
    <body>
    <h5>Thank you <?php echo $name; ?> you 
    have subscribed with <?php echo $email ; ?>
    </h5>
    <a href="page3.php">Go to page 3</a>
    </body>
</html>