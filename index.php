<?php
// تفعيل عرض الأخطاء للتطوير
error_reporting(E_ALL);
ini_set('display_errors', 1);

// الحصول على اسم المستخدم من المسار الحالي
$username = basename(__DIR__); // استخراج اسم المستخدم من اسم المجلد الحالي

// ملف قاعدة بيانات المستخدمين
$dbFile = '../../users.db'; // المسار إلى قاعدة البيانات خارج مجلد المستخدمين

// إنشاء أو فتح قاعدة بيانات SQLite
$db = new SQLite3($dbFile);

// جلب الكود المميز (Token) الخاص بالمستخدم من قاعدة البيانات
$stmt = $db->prepare("SELECT token FROM users WHERE username = :username");
$stmt->bindValue(':username', $username, SQLITE3_TEXT);
$result = $stmt->execute();
$user = $result->fetchArray(SQLITE3_ASSOC);

if ($user) {
    $storedToken = $user['token'];
} else {
    // إذا لم يتم العثور على المستخدم، إعادة التوجيه إلى صفحة تسجيل الدخول
    header('Location: /index.php');
    exit();
}

// التحقق من الكود المميز في المتصفح
echo "<script>
    const token = localStorage.getItem('authToken');
    if (token !== '$storedToken') {
        // إذا لم يتطابق الكود، إعادة التوجيه إلى صفحة تسجيل الدخول
        window.location.href = '/index.php';
    }
</script>";

// إذا كانت التحقق صحيحاً، عرض محتويات المجلد
include 'eria.html';
?>