<h1>Creer une annonce</h1>
<form method="post" action="#">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-2">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre" placeholder="titre de l'annonce">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 offset-1">
        <label for="description_courte">Description courte</label>
        <textarea class="form-control" name="descript_courte" id="descript_courte" type="text" style="height:35px">Description courte (255 caracteres)</textarea>
      </div>
      <div class="col-md-4 offset-1">
        <label for="prix">Prix</label>
        <input class="form-control" type="number" name="prix" id="prix" placeholder="prix">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 offset-1">
        <label for="descript_longue">Description longue</label>
        <textarea class="form-control" name="descript_longue" id="descript_longue"type="text">Description longue</textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 offset-1">
        <label for="photo">Photo</label>
        <input type="file" id="photo" class="form-control" name="photo">
      </div>
      <div class="col-md-4 offset-1">
        <label for="categorie">Categorie</label>
        <select name="categorie" id="categorie" class="form-control">
          <option>categorie 1</option>
          <option>categorie 2</option>
          <option>categorie 3</option>
        </select>
      </div>
    </div>
    <!--<input type="text" name="pays" id="pays" placeholder="pays">
    <input type="text" name="ville" id="ville" placeholder="ville">
    <input type="text" name="adresse" id="adresse" placeholder="adresse">
    <input type="text" name="cp" id="cp" placeholder="code postal">-->
  </div>
</form>
