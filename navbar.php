
  <nav class="navbar navbar-inverse ">
     <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">TROC</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="#">Qui Sommes Nous</a></li>
          <li><a href="#"><Contact></Contact></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="btn btn-default glyphicon glyphicon-user"> Espace membre</span></a>
            <ul class="dropdown-menu">
              <li type="button" data-toggle="modal" data-target="#modalLoginForm"><a href="#">Inscription</a></li>


             <li><a href="connexion.php">Connexion</a></li>
              <li><a href="?action&affichage=profil">Profil</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-center">
          <input type="text" class="form-control" placeholder="Search...">
        </form>

      </div>
    </div>
 </nav>


 
  <br>
  <br>

  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <p><?php require_once('inscription_controller.php'); ?></p>


        </div>
      </div>
    </div>
  </div>

