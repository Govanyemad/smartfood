<?php
// مسار ملف JSON
$jsonFile = 'bmr_data.json';

// التحقق مما إذا كان ملف JSON موجود
if (file_exists($jsonFile)) {
    // قراءة محتويات ملف JSON
    $jsonData = file_get_contents($jsonFile);

    // إرجاع البيانات المحفوظة إلى جافا سكريبت
    echo $jsonData;
} else {
    // إرجاع رسالة فارغة إذا لم يكن هناك بيانات محفوظة
    echo json_encode(null);
}
?>