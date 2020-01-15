<?php

    // var_dump($this->posts);
    //  var_dump($this->comments);
    foreach ($this->posts as $posts):?>
<?php require 'views/comments.php'?>
      <!-- <br> IDPost <?=$posts->ID_post?><br>
        <?=$posts->post_author?><br> -->
        
        
    
<div class="container" style="margin-top: 10px;">
      <div class="row">
        <div class="col-sm-10">
        <div class="card">
          <div class="card-header text-right">
            <div class="row">
              <div class="col-2">
                Category
              </div>
              <div class="col-6">
                
              </div>
              <div class="col-2">
              <?=$posts->post_date?>
              </div>
            </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?=$posts->post_title?></h5>
            <p class="card-text"><?=$posts->post_content?></p>
            <blockquote class="blockquote mb-0">
              
              <footer class="blockquote-footer"><cite title="Source Title"><?=$posts->nicename_post?></cite></footer>
            </blockquote>
            <?php if (isset( $_SESSION['user_id'] ) ):?>
                <a href="<?php echo constant('URL'); ?>blog/searchPost/<?=$posts->ID_post?>" class="btn btn-outline-primary" style="margin-top: 10px;">Edit</a>
            <?php endif;?>
          </div>
          <?php foreach ($posts->comments as $comments):?><br>
            <!-- <?=$comments->comment_ID?>
            <?=$comments->user_id?>
            <?=$comments->user_id?> -->
            
          <div class="container">
            <div class="row">
              <div class="card card-comments mb-3 wow fadeIn"> 
                <div class="card-header font-weight-bold">3 comments</div>
                <div class="card-body">
                    <div class="media d-block d-md-flex mt-4">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="mt-0 font-weight-bold"><?=$comments->nicename_comment?>
                                <a href="" class="pull-right">
                                    <i class="fa fa-reply"></i>
                                </a>
                            </h5>
                            <p><?=$comments->comment_content?></p>
                          </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <?php  
        endforeach; 
    ?>  
            <!-- End of Comment Section -->
                
          <!-- Comment Form -->
          <form style="background-color: whitesmoke; padding: 10px 10px 10px 10px; margin-top: 20px;">
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
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            </div>
            
            <div class="form-group row ">
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-outline-warning">Post your Comment</button>
                </div>
            </div>
          </form>
          <!-- End of Comment Form -->
           
    <?php  endforeach; 
    ?>