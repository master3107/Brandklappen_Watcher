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
 overflow:auto;
}
#Tabelle2
{
 position:absolute;
 left:200px; top:0px; width:400px; height:600px;
 overflow:auto;
}

.bonbon {
	width: 200px;
	height: 60px;
	background: yellow;
	
	
	background: linear-gradient(to bottom, white, yellow);
	box-shadow: inset 0px 0px 6px #fff, inset 0px -1px 6px #fff;
	border: 1px solid #5ea617;
	border-radius: 1em;
	margin: 1em;
}

.bonbon.rot {
	background: linear-gradient(to bottom, white, red);
}

.bonbon.orange {
	background: linear-gradient(to bottom, white, orange);
}

.bonbon.gruen {
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, greenyellow), color-stop(100%, lime));
	/* webkit */
	
	background: linear-gradient(to bottom, lime, green);
}

.bonbon.blau {
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, skyblue), color-stop(100%, blue));
	/* webkit */
	
	background: linear-gradient(to bottom, skyblue, blue);
}

.bonbon.lila {
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, violet), color-stop(100%, purple));
	/* webkit */
	
	background: linear-gradient(to bottom, hotpink, purple);
}

.bonbon:hover,
.bonbon:focus {
	box-shadow: rgba(0, 0, 0, 0.7) 0px 5px 15px, inset rgba(0, 0, 0, 0.15) 0px -10px 20px;
}
</style>
<body>
<form action="Daten_schreiben.php" method="post">
  <input type="summit" name="Einschalten">
 <button class="bonbon rot">
    Einschalten !!
 </button>
</form>

<a href="Daten_schreiben.php" target="frame">Update</a>
<iframe src="about:blank" name="frame" height="0" width="0" frameborder="10"></iframe>


<div id="Tabelle" class="tabelle-colour">

<?php


// Konfiguration
$csvFile1 = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave1FC2";
$firstRowHeader = true;
$maxRows = 200;
 
// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile1, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=40% height=50 class=\"csvTable\">";

echo "<h1 align=left>Ausgänge</h1>";

while(($data = fgetcsv($handle, 999, ";")) && ($counter < $maxRows)) 
  
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

<div id="Tabelle2" class="tabelle-colour">

<?php
  
$csvFile2 = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave6FC2";
$firstRowHeader = true;
$maxRows = 200;


$handle = fopen($csvFile2, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=40% height=50 class=\"csvTable\">";

echo "<h1 align=left>Eingänge</h1>";

while(($data = fgetcsv($handle, 999, ";")) && ($counter < $maxRows)) 
  
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
