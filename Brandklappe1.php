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
 left:10px; top:250px; width:1100px; height:400px;
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

<form action="Daten_schreiben.php">
 <label for="Ausschalten"></label>
 <button class="bonbon gruen">
   Ausschalten !!
 </button>
</form>
</body>
	
<body>

<?php

// Konfiguration
$csvFile = "E:\MBWatcher_dev\Source\mb_daten\Slave1FC2";
$firstRowHeader = true;
$maxRows = 10;
 
// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile, "r");
$counter = 0;
echo "<table align=top border=8 cellpadding=12 border width=100% height=50 class=\"csvTable\">";

echo "<h1 align=center>Status Brandmeldeklappe 1</h1>";

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
