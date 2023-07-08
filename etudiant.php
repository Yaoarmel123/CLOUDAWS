
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8">
  <!--importer le fichier de style -->
  <link rel= "stylesheet" href= "style.css" media= "screen" type= "text/css" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Ajouter un étudiant </title>
</head>
<body><center>
<div id= "container">
 <!-- zone de connexion -->

<form method="POST" action="ajoute_etd.php">
<h2>Formulaire Ajouter un étudiant </h2>
<fieldset style="width:300px">
<p>Nom : <input type="text" name="nom" required="required"></p>
<p>Prénoms : <input type="text" name="prenoms" required="required"></p>
<p>Téléphone : <input type="text" name="tel" placeholder="99-99-99-99" required=
"required"></p>
<p>E-mail : <input type="email" name="email" required="required" ></p>
<input type="submit"  value="Enregistrer les modifications" />
</fieldset>
</form>
</center></body>
</html>