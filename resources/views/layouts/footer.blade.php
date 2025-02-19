<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* جعل القسم يحتوي على الخلفية السوداء */
.footer-section {
    position: relative;
    width: 99.9%;
    height: 85vh; /* أو يمكنك تخصيص الارتفاع كما تشاء */
    min-height: 500px; /* ضمان حد أدنى للارتفاع */
    background: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;

    box-sizing: border-box;

    /* يضمن أن يتم حساب الحشو والحدود ضمن العرض */
}



        /* عنصر الأنيميشن */
        #footer-animation {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        /* الدائرة التي تحتوي على المحتوى */
        .footer-circle {
            width: 450px;
            height: 450px;
            background: rgba(0, 0, 0, 0.9);

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            box-shadow: 0 0 15px #c3814c;
            position: relative;
            z-index: 2;
        }
        /* اللوجو */
        .footer-logo {
            width: 240px;
            height: auto;
            margin-bottom: 10px;
        }
        /* النصوص */
        .footer-text {
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
        }
        .footer-email {
            color: #c3814c;
            font-size: 16px;
            text-decoration: none;
            margin-bottom: 15px;
        }
        /* أيقونات السوشيال ميديا */
        .social-icon {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        .social-icon a {
            color: rgb(255, 255, 255);
            font-size: 24px;
            text-decoration: none;
            transition: 0.3s;
        }
        .social-icon a:hover {
            color: #c3814c;
        }
        /* الروابط */
        .footer-links {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #c3814c;
            text-decoration: none;
            margin: 0 5px;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        /* حقوق النشر */
        .copyright {
            margin-top: 15px;
            color: #777;
            font-size: 14px;
        }
        .highlight {
            color: #c3814c;
        }

    </style>
</head>

<body>

    <!-- حاوية الفوتر كجزء من قسم داخل الصفحة -->
    <div class="footer-section">
        <!-- عنصر Canvas للأنيميشن -->
        <canvas id="footer-animation"></canvas>

        <!-- الدائرة التي تحتوي على المحتوى -->
        <div class="footer-circle">
            <img src="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" alt="Logo" class="footer-logo">
            <p class="footer-text">Don't be shy and talk to us?</p>
            <a href="mailto:info@ALSERB.com" class="footer-email">info@ELSERB.com</a>

            <!-- أيقونات السوشيال ميديا -->
            <div class="social-icon">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>

            <div class="footer-links">
                <a href="#">Privacy Policy</a> /
                <a href="#">imprint</a> /
                <a href="#">Sitemap</a>
            </div>
            <p class="copyright">© 2025 <span class="highlight">Alserb</span> | All Rights Reserved <br>
            AT</p>
        </div>
    </div>
<script>
    const canvas = document.getElementById("footer-animation");
        const ctx = canvas.getContext("2d");

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let spheres = [];
        let cubes = [];

        const sphereColor = "rgb(181,119,80)";
        const cubeColor = "rgb(208,145,94,255)";

        // إنشاء الكرات بأحجام مختلفة
        function createSpheres() {
            for (let i = 0; i < 30; i++) {
                spheres.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    radius: Math.random() * 30 + 10, // أحجام مختلفة
                    dx: Math.random() * 2 - 1, // سرعة الحركة الأفقية
                    dy: Math.random() * 2 - 1, // سرعة الحركة العمودية
                    color: sphereColor // استخدام لون الكرات
                });
            }
        }

        // رسم الكرة مع تأثير ثلاثي الأبعاد
        function drawSphere(sphere) {
            const { x, y, radius, color } = sphere;

            const gradient = ctx.createRadialGradient(
                x - radius * 0.4, // مركز الضوء الأفقي
                y - radius * 0.4, // مركز الضوء العمودي
                radius * 0.2, // حجم منطقة الضوء
                x, y, radius // حدود الكرة
            );

            gradient.addColorStop(0, "white"); // منطقة مضيئة
            gradient.addColorStop(0.3, color); // لون الكره الرئيسي
            gradient.addColorStop(1, "#624126"); // منطقة داكنة

            ctx.fillStyle = gradient;
            ctx.beginPath();
            ctx.arc(x, y, radius, 0, Math.PI * 2);
            ctx.fill();
        }

        // إنشاء مكعبات
        function createCubes() {
            for (let i = 0; i < 60; i++) {
                cubes.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 100 + 30, // حجم المكعب
                    dx: Math.random() * 2 - 1, // سرعة الحركة الأفقية
                    dy: Math.random() * 2 - 1, // سرعة الحركة العمودية
                    color: cubeColor // استخدام لون المكعبات
                });
            }
        }

        // رسم المكعب
        function drawCube(cube) {
            const { x, y, size, color } = cube;

            ctx.strokeStyle = color;
            ctx.lineWidth = 1.5;

            // رسم الوجوه الأمامية والخلفية
            ctx.beginPath();
            ctx.rect(x, y, size, size); // الوجه الأمامي
            ctx.stroke();

            ctx.beginPath();
            ctx.rect(x - size * 0.2, y - size * 0.2, size, size); // الوجه الخلفي
            ctx.stroke();

            // توصيل الحواف بين الوجوه الأمامية والخلفية
            ctx.beginPath();
            ctx.moveTo(x, y);
            ctx.lineTo(x - size * 0.2, y - size * 0.2);
            ctx.moveTo(x + size, y);
            ctx.lineTo(x + size - size * 0.2, y - size * 0.2);
            ctx.moveTo(x, y + size);
            ctx.lineTo(x - size * 0.2, y + size - size * 0.2);
            ctx.moveTo(x + size, y + size);
            ctx.lineTo(x + size - size * 0.2, y + size - size * 0.2);
            ctx.stroke();
        }

        // تحديث الكائنات
        function updateObjects() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // تحديث الكرات
            spheres.forEach(sphere => {
                drawSphere(sphere);
                sphere.x += sphere.dx;
                sphere.y += sphere.dy;

                if (sphere.x + sphere.radius > canvas.width || sphere.x - sphere.radius < 0) sphere.dx *= -1;
                if (sphere.y + sphere.radius > canvas.height || sphere.y - sphere.radius < 0) sphere.dy *= -1;
            });

            // تحديث المكعبات
            cubes.forEach(cube => {
                drawCube(cube);
                cube.x += cube.dx;
                cube.y += cube.dy;

                if (cube.x + cube.size > canvas.width || cube.x < 0) cube.dx *= -1;
                if (cube.y + cube.size > canvas.height || cube.y < 0) cube.dy *= -1;
            });

            requestAnimationFrame(updateObjects);
        }

        // تحديث الحجم عند تغيير حجم النافذة
        window.addEventListener("resize", () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            spheres = [];
            cubes = [];
            createSpheres();
            createCubes();
        });

        // إنشاء الكائنات وتحديثها
        createSpheres();
        createCubes();
        updateObjects();

</script>
</body>

</html>
