<?php
$hoofdstad = array("Japan" => "Tokyo", "Mexico" => "Mexico-city", "USA" => "Washington D.C.", "India" => "New Delhi", "Zuid-Korea" => "Seoul", "China" => "Peking", "Nigeria" => "Abuja", "Argentina" => "Buenos Aires", "Egypt" => "Cairo", "UK" => "London");
foreach($hoofdstad as $land => $boo){
    echo "wat is de hoofdstad van " .$land.PHP_EOL; 
    $stad = readline();
    if($stad == $boo){
        echo "dat klopt ga maar door" .PHP_EOL;
    }else{
        echo "Helaas $stad is niet de hoofdstad van $land";
        exit;
    }
}
?>