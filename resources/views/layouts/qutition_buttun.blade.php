<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <style>
        .float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #c3814c; /* اللون الأخضر المشابه للصورة */
            color: white;
            padding: 12px 24px;
            border-radius: 12px; /* زوايا مستديرة */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase; /* لجعل النص بأحرف كبيرة */
            cursor: pointer;
            z-index: 9999;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 160px; /* تعديل العرض ليكون متناسقًا */
            height: 60px; /* تعديل الارتفاع */
        }

        .float:hover {
            background-color: #b88f61; /* لون أغمق عند التمرير */
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- هنا محتوى الصفحة الخاصة بك -->
    @yield('content')

    <!-- الزر العائم في الأسفل -->
    <a href="{{ route('quotations') }}" class="float">
        GET A QUOTE
    </a>

</body>
</html>
