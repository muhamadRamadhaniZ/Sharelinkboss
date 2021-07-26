<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Share Link Boss ||</title>
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
        <div class="row d-flex flex-row-reverse" style=" margin-top: 0px; padding: 100px;">
        <div class="col-md-6">
                    <img src="{!! asset('assets/img/bg1.svg') !!}" width= 100% style="margin-top: 20px;" >
            </div>
            <div class="col-md-6">
                <h1 class="">SHARELINK</h1>
                <p>Share your file fast and free</p>
                <form-group action="#">
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            <label for="inputLink" class="col-form-label">Link</label>
                        </div>
                        <div class="col-11">
                            <input type="text" class="form-control" id="link" class="form-control" aria-describedby="">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-outline-info btn-lg btn-block">Create</button>
                </form-group>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="footer text-center">
      Copyright by ShareLinkBoss
   </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>

</html>