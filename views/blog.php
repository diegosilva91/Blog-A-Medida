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
    <!-- <?php if (isset( $_SESSION['user_id'] ) ):?>You are connected as <?php echo $this->params->user_login; ?> -->
    <?php else:?>
    <?php endif; 
    // echo($this->session); 
    // var_dump($this->params);
    ?>
    <?php require 'views/PostContents.php'; ?>
</div>
</body>
</html>