<?php
// =====================
// Array Functions Demo
//Alzubair Abbas - lab1-H>W
// =====================

// 1. count()
echo "1. count() - يحسب عدد عناصر المصفوفة\n";
$arr = [10, 20, 30];
echo "عدد العناصر: " . count($arr) . "\n\n";

// 2. array_push()
echo "2. array_push() - إضافة عنصر في آخر المصفوفة\n";
$names = ["Ali", "Omar"];
array_push($names, "Sara");
print_r($names);
echo "\n";

// 3. array_pop()
echo "3. array_pop() - حذف آخر عنصر\n";
$numbers = [1, 2, 3];
$x = array_pop($numbers);
echo "العنصر المحذوف: $x\n\n";

// 4. array_merge()
echo "4. array_merge() - دمج مصفوفتين\n";
$a = [1, 2];
$b = [3, 4];
$result = array_merge($a, $b);
print_r($result);
echo "\n";

// 5. in_array()
echo "5. in_array() - التحقق من وجود عنصر\n";
$items = ["apple", "banana"];
if (in_array("banana", $items)) {
    echo "العنصر موجود\n";
}
echo "\n";

// 6. array_reverse()
echo "6. array_reverse() - عكس المصفوفة\n";
$arr2 = [1, 2, 3];
print_r(array_reverse($arr2));

?>
