<?php
$list = array('00226;0');
    

// Konfiguration
$csvFile = "/home/odroid/Documents/MBWatcher_dev/Source/mb_daten/Slave1FC2";
$firstRowHeader = true;
$maxRows = 300;
 
// Daten schreiben
$handle = fopen($csvFile, "a+");


    fputcsv($handle, $list);


fclose($handle);
?>   
