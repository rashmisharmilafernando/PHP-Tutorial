<!DOCTYPE html>
<html>

<body>
    <?php
    //🔵Upper Case
    
    echo "🔵Upper Case";
    $x = "Hello World!";
    echo "<br>";
    echo strtoupper($x);
    echo "<hr>";



    //🔵Lower Case
    
    echo "🔵Lower Case";
    echo "<br>";
    $x = "Hello World!";
    echo strtolower($x);
    echo "<br>";
    echo "<hr>";

    //🔵Replace String
    
    echo "🔵Replace String";
    echo "<br>";
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);


    echo "<br>";
    echo "<hr>";

    //🔵Reverse a String
    
    echo "🔵Reverse a String";
    $x = "Hello World!";   echo "<br>";
    echo strrev($x);
    ?>


</body>

</html>