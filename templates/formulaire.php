<?php


$users = $Template["Save"];

?>



<!-- formulaire d'enregistrement-->
<form action="index.php?route=insert_user" methode="post">

<label for="registrer" id="registrer">Inscription</label>
<input type="texte" id="pseudo" name="pseudo" placeholder="pseudo"autofocus >
<input type="password" id="motdepasse" name="motdepasse " placeholder="Entrez votre mot de passe"autofocus >
<input type="submit" id="submit1" value="envoyer !">

</form>
<!-- formulaire de connexion-->
 <form action="index.php?route=connect_user" methode="post"> 

    <label for="login" id="login">se connecter</label>
    <input type="number" id="identifiant" name="identifiant" placeholder="identifiant"autofocus >
    <input type="password" id="motdepasse" name="password " placeholder="Entrez votre mot de passe"autofocus >
    <input type="submit" id ="submit2" value="envoyer !">
    
    </form>
 