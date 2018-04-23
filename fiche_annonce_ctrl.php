<?php
require_once('fiche_annonce_model.php');

//pour debug
$_SESSION['donnees']['statut'] = 0;
$_SESSION['donnees']['first_name']='Hate';
$_SESSION['donnees']['last_name']='Love';
// !pour debug

if (isset ($_GET['ficheAction']) && $_GET['ficheAction'] == 'creer' ){
  require_once('cre_fiche_annonce_view.php');
} else {
  require_once('fiche_annonce_view.php');
}

?>

<script>
$(document).ready(function(){
  $('#message_board').hide();
  $('#validation_success').hide();
  $('#validation_failure').hide();
  //liste des categories depuis la bdd, l'affiche avec tag ouvrant/fermant
  $('#select_categorie').html('<?= getListeCategories('<option>','</option>');?>');
  $('#submit_creation').on('click',function(event){
    event.preventDefault();
    ajax();
  });

});

function ajax(){
  var params = $('#form_creation_annonce').serialize();
  $.post('check_creation_annonce.php',params,function(reponse){
    console.log(reponse.validation);
    if (reponse.validation == 'ok'){
      //var resultat_validation = reponse.validation;
      var resultat_validation = reponse.message;
      $('#validation_success').html(resultat_validation);
      $('#message_board').show();
      $('#validation_success').show();
    } else{
      var resultat_validation = reponse.message;
      $('#validation_failure').html(resultat_validation);
      $('#message_board').show();
      $('#validation_success').show();
    }
  },'json');

}
</script>
