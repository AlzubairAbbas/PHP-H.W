<?php
// =============================
// PHP ARRAY FUNCTIONS EXAMPLES
//Alzubair Abbas Lab1
// =============================

echo "PHP ARRAY FUNCTIONS EXAMPLES"."<br>"."Alzubair Abbas Lab1";
echo"<br>";
echo "<br>";

// 1. count()
// Description: Returns the number of elements in an array.
echo "1. count() example:"."<br>";
$numbers = [10, 20, 30, 40];
echo "Total elements: " . count($numbers) ."<br>";
echo"<hr>";

// 2. array_push()
// Description: Adds elements to the end of an array.
echo "2. array_push() example:"."<br>";
$names = ["Alzubair", "Hossam"];
echo "//Befor Using array_push() function :";
echo "<br>";
print_r($names);
echo "<br>";
array_push($names, "Saqer", "Ibrahim");
echo "//After Using array_push() function I Pushed Saqer And Ibrahim :";
echo "<br>";
print_r($names);
echo "<br>";
echo"<hr>";

// 3. array_pop()
// Description: Removes the last element from an array and returns it.
echo "3. array_pop() example:"."<br>";
$fruits = ["Apple", "Banana", "Mango"];
$removed = array_pop($fruits);
echo "Removed item:". $removed."<br>";
print_r($fruits);
echo "<br>";
echo"<hr>";


// 4. array_merge()
// Description: Merges two or more arrays.
echo "4. array_merge() example:"."<br>";
$a = [1, 2];
$b = [3, 4];
$merged = array_merge($a, $b);
print_r($merged);
echo "<br>";
echo"<hr>";

// 5. in_array()
// Description: Checks if a value exists in an array.
echo "5. in_array() example:"."<br>";
$items = ["Pen", "Book", "Bag"];
if (in_array("Book", $items)) {
    echo "Book exists in the array"."<br>";
}
echo "<br>";
echo"<hr>";

// 6. array_reverse()
// Description: Returns an array with elements in reverse order.
echo "6. array_reverse() example:"."<br>";
$reversed = array_reverse($numbers);
print_r($reversed);
echo "<br>";
echo"<hr>";

// 7. array_search()
// Description: Searches the array for a value and returns its key.
echo "7. array_search() example:"."<br>";
$searchResult = array_search(30, $numbers);
echo "Value 30 found at index: $searchResult"."<br>";
echo"<hr>";

// 8. sort()
// Description: Sorts an array in ascending order.
echo "8. sort() example:"."<br>";
$ages = [25, 19, 30, 22];
sort($ages);
print_r($ages);
echo "<br>";
echo"<hr>";

?>
