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

<div class="large-image"></div>

<table>
    <tr>
        <th>Drug name</th>
        <th>Number of inventory</th>
        <th>Expiration date</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>Price</th>
        <th>status</th>
    </tr>
    
    <tr>
        <td>AA</td>
        <td>12</td>
        <td>2-2-2</td>
        <td></td>
        <td></td>
        <td><img src="small-image.jpg" alt="Small IMAGE" class="small-image"></td>
        <td><a href="#" class="btn-link"></a></td>
        <td>1,200,000 <span style="font-family: Arial;">USA</span></td>
        <td><a href="tel:+971123456789" class="btn-link">Call</a></td>
    </tr>
    

    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>

</body>
</html>