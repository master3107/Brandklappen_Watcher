<html>
<head></head>
<body>
<?php
$user_ok = "admin";
$pass_ok = "hallo";

$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == $user_ok && $pass == $pass_ok)
{
header ('location: Brandklappe1.php');
}
if ($user != $user_ok && $pass != $pass_ok)
{
echo "Falsche Eingaben!";
echo " Sie werden automatisch zur Log-In Seite in 3s umgeleitet - Bitte erneut Benutzername und Passwort eingeben ! ";
}
?>
<meta http-equiv="refresh" content="5; URL=Kennwort.php">
</body>
</html>
