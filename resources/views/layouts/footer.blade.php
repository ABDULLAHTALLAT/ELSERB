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
            font-family: 'Cairo', sans-serif;
        }
        .footer-email {
            color: #c3814c;
            font-size: 16px;
            text-decoration: none;
            margin-bottom: 15px;
            font-family: 'Cairo', sans-serif;
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
            font-family: 'Cairo', sans-serif;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        /* حقوق النشر */
        .copyright {
            margin-top: 15px;
            color: #777;
            font-size: 14px;
            font-family: 'Cairo', sans-serif;
        }
        .highlight {
            color: #c3814c;
        }


      @media (max-width: 768px) {
    #footer-animation {
        display: none;
    }

    .footer-circle {
        width: 100%;
        height: auto;
        padding: 40px 20px;
        border-radius: 0; /* إزالة الشكل الدائري */
    }

    .footer-logo {
        width: 200px; /* تصغير الشعار */
    }

    .footer-text {
        font-size: 18px;
    }

    .social-icon a {
        font-size: 20px;
    }
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
            <a href="mailto:info@alserbagency.com" class="footer-email">info@alserbagency.com</a>

            <!-- أيقونات السوشيال ميديا -->
            <div class="social-icon">
                <a href="https://www.instagram.com/alserbagency/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/alserbagency/"><i class="fab fa-facebook"></i></a>
                <a href="http://linkedin.com/company/alserbagency/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.tiktok.com/@alserbagency"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.youtube.com/@alserbagency"><i class="fab fa-youtube"></i></a>
                <a href="https://www.snapchat.com/add/alserbmarketing"><i class="fab fa-snapchat"></i></a>
            </div>

            <div class="footer-links">
                <a href="#">Privacy Policy</a> /
                <a href="#">imprint</a> /
                <a href="#">Sitemap</a>
            </div>
        <p class="copyright">
            © 2025 <span class="highlight">Alserb</span> | All Rights Reserved <br>
            <a href="https://www.linkedin.com/in/abdullah-tallat/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BOFJE2zGrTvOITvwJEmW9vg%3D%3D" target="_blank"
                style="text-decoration: none; color: inherit;">AT</a>
        </p>
        </div>
    </div>
<script>
    const canvas = document.getElementById("footer-animation");
        const ctx = canvas.getContext("2d");

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        // التحقق مما إذا كان يجب إخفاء الأنيميشن عند تصغير الشاشة
        function checkScreenSize() {
            if (window.innerWidth < 1000) {
                canvas.style.display = "none"; // إخفاء الأنيميشن عند تصغير الشاشة
                document.querySelector(".footer-circle").style.width = "100%";
                document.querySelector(".footer-circle").style.height = "auto";
                document.querySelector(".footer-circle").style.borderRadius = "0";
            } else {
                canvas.style.display = "block"; // عرض الأنيميشن عند تكبير الشاشة
                document.querySelector(".footer-circle").style.width = "450px";
                document.querySelector(".footer-circle").style.height = "450px";
                document.querySelector(".footer-circle").style.borderRadius = "0%";
            }
        }

        // إنشاء الكرات
        let spheres = [];
        let cubes = [];
        const sphereColor = "rgb(181,119,80)";
        const cubeColor = "rgb(183,120,71)";

        function createSpheres() {
            spheres = [];
            for (let i = 0; i < 30; i++) {
                spheres.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    radius: Math.random() * 30 + 10,
                    dx: Math.random() * 2 - 1,
                    dy: Math.random() * 2 - 1,
                    color: sphereColor
                });
            }
        }

        function drawSphere(sphere) {
            const { x, y, radius, color } = sphere;
            const gradient = ctx.createRadialGradient(x - radius * 0.4, y - radius * 0.4, radius * 0.2, x, y, radius);
            gradient.addColorStop(0, "white");
            gradient.addColorStop(0.3, color);
            gradient.addColorStop(1, "#624126");

            ctx.fillStyle = gradient;
            ctx.beginPath();
            ctx.arc(x, y, radius, 0, Math.PI * 2);
            ctx.fill();
        }

        // إنشاء المكعبات
        function createCubes() {
            cubes = [];
            for (let i = 0; i < 30; i++) {
                cubes.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 50 + 20,
                    dx: Math.random() * 2 - 1,
                    dy: Math.random() * 2 - 1,
                    color: cubeColor
                });
            }
        }

        // رسم المكعبات
        function drawCube(cube) {
            const { x, y, size, color } = cube;
            ctx.strokeStyle = color;
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.rect(x, y, size, size);
            ctx.stroke();

            ctx.beginPath();
            ctx.rect(x - size * 0.2, y - size * 0.2, size, size);
            ctx.stroke();

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

        // تحديث الحركة
        function updateObjects() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            spheres.forEach(sphere => {
                drawSphere(sphere);
                sphere.x += sphere.dx;
                sphere.y += sphere.dy;

                if (sphere.x + sphere.radius > canvas.width || sphere.x - sphere.radius < 0) sphere.dx *= -1;
                if (sphere.y + sphere.radius > canvas.height || sphere.y - sphere.radius < 0) sphere.dy *= -1;
            });

            cubes.forEach(cube => {
                drawCube(cube);
                cube.x += cube.dx;
                cube.y += cube.dy;

                if (cube.x + cube.size > canvas.width || cube.x < 0) cube.dx *= -1;
                if (cube.y + cube.size > canvas.height || cube.y < 0) cube.dy *= -1;
            });

            requestAnimationFrame(updateObjects);
        }

        // تحديث عند تغيير حجم الشاشة
        window.addEventListener("resize", () => {
            resizeCanvas();
            checkScreenSize();
            createSpheres();
            createCubes();
        });

        resizeCanvas();
        checkScreenSize();
        createSpheres();
        createCubes();
        updateObjects();

</script>
</body>

</html>
