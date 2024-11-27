<!DOCTYPE html>
<html>

<body>
    <?php
    // PHP supports the following data types:
    
    // String
    // Integer
    // Float (floating point numbers - also called double)
    // Boolean
    // Array
    // Object
    // NULL
    // Resource
    
    $x = 5;
    var_dump($x); //get the data type of any object by using the var_dump() function.
    echo "<hr>";

    //PHP String
    $z = "Hello world!";
    $y = 'Hello world!';

    var_dump($z);
    echo "<br>";
    var_dump($y);

    echo "<hr>";

    //PHP Integer
    $x = 5985;
    var_dump($x);

    echo "<hr>";

    //PHP Float
    $x = 10.365;
    var_dump($x);

    echo "<hr>";

    //PHP Boolean
    $x = true;
    var_dump($x);

    echo "<hr>";

    //PHP Array
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    echo "<hr>";

    //PHP Object
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("red", "Volvo");
      var_dump($myCar);
      echo "<br>";
      echo $myCar->message(); // Calling the message method
      
      echo "<hr>";

    //PHP NULL Value
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    ?>


</body>

</html>