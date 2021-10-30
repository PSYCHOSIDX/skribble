<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary align-items-center">
<h1 class="text-white text-center m-5">  POST </h1>
<div class="card bg-dark border-success m-5 align-items-center col-sm-12 col col-md-11  " style="margin-top:20vh">
  <div class="card-header text-white">UPLOAD POST</div>
  <div class="card-body text-success">
    
<form action="upload.php" method="POST" enctype="multipart/form-data" >

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Post title</div>
  </div>

  <div class="mb-3">
    <label  class="form-label">PHOTO</label>
    <input type="file" class="form-control" name="photo">
  </div>


  <div class="mb-3">
    <label  class="form-label">Content</label>
    <input type="text" class="form-control" name="content_des">
    <div id="emailHelp" class="form-text">Enter Post description</div>
  </div>

  <div class="mb-3">
    <label  class="form-label">Link</label>
    <input type="text" class="form-control" name="link">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
  </div>


</body>
</html>