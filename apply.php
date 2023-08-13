<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>this is the logout page.</p>
</body>
</html>
<?php
    session_start();
    session_unset();
    ?>
    <meta http-equiv= "refresh" content ="0 ; url =http://localhost/php_files/%20WT_Project/%20login_page.php" />
<?php 
?>