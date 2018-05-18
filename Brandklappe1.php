<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Brandklappe 1</title>
</head>
<style type="text/css">
 .tabelle-colour
 {
  background-color:#efefef;
  border-style:solid #000000 1px;
 }
#Tabelle
{
 position:absolute;
 left:10px; top:250px; width:400px; height:600px;

}
#Tabelle2
{
 position:absolute;
 left:200px; top:0px; width:400px; height:600px;
 
}

</style>
<body>
<form action="Brandklappe1.php" method="post">
<p> Slave-ID: <input type="text" name="ID" value="<?php echo $_POST['ID']?>"</p>
<p> Moduladresse: <input type="text" name="modul" value="<?php echo $_POST['modul']?>"</p>
<p> Ausgang 1 anschalten: <input type="text" name="Ausgang1" value="<?php echo $_POST['Ausgang1']?>"</p>
  <input type="submit">
</form>

<a href="Daten_schreiben.php" target="frame">Update</a>
<iframe src="about:blank" name="frame" height="0" width="0" frameborder="10"></iframe>


<div id="Tabelle" class="tabelle-colour">

<?php

$Pfadeingang = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave";
$Pfadeingang .= (int)$_POST['ID']; 
$Pfadeingang = $Pfadeingang.'FC2';

// Konfiguration
$csvFile1 = "$Pfadeingang";
$maxRows = 4;

// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile1, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=40% height=50 class=\"csvTable\">";

echo "<h1 align=left>Eingänge</h1>";
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

?>

<div id="Tabelle2" class="tabelle-colour">

<?php

$Pfadausgang = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave";
$Pfadausgang .= (int)$_POST['ID']; 
$Pfadausgang = $Pfadausgang.'FC1';

$csvFile2 = "$Pfadausgang";
$firstRowHeader = false;
$maxRows = 4;


$handle = fopen($csvFile2, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=40% height=50 class=\"csvTable\">";

echo "<h1 align=left>Ausgänge</h1>";

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
 
?>

 
<?php

$Pfadausgang_Write = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave";
$Pfadausgang_Write .= (int)$_POST['ID']; 
$Pfadausgang_Write = $Pfadausgang_Write.'FC5';

$firstRowHeader = false;
$maxRows = 4;
$counter = 0;

$handle = fopen($Pfadausgang_Write, "c+");

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


?>





</td>
</body>
<!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</html>
