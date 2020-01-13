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
    <div id="consult">
    <h1 class="center">BLOG welcome <?php echo $this->params->user_login; ?></h1>
    <!-- <a href="<?php echo constant('URL');?>consult/consult">View Dates</a> -->
    <!-- <?php echo $_SESSION['user_id'];?> -->
    <?php if (isset( $_SESSION['user_id'] ) ):?>You are connected as <?php echo $this->params->user_login; ?>
    <li><a href="<?php echo constant('URL'); ?>consult/logout">Logout</a></li> 
    <?php else:?>
    <?php endif; 
    // echo($this->session); 
    // var_dump($this->params);
    //   var_dump($this->posts);
    //  var_dump($this->comments);
    foreach ($this->posts as $posts):?>
      <br> IDPost <?=$posts->ID_post?><br>
        <?=$posts->post_author?><br>
        <?=$posts->post_date?><br>
        <?=$posts->post_title?><br>
        <?=$posts->post_content?><br>
        
    
        <?php require 'views/controlButtons.php'?>
        <?php require 'views/comments.php'?>
         <?php foreach ($posts->comments as $comments):?><br>
            <?=$comments->comment_ID?>
            <?=$comments->user_id?>
        <?php  
        endforeach; 
    ?>     
    <?php  endforeach; 
    ?>
                    
</div>
</body>
</html>