<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wartungstool BK-UZ</title>
</head>
<style type="text/css">
    body {
     background-color:#F0F8FF;
     font-family:Arial, Helvetica; 
     }
    h1 { 
     font-size:20pt;
     background-color:#00BFFF; 
     border:6px double navy; 
     color:#F0F8FF; 
     height:40px;
     width:600px; 
    }

.button {
  margin-top: 0px;
  margin-left: 0px;
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button2 {
  margin-top: 10px;
  margin-left: 10px;
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgba(255, 0, 0, 0.3);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button2:hover {background-color: rgba(255, 0, 0, 0.8)}

.button2:active {
  background-color: rgba(255, 0, 0, 0.6);
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.tabelle-colour
 {
  background-color:#efefef;
  border-style:solid #000000 1px;
 }
#Tabelle
{
 position:absolute;
 left:100px; top:0px; width:200px; height:300px;

}
#Tabelle2
{
 position:absolute;
 left:100px; top:0px; width:200px; height:300px; 
}
#Tabelle3
{
 position:absolute;
 left:20px; top:450px; width:200px; height:300px; 
}
#Tabelle4
{
 position:absolute;
 left:180px; top:0px; width:200px; height:300px; 
}

.led-box {
  height: 30px;
  width: 25%;
  margin: 10px 0;
  float: left;
}

.led-box p {
  font-size: 12px;
  text-align: center;
  margin: 1em;
}

.led-red {
  margin-top: -60px;
  margin-left: 35px;
  width: 24px;
  height: 24px;
  background-color: #F00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 12px;
  -webkit-animation: blinkRed 0.5s infinite;
  -moz-animation: blinkRed 0.5s infinite;
  -ms-animation: blinkRed 0.5s infinite;
  -o-animation: blinkRed 0.5s infinite;
  animation: blinkRed 0.5s infinite;
}

@-webkit-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-moz-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-ms-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}


    to { background-color: #F00; }
}
@-o-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}


.led-green {
  margin-top: -60px;
  margin-left: 410px;
  width: 24px;
  height: 24px;
  background-color: #008000;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;

-webkit-animation: blinkgreen 0.5s infinite;
  -moz-animation: blinkgreen 0.5s infinite;
  -ms-animation: blinkgreen 0.5s infinite;
  -o-animation: blinkgreen 0.5s infinite;
  animation: blinkgreen 0.5s infinite;
}

@-webkit-keyframes blinkgreen {
    from { background-color: #008000; }
    50% { background-color: #008000; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #008000; }
}
@-moz-keyframes blinkgreen {
    from { background-color: #008000; }
    50% { background-color: #008000; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #008000; }
}
@-ms-keyframes blinkgreen {
    from { background-color: #008000; }
    50% { background-color: #008000; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #008000; }
}
@-o-keyframes blinkgreen {
    from { background-color: #008000; }
    50% { background-color: #008000; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #008000; }
}
@keyframes blinkgreen {
    from { background-color: #008000; }
    50% { background-color: #008000; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #008000; }
}

</style>
<body>

<h1 text align=center><b>Wartungstool BK-UZ</b></h1><br>
<button class="button">Einschalten</button>
<button class="button2">Ausschalten</button>
<h3><div class="led-box">
<div class="led-green"><br><br>Online</div>
</div>
<div class="led-box">
<div class="led-red"><br><br>Störung</div>
</div></h3><br><br>



<form action="Brandklappe1.php" method="post">
<p> Slave-ID: <input type="text" name="ID" value="<?php echo $_POST['ID']?>"</p>
<p> Moduladresse: <input type="text" name="modul" value="<?php echo $_POST['modul']?>"</p>
<p> Ausgang 1 (on=1 / off=0): <input type="text" name="Ausgang1" value="<?php echo $_POST['Ausgang1']?>"</p>
<p> Ausgang 2 (on=1 / off=0): <input type="text" name="Ausgang2" value="<?php echo $_POST['Ausgang2']?>"</p>
<p> Ausgang 3 (on=1 / off=0): <input type="text" name="Ausgang3" value="<?php echo $_POST['Ausgang3']?>"</p>
<p> Ausgang 4 (on=1 / off=0): <input type="text" name="Ausgang4" value="<?php echo $_POST['Ausgang4']?>"</p>
  <input type="submit">
</form><br><br><br><br><br><br>

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

$Pfadeingang = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave";
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

$Pfadausgang = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave";
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
$Zeichenoffset=15;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang2']);
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
$Zeichenoffset=24;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang3']);
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
$Zeichenoffset=33;
fseek($handle,$offset);

while(($data = fgetcsv($handle, 9, ";")) && ($counter < $maxRows))
{
;
}
fseek($handle,$offset+$Zeichenoffset,SEEK_SET);
fwrite ($handle,(int)$_POST['Ausgang4']);
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
