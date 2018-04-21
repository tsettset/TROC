<?php $test = 'php var'; ?>
<h1>Creer une annonce</h1>
<form method="post" action="#">
  <div class="container">
    <div class="row border mt-3 p-3">
      <div class="col-md-7 offset-2">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre" placeholder="titre de l'annonce">
      </div>
    </div>
    <div class="row border mt-3 p-3">
      <div class="col-md-4 offset-1">
        <label for="description_courte">Description courte</label>
        <textarea class="form-control" name="descript_courte" id="descript_courte" type="text">Description courte (255 caracteres)</textarea>
      </span>
      </div>
      <div class="col-md-4 offset-1 p-3">
        <label for="prix">Prix</label>
        <input class="form-control" type="number" name="prix" id="prix" placeholder="prix">
      </div>
    </div>
    <div class="row border mt-3 p-3">
      <div class="col-md-4 offset-1">
        <label for="descript_longue">Description longue</label>
        <textarea class="form-control" name="descript_longue" id="descript_longue" type="text">Description longue</textarea>
      </div>
      <div class="col-md-4 offset-1">
        <label for="select-categorie">Categorie</label>
        <select name="select-categorie" id="select-categorie" class="form-control">
        </select>
      </div>
    </div>
    <div class="row border mt-3 p-3">
      <div class="col-md-4 offset-1">
        <label for="upload-photo">Photo</label>
        <input type="file" id="upload-photo" class="form-control" name="upload-photo">
      </div>
      <div class="col-md-4 offset-1">
        <img src="img/img4.jpg" alt="image annonce troc en ligne" title="image du produit" class="img-fluid">
      </div>
    </div>
    <!--<input type="text" name="pays" id="pays" placeholder="pays">
    <input type="text" name="ville" id="ville" placeholder="ville">
    <input type="text" name="adresse" id="adresse" placeholder="adresse">
    <input type="text" name="cp" id="cp" placeholder="code postal">-->
  </div>
</form>
