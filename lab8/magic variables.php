<?php
//Magic Variales:

// __NAMESPACE__
// If used inside a namespace, the name of the namespace is returned.
namespace IT;

function myValue() {
    return __NAMESPACE__;
}

echo myValue() . "<br>";


// __CLASS__
// If used inside a class, the class name is returned.
class TOYOTA {
    public function car() {
        return __CLASS__;
    }
}
$Camry = new TOYOTA();
echo $Camry->car() . "<br>";


// __DIR__
// The directory of the file.
echo __DIR__ . "<br>";


// __FILE__
// The file name including the full path.
echo __FILE__ . "<br>";


// __FUNCTION__
// If inside a function, the function name is returned.
function BMW() {
    return __FUNCTION__;
}
echo BMW() . "<br>";


// __LINE__
// The current line number.
echo __LINE__ . "<br>";


// __METHOD__
// If used inside a function that belongs to a class, both class and function name is returned.
class LandRover {
    public function RangeRover() {
        return __METHOD__;
    }
}
$car = new LandRover();
echo $car->RangeRover() . "<br>";


// __TRAIT__
// If used inside a trait, the trait name is returned.
trait SRE {
    public function msg1() {
        echo __TRAIT__ . "<br>";
    }
}

class Welcome {
    use SRE;  // تعديل من message1 إلى SRE
}

$obj = new Welcome();
$obj->msg1();


// ClassName::class
// Returns the name of the specified class and the name of the namespace, if any.
namespace Samr;

class SRE {
    public function myValue() {
        return SRE::class;
    }
}

$name = new SRE();
echo $name->myValue() . "<br>";

?>

<?php
// A short code:

echo "Current line: " . __LINE__ ."<br>";
echo "Current file: " . __FILE__ ."<br>";
echo "Current directory: " . __DIR__ ."<br>";

function exampleFunction() {
    echo "Function name: " . __FUNCTION__ ."<br>";
}
exampleFunction();

class ExampleClass {
    public function showDetails() {
        echo "Class name: " . __CLASS__  . "<br>";
        echo "Method name: " . __METHOD__  . "<br>";
    }
}
$obj = new ExampleClass();
$obj->showDetails();
?>
