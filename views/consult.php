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
    <h1 class="center">Consult welcome</h1>
    <!-- <a href="<?php echo constant('URL');?>consult/consult">View Dates</a> -->
    <?php
                    include_once 'models/db.php';
                    foreach($this->db as $row){
                        $db = new DB();
                        $db= $row; 
                ?>
                <tr id="fila-<?php echo $db->ID; ?>">
                    <td><?php echo $db->ID; ?></td>
                    <td><?php echo $db->db; ?></td>
                    <td><?php echo $db->user;?></td>
                    <?php } ?>
</div>
</body>
</html>