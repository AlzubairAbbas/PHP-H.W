<?php
// =====================
// String Functions Demo
//Alzubair Abbas - lab1-H>W
// =====================

// 1. strlen()
echo "1. strlen() - طول النص\n";
$str = "Hello";
echo "الطول: " . strlen($str) . "\n\n";

// 2. strtoupper()
echo "2. strtoupper() - تحويل إلى حروف كبيرة\n";
echo strtoupper("hello") . "\n\n";

// 3. strtolower()
echo "3. strtolower() - تحويل إلى حروف صغيرة\n";
echo strtolower("PHP") . "\n\n";

// 4. substr()
echo "4. substr() - قص جزء من النص\n";
echo substr("Hello World", 0, 5) . "\n\n";

// 5. str_replace()
echo "5. str_replace() - استبدال كلمة\n";
echo str_replace("world", "PHP", "Hello world") . "\n\n";

// 6. strpos()
echo "6. strpos() - موقع كلمة في النص\n";
echo strpos("Hello PHP", "PHP") . "\n";

?>
