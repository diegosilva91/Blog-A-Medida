<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
    <div id="header">
        <ul>
            <li><a href="<?php echo constant('URL'); ?>home">Home</a></li>
            <li><a href="<?php echo constant('URL'); ?>blog">Blog</a></li>
            <?php if (isset( $_SESSION['user_id'] ) ):?>
            <?php else:?><li><a href="<?php echo constant('URL'); ?>consult/login">Login</a></li>
            <?php endif;?>
        </ul>
    </div>
</body>
</html>