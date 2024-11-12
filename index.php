<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول پروژه‌ها</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            direction: rtl;
        }
        /* تنظیمات عکس بزرگ */
        .large-image {
            width: 100%;
            height: 300px;
            background-image: url('assets/img/large-image.jpg'); /* جایگزین با مسیر عکس مورد نظر */
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .large-image::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px; /* محو کمتر شده */
            background: linear-gradient(transparent, white);
        }
        /* تنظیمات جدول */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0; /* جدول به عکس چسبیده است */
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }
        .small-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }
        .btn-link {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="large-image"></div> <!-- عکس بزرگ مستطیلی -->

<table>
    <tr>
        <th>نام پروژه</th>
        <th>متراژ</th>
        <th>اتاق خواب</th>
        <th>لوکیشن</th>
        <th>ویو</th>
        <th>عکس پروژه</th>
        <th>نمایش عکس</th>
        <th>قیمت</th>
        <th>تماس با ما</th>
    </tr>
    
    <!-- یک ردیف نمونه -->
    <tr>
        <td>پروژه نمونه</td>
        <td>120 متر مربع</td>
        <td>2</td>
        <td>تهران</td>
        <td>دریا</td>
        <td><img src="small-image.jpg" alt="پروژه" class="small-image"></td>
        <td><a href="#" class="btn-link">نمایش عکس</a></td>
        <td>1,200,000 <span style="font-family: Arial;">AED</span></td>
        <td><a href="tel:+971123456789" class="btn-link">تماس با ما</a></td>
    </tr>
    
    <!-- ردیف‌های خالی زیر جدول -->
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>

</body>
</html>