<nav class="navbar sticky-top navbar-expand-md culoare_nav navbar-dark">
    <a href="index.html">
      <img src="POZE/Lugoo.png" alt="Logo" style="width:60px;">
    </a>
      <!-- Brand 
      <a class="navbar-brand" href="#">Navbar</a> 
      -->
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php 
        $activ_home = "";
        $activ_produse = "";
        switch($_GET["menu_activ"]){
            case "h":
                $activ_home = " active ";
                break;
            case "p":
                $activ_produse = " active ";
                break;
            
        }
      ?>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class=" <?php echo $activ_home;?> nav-item">
            <a class="nav-link" href="index.php?menu_activ=h">Home</a>
          </li>
          <li class=" <?php echo $activ_produse;?>  nav-item">
            <a class="nav-link" href="produse.php?menu_activ=p">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Meniuri</a>
          </li>
        </ul>
      </div>
    </nav> 