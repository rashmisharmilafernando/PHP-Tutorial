<!DOCTYPE html>
<html>

<body>


    <?php

    //🔵print Statements🔵
    
    //🔵PHP echo Statement🔵
    echo "🔵PHP echo Statement🔵";
    echo "<br>";

    echo "Hello";
    echo "<br>";
    echo ("Hello");

    echo "<hr>";

    //🔵Display Text🔵
    echo "🔵Display Text🔵";

    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    echo "<hr>";

    //🔵Display Variables🔵
    echo "🔵Display Variables🔵";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";

    echo "<hr>";

    //🔵Using Single Quotes🔵
    echo "🔵Using Single Quotes🔵";
    //When using single quotes, variables have to be inserted using the "." operator

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';

    echo "<hr>";

    //🔵PHP print Statement🔵
    echo "🔵PHP print Statement🔵";
    echo "<br>";
    print "Hello";
    echo "<br>";
    print("Hello");
    echo "<br>";
    print "I'm about to learn PHP!";
    print "<p>Study PHP at $txt2</p>";
    print '<p>Study PHP at ' . $txt2 . '</p>';
    ?>


</body>

</html>