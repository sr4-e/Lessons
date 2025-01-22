<?php

class Example {
    const MY_CONSTANT = "This is a constant";
    public static $myStaticVariable = "This is a static variable";

    public function showValues() {
        echo "Constant: " . self::MY_CONSTANT . PHP_EOL ."<br>";
        echo "Static Variable: " . self::$myStaticVariable . PHP_EOL  ."<br>";
    }

    public static function updateStaticVariable($newValue) {
        self::$myStaticVariable = $newValue;
    }
}

echo "Accessing Constant directly: " . Example::MY_CONSTANT . PHP_EOL  ."<br>";
echo "Accessing Static Variable directly: " . Example::$myStaticVariable . PHP_EOL  ."<br>";

$example = new Example();
$example->showValues();

Example::updateStaticVariable("Updated static value");
$example->showValues();
?>