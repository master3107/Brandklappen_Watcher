<?php
$list = array('101','Abby', 'Gale', '310782', 'Magdeburg','Marx.Street 12');
    

// Konfiguration
$csvFile = "daten.csv";
$firstRowHeader = true;
$maxRows = 200;
 
// Daten schreiben
$handle = fopen($csvFile, "a+");


    fputcsv($handle, $list);


fclose($handle);
?>   
