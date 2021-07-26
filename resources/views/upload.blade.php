<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <title>UploadFile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
  <a class="navbar-brand" href="#">ShareLinkBoss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row  " style=" margin-top: 0px; padding: 100px;">
           <div class="col-12">
    <form>
    <div class="form-group row">
    <label for="UploadFile" class="col-sm-2 col-form-label">Upload Files</label>
    <input type="file" class="form-control-file col-sm-10" id="exampleFormControlFile1">
  </div>
  <div class="form-group row">
    <label for="ShareText" class="col-sm-2 col-form-label">Share Text :</label>
    <textarea class="form-control col-sm-10" id="summary-ckeditor" name="summary-ckeditor"></textarea>
  </div>
  <div class="form-group row">
    <label for="timelimit" class="col-sm-2 col-form-label">Time Limit :</label>
    <select class="form-control col-sm-10" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10"><span>File be automatical destroyed after 24 hours</span>
    <div class="d-flex flex-row bd-highlight my-3 p-lg-3">
      <Button class="p-2 bd-highlight btn btn-success" style="width: 150px;">Share</Button>
      <Button class="p-2 bd-highlight btn btn-outline-primary mx-lg-5" style="width: 150px;">Cancel</Button>
    </div>

    </div>
  </div>
  </div>
 
</form>
           </div>
        </div>
    </div>
    <div class="footer text-center">
      Copyright by ShareLinkBoss
   </div>
   <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>