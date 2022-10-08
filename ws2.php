<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT name, address, email FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "ชื่อสมาชิก : " . $row["name"] . "<br>";
        echo "ที่อยู่ : " . $row["address"] . "<br>";
        echo "อีเมลล์ : " . $row["email"] . "<br>";
        echo "<hr>\n";
    }
    ?>
</body>

</html>