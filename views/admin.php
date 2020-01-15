<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consult</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <ul>
        <li><a href="<?php echo constant('URL'); ?>admin/posts">List Posts</a></li>
        <li><a href="<?php echo constant('URL'); ?>admin/users">Show Users</a></li>
        <li><a href="<?php echo constant('URL'); ?>admin/categories">Admin categories</a></li>
        <li><a href="<?php echo constant('URL'); ?>admin/comments">Admin Comments</a></li>
</body>
</html>