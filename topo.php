<?php
$hoofdstad = array("Japan" => "Tokyo", "Mexico" => "Mexico-city", "USA" => "Washington D.C.",);
foreach($hoofdstad as $land => $boo){
    echo "wat is de hoofdstad van " .$land.PHP_EOL; 
    $stad = readline();
    if($stad == $boo) {
        echo "dat klopt ga maar door" .PHP_EOL;
    }else{
        echo "Helaas $stad is niet de hoofdstad van $land";
        exit;
    }
}
?>