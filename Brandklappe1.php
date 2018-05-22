<!doctype html>
<html>
<head>
<link href="css/volkland.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Wartungstool BK-UZ</title>
</head>
<body>
<h1 text align=center><b>Wartungstool BK-UZ</b></h1><br>
<form action="start.php">
<input style="height: 50px; width: 150px;" type="submit" class='button' value="Einschalten">
</form><br><br><form action="stop.php"><input type="submit" style="height: 50px; width: 150px;" class='button2' value="Ausschalten"></form><br><br>

<form action="Brandklappe1.php" method="post">
<p><FONT SIZE="4"><b> Slave-ID:  </b></font><input type="text" name="ID" value="<?php echo $_POST['ID']?>"</p>
<p><FONT SIZE="4"><b> Moduladresse: </b></font><input type="text" name="modul" value="<?php echo $_POST['modul']?>"</p>
<p><FONT SIZE="4"><b> Ausgang 1 (on=1 / off=0): </b></font><input type="text" name="Ausgang1" value="<?php echo $_POST['Ausgang1']?>"</p>
<p><FONT SIZE="4"><b> Ausgang 2 (on=1 / off=0): </b></font><input type="text" name="Ausgang2" value="<?php echo $_POST['Ausgang2']?>"</p>
<p><FONT SIZE="4"><b> Ausgang 3 (on=1 / off=0): </b></font><input type="text" name="Ausgang3" value="<?php echo $_POST['Ausgang3']?>"</p>
<p><FONT SIZE="4"><b> Ausgang 4 (on=1 / off=0): </b></font><input type="text" name="Ausgang4" value="<?php echo $_POST['Ausgang4']?>"</p><br><br><br>
  <input type="submit" class='button3' value= 'Ausgabe/Ansicht-aktualisieren'>
</form><br><br><br><br><br><br><br>

<div id="Tabelle3">

<?php

$A1='IN 1';
$A2='IN 2';
$A3='IN 3';
$A4='IN 4';
echo "<h3 align=left>Eingänge</h3>";
echo "<table align=top border=8 cellpadding=13 border width=50% height=60 class=\"csvTable\">
<tr><td><font color=blue>$A1</font></td></tr>
<tr><td><font color=blue>$A2</font></td></tr>
<tr><td><font color=blue>$A3</font></td></tr>
<tr><td><font color=blue>$A4</font></td></tr>
</table>";

?>
<div id="Tabelle">

<?php

$Pfadeingang = "/home/odroid/Documents/MBWatcher/mb_daten/Slave";
$Pfadeingang .= (int)$_POST['ID']; 
$Pfadeingang = $Pfadeingang.'FC2';

// Konfiguration
$csvFile1 = "$Pfadeingang";
$firstRowHeader = false;
$maxRows = 4;

// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile1, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=50% height=50 class=\"csvTable\">";
$Merker = (int)$_POST['modul'];
echo "<h3 align=left>Modul $Merker</h3>";
$Moduladdr=(int)$_POST['modul'];
$Zeilenlaenge=9;
$offset=($Moduladdr*4)*$Zeilenlaenge;

fseek($handle,$offset);
 


while(($data = fgetcsv($handle, 100, ";")) && ($counter < $maxRows)) 
  
{
 
  echo "<tr>";
  echo "<tr>";

  if($counter == 0)
  {

    echo "<th align=left>".$data[0]."</th>";
    echo "<th align=left>".$data[1]."</th>";
    
  }
  else 
  {
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";

  }
  echo "</tr>";
  echo "</tr>";
 
  $counter++;
}
echo "</table>";
fclose($handle);
?>

<div id="Tabelle4">

<?php

$A1='OUT 1';
$A2='OUT 2';
$A3='OUT 3';
$A4='OUT 4';
echo "<h3 align=left>Ausgänge</h3>";
echo "<table align=top border=8 cellpadding=13 border width=50% height=60 class=\"csvTable\">
<tr><td><font color=blue>$A1</font></td></tr>
<tr><td><font color=blue>$A2</font></td></tr>
<tr><td><font color=blue>$A3</font></td></tr>
<tr><td><font color=blue>$A4</font></td></tr>
</table>";


?>

<div id="Tabelle2">

<?php

$Pfadausgang = "/home/odroid/Documents/MBWatcher/mb_daten/Slave";
$Pfadausgang .= (int)$_POST['ID']; 
$Pfadausgang = $Pfadausgang.'FC1';

$csvFile2 = "$Pfadausgang";
$firstRowHeader = false;
$maxRows = 4;


$handle = fopen($csvFile2, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=40% height=50 class=\"csvTable\">";

$Merker = (int)$_POST['modul'];
echo "<h3 align=left>Modul $Merker</h3>";

$Moduladdr=(int)$_POST['modul'];
$Zeilenlaenge=9;
$offset=($Moduladdr*4)*$Zeilenlaenge;

fseek($handle,$offset);


while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows)) 
  
{
 
  echo "<tr>";
  echo "<tr>";

  if(($counter == 0) && $firstRowHeader) 
  {
    
    echo "<th align=left>".$data[0]."</th>";
    echo "<th align=left>".$data[1]."</th>";
    
  }
  else 
  {
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";

  }
  echo "</tr>";
  echo "</tr>";
 
  $counter++;
}
echo "</table>";
fclose($handle);

?>

<div id="Ausgang1">
<?php
$Pfadausgang_Write = "/home/odroid/Documents/MBWatcher/mb_daten/Slave";
$Pfadausgang_Write .= (int)$_POST['ID']; 
$Pfadausgang_Write = $Pfadausgang_Write.'FC15';

$firstRowHeader = false;
$maxRows = 4;
$counter = 0;

$handle = fopen($Pfadausgang_Write, "c+");

$A1=(int)$_POST['Ausgang1'];
$Moduladdr=(int)$_POST['modul'];
$Zeilenlaenge=9;
$offset=($Moduladdr*4)*$Zeilenlaenge;
$Zeichenoffset=6;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang1']);
fclose($handle);
?>
<div id="Ausgang2">
<?php
$Pfadausgang_Write = "/home/odroid/Documents/MBWatcher/mb_daten/Slave";
$Pfadausgang_Write .= (int)$_POST['ID']; 
$Pfadausgang_Write = $Pfadausgang_Write.'FC15';

$firstRowHeader = false;
$maxRows = 4;
$counter = 0;

$handle = fopen($Pfadausgang_Write, "c+");

$A2=(int)$_POST['Ausgang2'];
$Moduladdr=(int)$_POST['modul'];
$Zeilenlaenge=9;
$offset=($Moduladdr*4)*$Zeilenlaenge;
$Zeichenoffset=15;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang2']);
fclose($handle);
?>
<div id="Ausgang3">
<?php
$Pfadausgang_Write = "/home/odroid/Documents/MBWatcher/mb_daten/Slave";
$Pfadausgang_Write .= (int)$_POST['ID']; 
$Pfadausgang_Write = $Pfadausgang_Write.'FC15';

$firstRowHeader = false;
$maxRows = 4;
$counter = 0;

$handle = fopen($Pfadausgang_Write, "c+");

$A3=(int)$_POST['Ausgang3'];
$Moduladdr=(int)$_POST['modul'];
$Zeilenlaenge=9;
$offset=($Moduladdr*4)*$Zeilenlaenge;
$Zeichenoffset=24;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang3']);
fclose($handle);
?>
<div id="Ausgang4">
<?php
$Pfadausgang_Write = "/home/odroid/Documents/MBWatcher/mb_daten/Slave";
$Pfadausgang_Write .= (int)$_POST['ID']; 
$Pfadausgang_Write = $Pfadausgang_Write.'FC15';

$firstRowHeader = false;
$maxRows = 4;
$counter = 0;

$handle = fopen($Pfadausgang_Write, "c+");

$A4=(int)$_POST['Ausgang4'];
$Moduladdr=(int)$_POST['modul'];
$Zeilenlaenge=9;
$offset=($Moduladdr*4)*$Zeilenlaenge;
$Zeichenoffset=33;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang4']);
fclose($handle);
?>



</td>
</body>
</html>
