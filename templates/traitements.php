<?php
require "Users.php";
$user =new User ($_POST["identifiant"],$_POST["pseudo"],$_POST["motdepasse"]);
