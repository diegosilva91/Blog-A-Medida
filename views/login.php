<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <!--  -->
    <!-- <form action="<?php echo constant('URL');?>consult/login" method="post"> -->
    <form action="" method="post">

    <p><label for="email">Email:</label><br />
        <input type="text" name="email" id="email" required="required" />
    </p>

    <p><label for="password">Password:</label><br />
        <input type="password" name="password" id="password" required="required" />
    </p>

    <p><input type="submit" value="Log In" /></p>
    </form>


</body>
</html>
