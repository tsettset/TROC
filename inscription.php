<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Troc</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 

        <style>

            .jumbotron  {

                margin: 0 auto 0 auto;
                width:730px;
            }

        </style>
    </head>

    <body>

        <br>
        <div class="container">
            <div class="jumbotron">
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="pseudo">Pseudo : </label><br>
                        <input class="form-control" type="text" name="pseudo" placeholder="Votre pseudo" id="pseudo"><br>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe : </label><br>   
                        <input class="form-control" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe"><br>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom: </label><br>   
                        <input class="form-control" type="text" name="nom" id="nom" placeholder="Votre nom"><br>
                    </div>
                    <div class="form-group">
                        <label for="prenom">prenom: </label><br>   
                        <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Votre prenom"><br>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone : </label><br>   
                        <input class="form-control" type="tel" name="telephone" id="telephone" placeholder="Votre téléphone"><br>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Email: </label><br>   
                        <input class="form-control" type="email" name="email" id="email" placeholder="Votre email"><br>
                    </div>
                    <div class="form-group">
                        <label for="civilite">Civilite :</label><br>
                        <input type="radio" name="civilite" id="civilite" name="civilite" value="m"> Homme
                        <input type="radio" name="civilite" id="civilite" name="civilite" value="f"> Femme  
                    </div>
                    <input class="btn btn-info" type="submit" value="Valider">
                </form>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>