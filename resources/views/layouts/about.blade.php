<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palmenburg About Section</title>
    <style>
      body {

        background: #ffffff;
        position: relative
      }
        .about-section {
            background-color: #ffffff;
            display: flex;
            justify-content: space-around; /* تقليص المسافة بين النص والصورة */
            align-items: center;
            width: 100%; /* عرض كامل للشاشة */
            height: 70vh; /* لتغطية كامل الشاشة */
            padding: 0 30px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s forwards;
            position: relative;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content {
            flex: 1;
            max-width: 600px;
            padding: 80px;
            animation: slideInLeft 1s forwards;
        }

        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .content h1 {
            font-size: 48px;
            color: #c3814c;
            margin-top: 50px;
            font-weight: bold;
            margin-bottom: 30px;

        }

        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .gif-container {
            flex: 0 0 auto;
            width: 300px;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: slideInRight 1s forwards;
            margin-left: 40px; /* إضافة مسافة لتقريب الصورة */
        }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .gif-container img {
            width: 160%;
            height: 160%;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .content {
                padding-right: 0;
                margin-bottom: 30px;
            }
            .gif-container {
                width: 200px;
                height: 200px;
                margin-top: 30px;
            }
            .content h1 {
                font-size: 36px;
            }
            .content p {
                font-size: 16px;
            }
        }

        /* إضافة تأثير تحميل للصورة */
        .gif-container.loading {
            background: #f0f0f0;
            position: relative;
        }

        .gif-container.loading::after {
            content: "Loading...";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #666;
        }

        .separator {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .line {
            width: 30%;
            height: 2px;
            background-color: #c3814c;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #c3814c;
        }

        .logo img {
            width: 100px;
            height:100px;
            border-radius: 50%;
            object-fit: cover;
        }

             /* background-color: #ffffff;
            color: black;
            padding-left: 25px;
            padding-bottom: 30px;
            padding-right: 40px;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            opacity: 0; /* يتم إخفاء المحتوى في البداية */
            /* transform: translateY(50px); /* نقل المحتوى للأسفل */
            /* transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
            /* margin-bottom: 0; /* إزالة الفاصل أسفل هذا القسم */


        .partners h2 {
            color: #c3814c;
            font-size: 40px;
            opacity: 0; /* إخفاء النص في البداية */
            transform: translateY(-50px); /* نقل النص للأعلى */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
       padding: 20px;
        }

        .partners p {
            color: #000000;
            font-size: 20px;
            font-weight: bold;
            opacity: 0; /* إخفاء النص في البداية */
            transform: translateY(-50px); /* نقل النص للأعلى */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
        }

        .logos {
            padding-left: 60px;
            padding-top: 20px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0; /* إخفاء الشعارات في البداية */
            transform: translateY(50px); /* نقل الشعارات للأسفل */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
        }

        .logos img {
            width: 200px;
            height: auto;
            filter: grayscale(100%) opacity(0.6);
            transition: transform 0.3s ease, filter 0.3s ease;
            top: 30px;
        }

        .logos img:hover {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.1);
        }

        .separator {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .line {
            width: 30%;
            height: 2px;
            background-color: #c3814c;
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            /* أو أي لون تريده */
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #c3814c;
        }

        .logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <section class="about-section">
        <div class="content">
            <h1>Alserb</h1>
            <p>In a fast-evolving digital world, we are your ideal partner in achieving exceptional success. We offer comprehensive and
            innovative solutions in digital marketing, web design and development, search engine optimization (SEO), mobile app
            development, social media marketing, graphic design, and creative packaging.
<br>
            We understand that every brand has its unique story. That’s why we passionately transform your ideas into creative
            solutions that accurately reflect your business vision. Excellence lies in the details, and we stay ahead of trends and
            technology to ensure your brand stands out in a competitive market.</p>
        </div>
        <div class="gif-container loading">
            <img src="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" alt="Palmenburg Animation" onload="this.parentElement.classList.remove('loading')">
        </div>


    </section>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const img = document.querySelector('.gif-container img');
            img.addEventListener('error', function() {
                this.parentElement.innerHTML = 'Failed to load image';
            });
        });
    </script>
</body>

</html>
