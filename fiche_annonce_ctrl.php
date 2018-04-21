<?php
require_once('fiche_annonce_model.php');


if (isset ($_GET['ficheAction']) && $_GET['ficheAction'] == 'creer' ){
  require_once('cre_fiche_annonce_view.php');
} else {
  require_once('fiche_annonce_view.php');
}


?>

<script>
$(document).ready(function(){
    $('#select-categorie').html('<?= getListeCategories('<option>','</option>');?>');
});

</script>
