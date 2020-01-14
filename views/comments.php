<?php 
if (isset( $_SESSION['user_id'] ) ):
?>
<form action="<?php echo constant('URL');?>comment/new?id=<?=$this->params->ID?>&idComment=<?=$posts->ID_post?>" method="post">
<?php 
else:
?>
<form action="<?php echo constant('URL');?>comment/new?id=0&idComment=<?=$posts->ID_post?>" method="post">
<?php endif;?> 
        <input type="text" name="comment_content" id="comment_content" required="required" />

    <p><input type="submit" name="add_comment" value="Add" /></p>
</form>