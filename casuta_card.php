        <div class ="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="Products/<?php echo $produse[$i]["image"]; ?>" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text"><?php echo $produse[$i]["nume"]; ?></p>
                    <a href="product_details.php?product_id= <?php echo $i; ?> " data-id="<?php echo $i; ?>"  class="btn cbtn userinfo" data-toggle="modal" data-target="#exampleModal">Purchase</a>
                    </div>
                </div>
        </div>