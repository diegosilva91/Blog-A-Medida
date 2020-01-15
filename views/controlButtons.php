
<?php if (isset( $_SESSION['user_id'] ) ):?>
<button type="button" onclick="window.location='<?php echo constant('URL'); ?>blog/searchPost/<?=$posts->ID_post?>'" class="bold">Edit</button>    
<?php endif;?>
<form action="" method="post" class="inline">
    <button type="submit" name="delete" value="1" class="bold">Show more..</button>
</form> |