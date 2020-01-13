<form action="<?php echo constant('URL');?>comments/new?id=<?=$posts->ID_post?>" method="post">

        <input type="text" name="comment_content" id="comment_content" required="required" />

    <p><input type="submit" name="add_comment" value="Add" /></p>
</form>