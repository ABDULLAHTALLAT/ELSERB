<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #c3814c;
            /* اللون */
            color: white;
            padding: 24px 24px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(68, 68, 68, 0.115);
            text-decoration: none;
            font-family: 'Cairo', sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            cursor: pointer;
            z-index: 9999;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 160px;
            height: 60px;
        }

        .float:hover {
            background-color: #904600;
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgb(28, 28, 28);
        }

        /* عند الشاشات الصغيرة */
        @media (max-width: 1200px) {
            .float {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                /* جعلها دائرة */
                font-size: 0;
                /* إخفاء النص */
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .float::before {
                content: "\f0e0";
                /* أيقونة البريد */
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                font-size: 22px;
                color: white;
            }
        }
    </style>
</head>

<body>

    @yield('content')

    <!-- الزر العائم -->
    <a href="{{ route('quotations') }}" class="float">
        GET A QUOTE
    </a>

</body>

</html>
