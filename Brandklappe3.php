<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Brandklappe 1</title>
</head>
<style type="text/css">
 .examplediv
 {
  background-color:#efefef;
  border-style:solid #000000 1px;
 }
#divid
{
 position:absolute;
 left:150px; top:250px; width:900px; height:250px;
 overflow:auto;
}
</style>
	
<body>
<div id="divid" class="examplediv">
<?php

// Konfiguration
$csvFile = "daten.csv";
$firstRowHeader = true;
$maxRows = 100;
 
// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile, "r");
$counter = 0;
echo "<table align=center border=8 cellpadding=12 border width=50% height=50 class=\"csvTable\">";

echo "<h1 align=center>Überschrift 1. Ordnung</h1>";

while(($data = fgetcsv($handle, 999, ",")) && ($counter < $maxRows)) 
  
{
 
  echo "<tr>";
  echo "<tr>";

  if(($counter == 0) && $firstRowHeader) 
  {
    
    echo "<th align=left>".$data[0]."</th>";
    echo "<th align=left>".$data[1]."</th>";
    echo "<th align=left>".$data[2]."</th>";
    echo "<th align=left>".$data[3]."</th>";
    echo "<th align=left>".$data[4]."</th>";
    echo "<th align=left>".$data[5]."</th>";
    echo "<th align=left>".$data[6]."</th>";
    echo "<th align=left>".$data[7]."</th>";
    echo "<th align=left>".$data[8]."</th>";
    echo "<th align=left>".$data[9]."</th>";
  }
  else 
  {
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";
    echo "<td>".$data[2]."</td>";
    echo "<td>".$data[3]."</td>";
    echo "<td>".$data[4]."</td>";
    echo "<td>".$data[5]."</td>";
    echo "<td>".$data[6]."</td>";
    echo "<td>".$data[7]."</td>";
    echo "<td>".$data[8]."</td>";
    echo "<td>".$data[9]."</td>";
  }
  echo "</tr>";
  echo "</tr>";
 
  $counter++;
}
echo "</table>"; 
 
fclose($handle);
 
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
