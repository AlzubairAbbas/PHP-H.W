<?php
// =============================
// PHP STRING FUNCTIONS EXAMPLES
// Alzubair Abbas Lab1
// =============================

echo "PHP STRING FUNCTIONS EXAMPLES" . "<br>" . "Alzubair Abbas Lab1";
echo "<br><br>";

// 1. strlen()
// Description: Returns the length of a string.
echo "1. strlen() example:" . "<br>";
$text = "Hello World";
echo "The text is: $text<br>";
echo "Length: " . strlen($text) . "<br>";
echo "<hr>";

// 2. strtoupper()
// Description: Converts all characters to uppercase.
echo "2. strtoupper() example:" . "<br>";
$word = "php programming";
echo "//Before using strtoupper(): $word<br>";
echo "//After using strtoupper(): " . strtoupper($word) . "<br>";
echo "<hr>";

// 3. strtolower()
// Description: Converts all characters to lowercase.
echo "3. strtolower() example:" . "<br>";
$word2 = "HELLO PHP";
echo "//Before using strtolower(): $word2<br>";
echo "//After using strtolower(): " . strtolower($word2) . "<br>";
echo "<hr>";

// 4. substr()
// Description: Returns part of a string.
echo "4. substr() example:" . "<br>";
$sentence = "Welcome to PHP";
echo "Original text: $sentence<br>";
echo "Substring (0,7): " . substr($sentence, 0, 7) . "<br>";
echo "<hr>";

// 5. str_replace()
// Description: Replaces all occurrences of a string with another string.
echo "5. str_replace() example:" . "<br>";
$phrase = "I love Java";
echo "Before replace: $phrase<br>";
echo "After replace (Java → PHP): " . str_replace("Java", "PHP", $phrase) . "<br>";
echo "<hr>";

// 6. strpos()
// Description: Finds the position of the first occurrence of a substring.
echo "6. strpos() example:" . "<br>";
$line = "Hello PHP World";
echo "Text: $line<br>";
echo "Position of 'PHP': " . strpos($line, "PHP") . "<br>";
echo "<hr>";

// 7. trim()
// Description: Removes spaces from the beginning and end of a string.
echo "7. trim() example:" . "<br>";
$dirtyText = "   Welcome   ";
echo "Before trim: [$dirtyText]<br>";
echo "After trim: [" . trim($dirtyText) . "]<br>";
echo "<hr>";

// 8. explode()
// Description: Splits a string into an array.
echo "8. explode() example:" . "<br>";
$longText = "I love PHP programming";
echo "Original text: $longText<br>";
$parts = explode(" ", $longText);
echo "After explode():<br>";
print_r($parts);
echo "<br>";
echo "<hr>";

// 9. implode()
// Description: Joins array elements into a string.
echo "9. implode() example:" . "<br>";
echo "Imploded with '-' : " . implode(" - ", $parts) . "<br>";
echo "<hr>";

?>
