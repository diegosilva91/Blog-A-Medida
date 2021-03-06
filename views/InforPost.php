<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- custom CSS File -->
  <link rel="stylesheet" type="text/css" href="customlogin.css">
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div class="container">
    <form action="" method="post" style="background-color: whitesmoke; padding: 10px 10px 10px 10px;">
        <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleFormControlInput1">Title of your Post</label>
          <input type="text" class="form-control" name="titlePostInput" id="exampleFormControlInput1" placeholder="title...">
        </div>
        </div>

        <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="ContentPostInput" rows="5"></textarea>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Tag</label>
            <input type="text" class="form-control" name="TagPostInput" id="exampleFormControlInput1" placeholder="sport...">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlInput2">Keyword</label>
            <input type="text" class="form-control" name="KeywordPostInput" id="exampleFormControlInput2" placeholder="keyword...">
          </div>
        </div>
        <div class="form-group row ">
            <div class="col-sm-4">
              <button type="submit" class="btn btn-warning">Reset Form</button>
            </div>
            <div class="col-sm-4">
                <button type="submit" id="submitPost" name="submitPost" class="btn btn-primary">Submit / Post</button>
              </div>
              <div class="col-sm-4">
                <button type="submit" class="btn btn-danger">Delete the Post From Database</button>
              </div>
          </div>
      </form>
    
</div>
</body>
</html>