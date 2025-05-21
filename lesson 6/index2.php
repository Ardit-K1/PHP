<?php 
    

    $dogs = array(
        array("Sharrit", "Kosovo", 20),
        array("Labrador", "Canada", 15),
        array("Pitbull", "England", 20)
    );

    echo $dogs[0][0].": Origin: ".$dogs[0][1].", Life Span: ".$dogs[0][2]."<br>";
    echo $dogs[1][0].": Origin: ".$dogs[1][1].", Life Span: ".$dogs[1][2]."<br>";
    echo $dogs[2][0].": Origin: ".$dogs[2][1].", Life Span: ".$dogs[2][2]."<br>";

    for($row = 0 ; $row<3 ; $row++){
        echo "<p><b>row number $row </b></p>";
        echo "<ul>";
        for($col = 0; $col < 3 ; $col++){
            echo " <li>".$dogs[$row][$col]."</li>";
        }
        echo "</ul>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>