<?php
require_once('fiche_annonce_model.php');

///compute
if (isset ($_GET['ficheAction']) && $_GET['ficheAction'] == 'creer' ){
  require_once('cre_fiche_annonce_view.php');
} else {
  require_once('fiche_annonce_view.php');
}
