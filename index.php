
<?php
session_start();
$_SESSION ['user']="identifiant";

var_dump($_GET);
var_dump($_POST);



// // ****************************** ROUTER ***********************************
// // Récupération de la route via la requête utilisateur (GET) ?route=<route>
// // Si aucune route n'est définie, on lui donne pour valeur "default"
// $route = (isset($_GET["route"]))? $_GET["route"] : "accueil";

// switch($route) {

//     case "identifiant" :  $toTemplate = showHome();
//     break;

//     case "motdepasse" :  $toTemplate = shoHome();
//     break;
//     case "formuser" :  $toTemplate = showFormUser();
//     break;
//     case "ajoutuser" :  insert_user();
//     break;
//     default : $toTemplate = ["template" => "accueil.html"];
// }
switch($route) {

    case "identifiant" : $Template = showHome();
    break;
     case "ajoutuser" : insert_user();
    break;
    default : $Template = ["template" => "accueil.html"];

}
function showHome(): array {
 return ["template" => "accueil.html"];
}





function insert_user() {
    
    $user =new User ($_POST["identifiant"],$_POST["pseudo"],$_POST["motdepasse"]);
    require_once "Users.php";
    $user->saveUser();
    var_dump($users);
 
    

    header("Location:index.php?route=insert_user");
    exit;
}
   
 function showFormUser(): array {

    require_once "Save/Users.php";

   
    return ["template" => "formulaire.php", "data" => $users];
}


 






?>

   

    



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
</head>
<body>
    <h1>Page d'accueil</h1>
 <!-- formulaire-->
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
    <?php require "templates/".$toTemplate['template'];?>
</body>


</html>






