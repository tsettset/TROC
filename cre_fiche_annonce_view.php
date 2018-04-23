<h1>Creer une annonce</h1>
<div class="container">
  <form method="post" action="#" id="form_creation_annonce" enctype="multipart/form-data">
  <div class="row border mt-3 p-3">
    <div class="col-md-7 offset-2 form-group">
      <label for="titre_annonce">Titre</label>
      <input type="text" class="form-control" name="titre_annonce" id="titre_annonce" placeholder="titre de l'annonce">
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-4 offset-1 form-group">
      <label for="description_courte">Description courte</label>
      <textarea class="form-control" name="description_courte" id="description_courte" type="text">Description courte (255 caracteres)</textarea>
    </div>
    <div class="col-md-4 offset-1 p-3 form-group">
      <label for="prix">Prix</label>
      <input class="form-control" type="number" name="prix" id="prix" placeholder="prix">
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-4 offset-1 form-group">
      <label for="description_longue">Description longue</label>
      <textarea class="form-control" name="description_longue" id="description_longue" type="text">Description longue</textarea>
    </div>
    <div class="col-md-4 offset-1 form-group">
      <label for="select_categorie">Categorie</label>
      <select name="select_categorie" id="select_categorie" class="form-control">
      </select>
    </div>
  </div>
  <div class="row border mt-3 p-3">
    <div class="col-md-4 offset-1 form-group">
      <label for="addresse_annonce">Adresse</label>
      <input type="text" class="form-control" name="addresse_annonce" id="addresse_annonce" placeholder="Adresse">
    </div>
    <div class="col-md-4 offset-1 form-group">
      <label for="ville_annonce">Ville</label>
      <input type="text" class="form-control" name="ville_annonce" id="ville_annonce" placeholder="Ville">
    </div>
    <div class="col-md-4 offset-1 form-group">
      <label for="cp_annonce">Code Postal</label>
      <input type="text" class="form-control" name="cp_annonce" id="cp_annonce" placeholder="Code Postal">
    </div>
    <div class="col-md-4 offset-1 form-group">
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
</form>
  <div class="row border mt-3 p-3">
    <form method="post" action="#" id="form_photos" enctype="multipart/form-data">
      <div class="col-md-2 offset-1 form-group">
        <label for="upload_photo_1">Photo 1</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <input type="file" id="upload_photo_1" class="form-control" name="upload_photo_1">
      </div>
      <div class="col-md-2 form-group">
        <label for="upload_photo_2">Photo 2</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <input type="file" id="upload_photo_2" class="form-control" name="upload_photo_2">
      </div>
      <div class="col-md-2 form-group">
        <label for="upload_photo_3">Photo 3</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <input type="file" id="upload_photo_3" class="form-control" name="upload_photo_3">
      </div>
      <div class="col-md-2 form-group">
        <label for="upload_photo_4">Photo 4</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <input type="file" id="upload_photo_4" class="form-control" name="upload_photo_4">
      </div>
      <div class="col-md-2 form-group">
        <label for="upload_photo_5">Photo 5</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <input type="file" id="upload_photo_5" class="form-control" name="upload_photo_5">
      </div>
    </form>
  </div>

</div>
