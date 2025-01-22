<?php
// بيانات الاتصال بقاعدة البيانات
$host = "localhost";
$dbname = "image_upload";
$username = "root";
$password = "";

try {
    // إنشاء اتصال PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // تحديد مسار المجلد
    $uploadDir = __DIR__ . "/uploads/";  // مسار كامل للمجلد

    // التحقق من وجود المجلد
    if (!is_dir($uploadDir)) {
        echo "The uploads directory does not exist!";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imageName = basename($image['name']);
        $imagePath = $uploadDir . uniqid() . "_" . $imageName;

        // رفع الصورة إلى المجلد
        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            // تشفير المسار قبل تخزينه في قاعدة البيانات
            $encryptedPath = hash('sha256', $imagePath);

            // إدخال المسار المشفر في قاعدة البيانات
            $stmt = $conn->prepare("INSERT INTO images (image_path) VALUES (:image_path)");
            $stmt->bindParam(':image_path', $encryptedPath);
            $stmt->execute();

            // إعادة التوجيه لعرض الصورة
            header("Location: index.php?image=" . urlencode($imagePath)); // عرض المسار الفعلي
            exit;
        } else {
            echo "Failed to upload image.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
