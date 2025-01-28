<?php

//Exception
function divide($dividend, $divisor) {
  if ($divisor == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch (Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code] $message" ."<br>";
}

// getCode()
try {
  throw new Exception("An error occurred", 120);
} catch (Exception $e) {
  echo "Error code: " . $e->getCode() ."<br>";
}

// getFile()
try {
  throw new Exception("An error occurred");
} catch (Exception $e) {
  echo "Error in this file: " . $e->getFile() ."<br>";
}

// getMessage()
try {
  throw new Exception("An error occurred");
} catch (Exception $e) {
  echo $e->getMessage() ."<br>";
}

// getLine()
try {
  throw new Exception("An error occurred");
} catch (Exception $e) {
  echo $e->getLine() ."<br>";
}

// getPrevious()
try {
  try {
    throw new Exception("An error occurred", 1);
  } catch (Exception $e1) {
    throw new Exception("Another error occurred", 2, $e1);
  }
} catch (Exception $e2) {
  $previous = $e2->getPrevious();
  echo $previous->getMessage() ."<br>";
}

// getTrace()
function customTraceFunction($num) {
  throw new Exception("An error occurred");
}

try {
  customTraceFunction(5);
} catch (Exception $e) {
  print_r($e->getTrace()) ."<br>";
}

// getTraceAsString()
try {
  customTraceFunction(5);
} catch (Exception $e) {
  print_r($e->getTraceAsString()) ."<br>";
}

?>
