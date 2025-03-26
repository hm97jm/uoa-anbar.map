<?php
$servername = "localhost";
$username = "root"; // اسم المستخدم الافتراضي في XAMPP
$password = ""; // اتركه فارغًا إذا لم تضع كلمة مرور
$dbname = "دليل 1"; // اسم قاعدة البيانات الخاصة بك

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

$sql = "SELECT title, content FROM student_guide";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>دليل الطالب</title>
</head>
<body>

    <h1>📘 دليل الطالب</h1>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["content"] . "</p>";
        }
    } else {
        echo "<p>لا توجد معلومات في دليل الطالب.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
