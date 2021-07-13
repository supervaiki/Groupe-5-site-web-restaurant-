<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Mini-chat</title>
<meta http-equiv="Content-Type" content="text/html;
charset=iso-8859-1" />
</head>
<style type="text/css">
form
{
text-align:center;
}
</style>
<body>
<?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=resto', 'root', '',
$pdo_options);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd ->prepare('INSERT INTO resto (name, email,phoneNumber,date,time,nombre,message)
VALUES(?, ?,?,?,?,?,?)');
$req ->execute( array($_POST['name'],$_POST['email'],$_POST['phoneNumber'],$_POST['date'],$_POST['time'],$_POST['nombre'],$_POST['message']));
// Redirection du visiteur vers la page du minichat
header('Location: index.html');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}?>
>
</body>
</html>