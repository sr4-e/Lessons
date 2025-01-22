<?php
// Magic Methods

// __construct()
// Called when a new object is created (constructor).
class Greeter {
    public function __construct($name) {
        echo "Hello, $name!\n" . "<br>";
    }
}
$p = new Greeter("Ali");


// __destruct()
// Called when an object is destroyed (removed from memory).
class Farewell {
    public function __destruct() {
        echo "Object destroyed!\n" . "<br>";
    }
}
$obj = new Farewell();


// __get()
// Called when trying to access an undefined or private property.
class SecretKeeper {
    private $data = "Secret";

    public function __get($name) {
        echo "Accessing undefined or private property: $name\n";
    }
}

$obj = new SecretKeeper();
echo $obj->data . "<br>";


// __set()
// Called when trying to set a value to an undefined or private property.
class PropertyManager {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
        echo "Setting $name to $value\n" . "<br>";
    }
}

$obj = new PropertyManager();
$obj->age = 25;


// __call()
// Called when trying to call an undefined method.
class MethodCaller {
    public function __call($name, $arguments) {
        echo "Calling method '$name' with arguments: " . implode(", ", $arguments) . "\n" . "<br>";
    }
}

$obj = new MethodCaller();
$obj->sayHello("Ali", "How are you?");


// __toString()
// Called when trying to print an object as a string.
class Stringifier {
    public function __toString() {
        return "This is an object of class Stringifier.";
    }
}

$obj = new Stringifier();
echo $obj . "<br>";


// __clone()
// Called when an object is cloned using clone.
class Cloner {
    public $name;

    public function __clone() {
        $this->name = "Cloned";
    }
}

$obj1 = new Cloner();
$obj2 = clone $obj1;

echo $obj2->name . "<br>";

?>
