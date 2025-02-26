<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة اللغات</title>
    <style>
        /* زر المستطيل الجانبي */
        .menu-container {
            position: fixed;
            left: 0;
            top: 40%;
            transform: translateY(-50%);
            width: 5px;
            height: 100px;
            background: rgb(53, 52, 52);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            cursor: pointer;
            transition: width 0.3s ease-in-out;
             z-index: 9999;
        }

        /* الزر الجانبي */
        .menu-button {
            width: 5px;
            height: 100px;
            background: rgb(64, 64, 64);
            position: absolute;
            left: 0;
            top: 0;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        /* القائمة المنبثقة */
        .menu-list {
            position: absolute;
            left: -100px;
            top: 50%;
            transform: translateY(-50%);
            background: black;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 140px;
            height: 100px;
            padding: 10px;
            opacity: 0;
            transition: left 0.3s ease-in-out, opacity 0.3s ease-in-out;

            z-index: 9999;
        }

        /* تنسيق عناصر القائمة */
        .menu-list a {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 10px;
            color: #c3814c;
            font-size: 16px;
            text-align: right;
            gap: 10px;
            /* إضافة مسافة بين العلم والكلمة */
        }

        /* تنسيق الصور داخل القائمة */
        .menu-list img {
            width: 20px;
            height: 15px;
        }

        /* تأثير hover يعمل فقط على النص */
        .menu-list a span {
            transition: color 0.3s;
        }

      .menu-list a span:hover {
    color: #ff8f2d;
    transform: scale(1.45) translateX(5px);
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
    display: inline-block;
}


        /* ظهور القائمة عند تحريك الماوس فوق الزر الجانبي */
        .menu-container:hover .menu-list {
            left: 5px;
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="menu-container">
        <div class="menu-button"></div>
        <div class="menu-list">
            <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Egypt.svg" alt="Egypt Flag">
                <span>عربي</span>
            </a>
            <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="UK Flag">
                <span>English</span>
            </a>
        </div>
    </div>

</body>

</html>
