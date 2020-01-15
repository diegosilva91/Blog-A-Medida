


    


          <!-- Comment Form -->
          <?php 
if (isset( $_SESSION['user_id'] ) ):
?>
<form action="<?php echo constant('URL');?>comment/new?id=<?=$this->params->ID?>&idComment=<?=$posts->ID_post?>" method="post" style="background-color: whitesmoke; padding: 10px 10px 10px 10px; margin-top: 20px;">
<?php 
else:
?>
<form action="<?php echo constant('URL');?>comment/new?id=0&idComment=<?=$posts->ID_post?>" method="post" style="background-color: whitesmoke; padding: 10px 10px 10px 10px; margin-top: 20px;">
<?php endif;?> 

            <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleFormControlInput1">Your Comment Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title...">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleFormControlInput1">Your name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name...">
            </div>
            </div>
    
            <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea type="text" name="comment_content" required="required" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            </div>
            
            <div class="form-group row ">
                <div class="col-sm-4">
                  <input type="submit" name="add_comment" class="btn btn-outline-warning" value="Post your Comment">
                </div>
            </div>
          </form>
          <!-- End of Comment Form -->
           