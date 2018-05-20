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
echo "<h1>Benutzername oder Password falsch!</h1> <br /><br /><br />";
echo "<h3>Sie werden automatisch wieder in 5 Sekunden zur Log-In Seite umgeleitet !</h3> <br /><br /><br />";
echo "<h3>Bitte dort erneut Benutzername und Passwort eingeben - Bitte auf aktivierten Caps-Lock achten - Case Sensitive !!!</h3>";
}
?>
<meta http-equiv="refresh" content="5; URL=Kennwort.php">
</body>
</html>
