<?php

$grades = array(
    "Math" => "3",
    "Art" => "5",
    "English" => "3",
    "Music" => "5",
);

foreach($grades as $subject => $grades){
    echo "Subject: ".$subjet. ", Grade:".$grades;
    echo "<br>";
}

?>