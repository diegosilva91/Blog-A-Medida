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
            <?php if (isset( $_SESSION['user_id'] ) ):?>
                <li><a href="<?php echo constant('URL'); ?>blog?id=<?php echo($_SESSION['user_id']);?>">Blog</a></li>
                <li><a href="<?php echo constant('URL'); ?>admin?id=<?php echo($_SESSION['user_id']);?>">Admin</a></li>
            <?php else:?>
                
                <li><a href="<?php echo constant('URL'); ?>blog">Blog</a></li>
                <li><a href="<?php echo constant('URL'); ?>consult/login">Login</a></li>
            <?php endif;?>
            <form action="<?php echo constant('URL');?>blog/searchContent" method="post">
            <!-- <form action="" method="post"> -->
            <input type="text" name="searchPostByWord" id="searchPostByWord" required="required" />
            <p><input type="submit" name="Input_SearchInPosts" value="Search" /></p>
            </form>  
            <li><a href="<?php echo constant('URL'); ?>blog/new?id=<?php echo($_SESSION['user_id']);?>">New</a></li>
        </ul>
    </div>
</body>
</html>
