<h1>Creer une annonce</h1>
<form method="post" action="#" id="form_creation_annonce">
  <div class="container">
    <div class="row border mt-3 p-3">
      <div class="col-md-7 offset-2">
        <label for="titre_annonce">Titre</label>
        <input type="text" class="form-control" name="titre_annonce" id="titre_annonce" placeholder="titre de l'annonce">
      </div>
    </div>
    <div class="row border mt-3 p-3">
      <div class="col-md-4 offset-1">
        <label for="description_courte">Description courte</label>
        <textarea class="form-control" name="description_courte" id="description_courte" type="text">Description courte (255 caracteres)</textarea>
      </span>
    </div>
    <div class="col-md-4 offset-1 p-3">
      <label for="prix">Prix</label>
      <input class="form-control" type="number" name="prix" id="prix" placeholder="prix">
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-4 offset-1">
      <label for="description_longue">Description longue</label>
      <textarea class="form-control" name="description_longue" id="description_longue" type="text">Description longue</textarea>
    </div>
    <div class="col-md-4 offset-1">
      <label for="select_categorie">Categorie</label>
      <select name="select_categorie" id="select_categorie" class="form-control">
      </select>
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-4 offset-1">
      <label for="upload_photo">Photo</label>
      <input type="file" id="upload_photo" class="form-control" name="upload_photo">
    </div>
    <div class="col-md-4 offset-1">
      <img src="img/img4.jpg" alt="image annonce troc en ligne" title="image du produit" class="img-fluid">
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-4 offset-1">
      <label for="addresse_annonce">Adresse</label>
      <input type="text" class="form-control" name="addresse_annonce" id="addresse_annonce" placeholder="Adresse">
    </div>
    <div class="col-md-4 offset-1">
      <label for="ville_annonce">Ville</label>
      <input type="text" class="form-control" name="ville_annonce" id="ville_annonce" placeholder="Ville">
    </div>
    <div class="col-md-4 offset-1">
      <label for="cp_annonce">Code Postal</label>
      <input type="text" class="form-control" name="cp_annonce" id="cp_annonce" placeholder="Code Postal">
    </div>
    <div class="col-md-4 offset-1">
      <label for="pays_annonce">Pays</label>
      <input type="text" class="form-control" name="pays_annonce" id="pays_annonce" placeholder="Pays">
    </div>
  </div>
  <div class="row mt-3 p-3" id="message_board" >
    <div class="col-md-6 offset-3 alert alert-success" id="validation_success">
    </div>
    <div class="col-md-6 offset-3 alert alert-danger" id="validation_failure">
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-6 offset-3">
      <button type="button" id="submit_creation" class="btn btn-primary btn-lg btn-block">Envoyer la creation de l'annonce !</button>
    </div>
  </div>


</div>
</form>
