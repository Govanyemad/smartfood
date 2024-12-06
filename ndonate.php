

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نشر التبرع</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            direction: rtl;
        }

        body, html {
            height: 100%;
            font-family: 'Cairo', sans-serif;
            background: #f8f9fa;
            color: #333;
            overflow-x: hidden;
        }

        header, footer {
            width: 100vw;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-btn {
            background: none;
            border: none;
            cursor: pointer;
            outline: none;
            font-size: 1.5rem;
            color: #fff;
            transition: transform 0.3s ease;
        }

        .menu-btn:hover {
            transform: scale(1.1);
        }

        nav {
            position: absolute;
            top: 100%;
            right: 0;
            background: rgba(0, 123, 255, 0.9);
            padding: 20px;
            display: none;
            flex-direction: column;
            width: 100%;
            max-width: 250px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin-bottom: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2rem;
            display: block;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffe400;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-section {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-section h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .file-upload {
            display: none;
        }

        .upload-btn {
            display: inline-block;
            background-color: #60e030;
            color: #fff;
            padding: 15px 30px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .upload-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .submit-btn {
            display: inline-block;
            background-color: #28a745;
            color: #fff;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
        }
  
       /* Footer */
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        footer p {
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                justify-content: space-between;
                padding: 15px;
            }

            nav {
                width: 100%;
                right: 0;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.1rem;
            }
        }
   .mlogo {
      font-size: 2em;
      font-weight: bold;
      background: linear-gradient(90deg, #28a745, #a1e6a3);
      -webkit-background-clip: text;
      color: transparent;
      animation: shine 2s infinite linear;
      position: relative;
    }

    

    .mlogo::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 200%;
      height: 100%;
      ;
    

    }
    </style>
</head>
<body>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <!-- Header -->
    <header style="direction:ltr;">
        <div class="logo" >
            <span class="mlogo">Smart Food ♻️</span>
        </div>
        <button class="menu-btn" id="menuToggle">☰ القائمة</button>
        <nav id="menu">
            <ul>
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="index.html#donate">تبرع</a></li>
                <li><a href="about.html">عن الموقع</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container">
        <center><h1>التبرع بالمستلزمات</h1></center> 
        <br><br>
      <form class="form-section" action="" method="POST" enctype="multipart/form-data">
    <h2>أدخل معلومات التبرع</h2>
    <div class="form-group">
        <label for="name">الاسم :</label>
        <input type="text" id="name" name="name" placeholder="أدخل اسمك" required>
    </div>
    <div class="form-group">
        <label for="phone">رقم الهاتف :</label>
        <input type="number" id="phone" name="phone" placeholder="أدخل رقم الهاتف" required>
    </div>
    <div class="form-group">
        <label for="dname">اسم الصنف :</label>
        <input type="text" id="dname" name="dname" placeholder="أدخل اسم الصنف" required>
    </div>
    <div class="form-group">
        <label for="description">وصف الصنف :</label>
        <textarea id="description" name="description" rows="5" placeholder="أدخل وصف التبرع" required></textarea>
    </div>
    <div class="form-group">
        <label for="file">أرفق صورة للصنف:</label>
        <input type="file" id="file" name="file" class="file-upload" required>
        <label for="file" class="upload-btn">اختر صورة</label>
    </div>
    <center><button type="submit" class="submit-btn">نشر التبرع</button></center>
</form>





<?php
// التأكد من استقبال البيانات عبر POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $dname = $_POST['dname'];
    $description = $_POST['description'];

    // مسار رفع الصور
    $uploadDir = '../../uploads/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    // نقل الصورة إلى المسار المحدد
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        // حفظ البيانات في ملف JSON
        $donation = [
            'name' => $name,
            'phone' => $phone,
            'dname' => $dname,
            'description' => $description,
            'image' => "$uploadFile"
        ];

        // قراءة الملف الحالي
        $file = '../../donations.json';
        if (file_exists($file)) {
            $data = json_decode(file_get_contents($file), true);
        } else {
            $data = [];
        }

        // إضافة التبرع الجديد
        $data[] = $donation;

        // كتابة البيانات في ملف JSON
        file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

        echo "
        <script>
                Swal.fire({
                    icon: 'success',
                    title: 'تم النشر',
                    text: 'تم نشر التبرع وسيتم التواصل معك في اقرب وقت .'
                }).then((result) => {
                        if (result.isConfirmed) {
                            
                            window.location.href = 'ndonate.php';
                        }
                    });
            </script>";
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'خطأ',
                    text: 'حدث خطأ اثناء حفظ التبرع.'
                });
            </script>";
    }
}
?>








    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 جميع الحقوق محفوظة - موقع التوعية بأهمية الغذاء</p>
    </footer>

    <!-- JavaScript for Menu Toggle -->
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const menu = document.getElementById('menu');
        menuToggle.addEventListener('click', () => {
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        });
  </script>

<script>
        // Show selected file name
        const fileInput = document.getElementById('file');
        const uploadLabel = document.querySelector('.upload-btn');
        fileInput.addEventListener('change', function () {
            const fileName = fileInput.files[0].name;
            uploadLabel.textContent = `تم اختيار الصورة: ${fileName}`;
        });
    </script>

</body>
</html>