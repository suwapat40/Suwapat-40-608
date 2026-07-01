<?php
// ข้อ 1: While Loop แปลงค่าองศา C เป็น F
$celsius_array = [0, 25, 37.5, 100]; 
$count = 0;
$total_items = count($celsius_array);

while ($count < $total_items) {
    $celsius = $celsius_array[$count];
    $fahrenheit = ($celsius * 1.8) + 32;
    echo "Celsius: " . $celsius . " °C -> Fahrenheit: " . $fahrenheit . " °F\n";
    $count++;
}

echo "---------------------------------\n";

// ข้อ 2: แสดงเลขคู่ 2 ถึง 20 ด้วย Do-While Loop
$num = 2;
do {
    echo $num . " ";
    $num += 2;
} while ($num <= 20);

echo "\n";
?>