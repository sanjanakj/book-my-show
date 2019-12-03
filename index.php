<?php 

require 'db/connect.php';

$query = "SELECT * FROM `movies`";

$moviesList = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
<head>
  <title>BOOK MY SHOW</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Book My Show</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Movies</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--Start Slider -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/21-bridges-22-11-2019-11-12-08-785.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pagalpanti-19-11-2019-12-52-47-999.webp" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item">
      <img src="images/frozen-2-22-11-2019-12-06-57-562.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- End Slider -->

<!-- Start Latest Movies -->

<div class="container padding-3">
  <h3 align="center" class="padding-3">LATEST MOVIES</h3>
  <div class="row">
    <?php 
      foreach ($moviesList as $key => $value) {
        echo '<div class="col-md-4 col-12">
      <div class="card">
        <div class="card-body">
          <img src="images/bigil-et00105457-22-06-2019-09-25-30.jpg" height="300" width="300">         
        </div>
        <div class="card-footer">
          <h4 class="card-title" align="center">'.$value['title'].'</h4>    
          <span>Duration: '.$value['duration'].'</span>   
          <span class="pull-right">|   Language: '.$value['language'].'</span>    
        </div>
      </div>      
    </div>';
      }
    ?>
    
    
  </div>
</div>

<!-- End Latest Movies -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>