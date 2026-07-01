<?php
// --- ส่วนการคำนวณของฝั่งซ้าย ---
$a = 3;
$b = 4;
$sum = $a + $b;
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ใบงานที่ 3</title>
    <style>
        /* จัด Layout ให้แบ่งเป็น 2 คอลัมน์ซ้าย-ขวา */
        .container {
            display: flex;
            gap: 150px; /* ระยะห่างระหว่างฝั่งซ้ายและขวา */
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.8;
            padding: 20px;
        }
        .column {
            flex: 1;
        }
        .title {
            font-weight: bold;
            font-size: 22px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="column">
        <div class="title">ผลลัพธ์</div>
        <?php
        echo "ค่าของ \$a คือ " . $a . "<br>";
        echo "ค่าของ \$b คือ " . $b . "<br>";
        echo "ผลรวมของ \$a และ \$b คือ " . $sum . "<br>";
        ?>
    </div>

    <div class="column">
        <div class="title">ผลลัพธ์</div>
        <?php
        echo '$A=B<br>';
        echo '$$A=20.5<br>';
        echo '$B=20.5<br>';
        ?>
    </div>
</div>

</body>
</html>