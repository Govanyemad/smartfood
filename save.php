<?php
// مسار ملف JSON
$jsonFile = 'bmr_data.json';

// الحصول على البيانات المرسلة من جافا سكريبت
$data = json_decode(file_get_contents('php://input'), true);

// التحقق من البيانات
if ($data) {
    // تحويل البيانات إلى JSON
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // حفظ البيانات في ملف JSON
    if (file_put_contents($jsonFile, $jsonData)) {
        // إرجاع استجابة نجاح
        echo json_encode(['status' => 'success', 'message' => 'Data saved successfully']);
    } else {
        // إرجاع استجابة فشل في الحفظ
        echo json_encode(['status' => 'error', 'message' => 'Failed to save data']);
    }
} else {
    // إرجاع استجابة فشل في تلقي البيانات
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
}
?>