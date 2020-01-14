<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- custom CSS File -->
  <link rel="stylesheet" type="text/css" href="customlogin.css">
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
    
        <!--  -->
        <!-- <form action="<?php echo constant('URL');?>consult/login" method="post"> -->
        <!-- <form action="" method="post"> -->
        <form action="" method="post" name="login">
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="required">
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required="required">
        </div>
        
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                           <input type="submit" class="btn btn-block mybtn btn-primary tx-tfm" value="LogIn" />
                              <!-- <button type="submit" class=" ">Login</button> -->
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="<?php echo constant('URL');?>consult/register" id="signup">Sign up here</a></p>
                           </div>
                        </form>

    </form>


    </div>
			</div>
			  
		</div>
      </div>   
        
        
</body>
</html>

       
                 
				