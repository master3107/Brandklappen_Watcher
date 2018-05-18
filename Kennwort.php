<?php include("Zugang.php"); ?>
<html>

<head>

</head>
<body>
<form method="post">
Username: <input name="user"><br>
Kennwort: <input name="pass" type="password"><br>
<input type= "submit" value="OK">
</form>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
if ($user == $user_ok && $pass == $pass_ok)
header ('location: Brandklappe1.php');
else echo "Falsche Eingaben!";
?>

</body>
</html>

