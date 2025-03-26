<?php
$host = "localhost"; // السيرفر المحلي
$user = "root"; // اسم المستخدم الافتراضي لـ XAMPP
$pass = ""; // كلمة المرور (افتراضيًا فارغة في XAMPP)
$dbname = "anbar_university"; // اسم قاعدة البيانات التي أنشأتها

// إنشاء الاتصال
$conn = new mysqli($host, $user, $pass, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
