
<html>

<head>
<title>Log-In Wartungstool</title>
<style type="text/css">
    body {
     background-color:#F0F8FF;
     font-family:Arial, Helvetica; 
     }
    h3 { 
     font-size:20pt;
     background-color:#00BFFF; 
     border:6px double navy; 
     color:#F0F8FF; 
     height:85px;
     width:400px; 
    }
   </style>
</head>
<body>

<echo><b><h3>Herzlich Willkommen auf unserer Log-In Seite für das Wartungstool !!</h3></b></echo>
<br><br><echo><b>Bitte geben Sie ihren Benutzernamen und Passwort ein !</b></echo><br><br><br>

<form action= "Zugang.php" method="post">
Username: <input name="user"><br><br>
Kennwort  : <input name="pass" type="password"><br><br><br>
<input type= "submit" value="OK">
</form>
<br>
<br>



<?php

$tage = array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");
$tag = date("w");
echo "Heute ist $tage[$tag], der " ;


$Zeitstempel = time();
$Datum = date ("d.m.Y - H:i" , $Zeitstempel);
echo "$Datum !" . "\n";

 

?>

</body>
</html>

