<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
        }
        input[type="file"] {
            margin: 10px 0;
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .image-preview {
            margin-top: 20px;
        }
        img {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload an Image</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <br>
            <button type="submit">Upload</button>
        </form>
        <div class="image-preview">
            <?php
            // عرض الصورة الأخيرة التي تم رفعها
            if (isset($_GET['image'])) {
                $imagePath = htmlspecialchars($_GET['image']);
                echo "<img src='$imagePath' alt='Uploaded Image'>";
            }
            ?>
        </div>
    </div>
</body>
</html>
