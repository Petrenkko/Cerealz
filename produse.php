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
        <button >Află mai multe</button>
        </div>
    </div>

<?php
    include("navbar.php");
?>
    
    <br><br>
    <h1 class="titletext">
    Check out our cereals:
    </h1>
    <br><br>
    <?php
    include("product_list.php");
    ?>
    <!--  ---------ROW_1------------  -->
    <div class="row" style="text-align: center; padding: 2%;">
        <?php
            for($i = 0; $i < count($produse); $i++)
            {
                include("casuta_card.php");
            }
        ?>
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
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Purchase cereals</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" style="padding : 40px;">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn cbtn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary cbtn">Add to cart</button>
        </div>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function(){

        $('.userinfo').click(function(){
        
        var product_id = $(this).data('id');
        // AJAX request
        $.ajax({
        url: 'product_details.php',
        type: 'get',
        data: {product_id: product_id},
        success: function(response){ 
            // Add response in Modal body
            $('.modal-body').html(response);

            // Display Modal
            $('#empModal').modal('show'); 
        }
        });
        });
        });
    </script>
</body> 
</html>
