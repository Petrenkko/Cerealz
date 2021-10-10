<?php include("product_list.php"); ?>

    <div class="row">

                <div class="col-md-6">
                    <img src="Products/<?php echo $produse[ $_GET["product_id"] ]["image"]; ?>" class="img-modal">
                </div>

                <div class="col-md-6" >
                <div class="row">
                        <div class="col-md-12">
                        <?php
                            echo $produse[ $_GET["product_id"] ]["nume"];
                        ?>
                        </div>
                    </div>
                    
                <div class="row">

                        <div class=" col-md-1">
                            <span for="quant" style="vertical-align: bottom;">Q:</span>
                        </div>
                        <div class="col-md-2">
                            <input id = "quant" class="form-control" style="width: 90px;" required type="number" value="1" min="0" max="100"/>
                        </div>
                </div>
                </div>
            </div>