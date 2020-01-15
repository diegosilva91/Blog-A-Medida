<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  
            <?php if (isset( $_SESSION['user_id'] ) ):?>
                <li><a href="<?php echo constant('URL'); ?>admin?id=<?php echo($_SESSION['user_id']);?>">Admin</a></li>
            <?php endif;?>
            <form action="<?php echo constant('URL');?>blog/searchContent" method="post">
            <!-- <form action="" method="post"> -->
            <input type="text" name="searchPostByWord" id="searchPostByWord" required="required" />
            <p><input type="submit" name="Input_SearchInPosts" value="Search" /></p>
            </form>  
            <li><a href="<?php echo constant('URL'); ?>blog/new?id=<?php echo($_SESSION['user_id']);?>">New</a></li>
        </ul>
    </div>
    <!--Navbar -->
    <nav class="navbar navbar-light bg-light ">
        <!-- <form class="form-inline my-2 my-lg-0"> -->
            <?php if (isset( $_SESSION['user_id'] ) ):?>
                <!-- <li><a href="<?php echo constant('URL'); ?>consult/login">Login</a></li> -->
            <?php else:?>
                <button id="LoginButton" class="btn btn-outline-primary my-4 my-sm-0" type="submit" style="margin-right: 5px;">Login</button>
                <!-- <button type="button" onclick="window.location='<?php echo constant('URL'); ?>blog/searchPost/<?=$posts->ID_post?>'" class="bold">Edit</button>     -->
                <button class="btn btn-outline-success my-4 my-sm-0" type="submit">Signup</button>
            <?php endif;?>
          <!-- </form> -->
        <span class="navbar-text ml-auto">
          You are logeed as guest
        </span>
      </nav>
  <!--/.Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (isset( $_SESSION['user_id'] ) ):?>
            <a class="navbar-brand" href="<?php echo constant('URL'); ?>blog?id=<?php echo($_SESSION['user_id']);?>">BLOG</a>
        <?php else:?>
            <a class="navbar-brand" href="<?php echo constant('URL'); ?>blog">BLOG</a>
        <?php endif;?>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo constant('URL'); ?>home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">others...</a>
            </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-info dropdown-toggle" style="margin-right: 5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Category
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
  </body>
</html>

    