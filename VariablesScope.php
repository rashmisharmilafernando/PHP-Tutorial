<!DOCTYPE html>
<html>

<body>
    <?php
    //PHP Variables Scope
    
    //PHP has three different variable scopes:
    
    // 🔵local
    // 🔵global
    // 🔵static
    
    //🔵Global and Local Scope🔵
    
    echo "🔵GLOBAL SCOPE🔵";
    $x = 5; // global scope
    
    function myTest()
    {
        // using x inside this function will generate an error
        //echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";
    //---------------------------------------------------------------------
    echo "<hr>";

    echo "🔵LOCAL SCOPE🔵";
    function myTest1()
    {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest1();

    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";

    //---------------------------------------------------------------------
    echo "<hr>";

    echo "🔵global Keyword🔵";
    //🔵PHP The global Keyword🔵
    
    //The global keyword is used to access a global variable from within a function.
    // use the global keyword before the variables (inside the function):
    $x = 5;
    $y = 10;

    function myTest3()
    {
        global $x, $y;
        $y = $x + $y;
    }

    myTest3();
    echo "<br>";
    echo $y;

    //---------------------------------------------------------------------
    echo "<hr>";

    echo "🔵GLOBALS[index]🔵";

    $x = 5;
    $y = 10;

    function myTest4()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest4();
    echo "<br>";
    echo $y; // outputs 15
    
    //---------------------------------------------------------------------
    echo "<hr>";

    echo "🔵static Keyword🔵";
     echo "<br>";
    function myTest5()
    {
        static $x = 0;
        echo $x; 
        echo "<br>";
        $x++;
    }

    myTest5(); //0
    myTest5(); //0+1=1
    myTest5(); //1+1=2
    ?>


</body>

</html>