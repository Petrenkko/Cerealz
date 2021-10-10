<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cerealz Planet Café</title>
  <link rel="icon" href="POZE/Lugoo.png" type="image/icon type">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel = "stylesheet" href="slideshow.css">
  <link rel = "stylesheet" href="stil.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
<body>
    <!-- IMG 
    --> 
      <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px; font-family: title-font;">Cerealz Planet Café</h1>
            <p>Piatra Neamț</p>
            <button>Află mai multe</button>
          </div>
      </div>

    <?php
        include("navbar.php");
    ?>
      
      <br><br><br><br><br><br>
      
      <div class="row">
        
        <div class ="col-md-4">
          <div class="card" style="width: 90%;">
            <img class="card-img-top" src="POZE/tava.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        
        <div class ="col-md-4">
          <div class="card" style="width: 90%;">
            <img class="card-img-top" src="POZE/PANOU.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class ="col-md-4">
          <div class="card" style="width: 90%;">
            <img class="card-img-top" src="POZE/tava.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
          

      </div>


      <br><br><br><br><br><br>
      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img class="d-block w-100 peopleCarouselImg" src="POZE/imag3.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 peopleCarouselImg" src="POZE/imag2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 peopleCarouselImg" src="POZE/tava.jpg" alt="Third slide">
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

      <?php
        include("footer.php");
    ?>
</body> 
</html>
