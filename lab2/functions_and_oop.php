<?php
/*
========================================
PHP Functions & OOP Demonstration
Student Name: Alzobair Abbas
========================================
*/

/* ---------- 1. Basic Functions ---------- */

function sayHello() {
    echo "Welcome to the world of PHP functions!<br>";
}

sayHello();
sayHello();


/* ---------- 2. Functions with Parameters ---------- */

function greet($name) {
    echo "Hello, $name!<br>";
}

greet("Ahmed");
greet("Sara");
greet("John");


/* ---------- 3. Functions with Return Values ---------- */

function sum() {
    return 10 + 20;
}

$result = sum();
echo "Sum Result = $result<br>";


function add($a, $b) {
    return $a + $b;
}

echo "Add Result = " . add(5, 7) . "<br>";


/* ---------- 4. Multiple Parameters ---------- */

function userInfo($name, $age) {
    return "Name: $name | Age: $age years<br>";
}

echo userInfo("Ali", 22);
echo userInfo("Lina", 19);


/* ---------- 5. Variable Scope ---------- */

function localScopeTest() {
    $x = 10; // local variable
    echo "Local variable x = $x<br>";
}

localScopeTest();


$x = 5;

function globalScopeTest() {
    global $x;
    echo "Global variable x = $x<br>";
}

globalScopeTest();


$x = 20;

function globalsArrayTest() {
    echo "Using GLOBALS array, x = " . $GLOBALS['x'] . "<br>";
}

globalsArrayTest();


/* ---------- 6. Variable-Length Arguments ---------- */

function sumAll(...$numbers) {
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}

echo "Sum All = " . sumAll(1, 2, 3, 4, 5) . "<br>";


/* ---------- 7. Anonymous Functions ---------- */

$hello = function () {
    echo "Hello from an anonymous function!<br>";
};

$hello();


$message = "Hello PHP";

$greetMessage = function () use ($message) {
    echo $message . "<br>";
};

$greetMessage();


/* ---------- 8. Callback Function ---------- */

function process($callback) {
    echo "Processing started...<br>";
    $callback();
}

process(function () {
    echo "Callback executed successfully!<br>";
});


/* ---------- 9. Anonymous Function with Array ---------- */

$students = ["Ali", "Omar", "Zed", "Lena", "Areej"];

$filteredStudents = array_filter($students, function ($name) {
    return strlen($name) > 3;
});

echo "Filtered Students:<br>";
print_r($filteredStudents);
echo "<br>";


/* ---------- 10. Recursion ---------- */

function factorial($n) {
    if ($n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo "Factorial of 5 = " . factorial(5) . "<br>";


/* ---------- 11. Higher-Order Functions ---------- */

function multiplier($n) {
    return function ($x) use ($n) {
        return $x * $n;
    };
}

$double = multiplier(2);
echo "Double 10 = " . $double(10) . "<br>";

$triple = multiplier(3);
echo "Triple 10 = " . $triple(10) . "<br>";


/* ---------- 12. Nested Closures ---------- */

function multiply($a) {
    return function ($b) use ($a) {
        return function ($c) use ($a, $b) {
            return $a * $b * $c;
        };
    };
}

echo "Nested Multiply Result = " . multiply(2)(3)(4) . "<br>";


/* ---------- 13. Object-Oriented Programming ---------- */

class Student {
    public function sayHello() {
        echo "Hello, I am a student!<br>";
    }
}

$student = new Student();
$student->sayHello();


class Calculator {

    public function add($a, $b) {
        return $a + $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }
}

$calc = new Calculator();
echo "Calculator Add = " . $calc->add(10, 5) . "<br>";
echo "Calculator Multiply = " . $calc->multiply(4, 3) . "<br>";


class User {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User();
$user->setName("Alzobair Abbas");

echo "User Name = " . $user->getName() . "<br>";


/* ---------- End of File ---------- */
?>
