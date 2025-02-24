<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nippor', sans-serif;
        }

        .slider {
        width: 100%;
        height: 90vh;
        background: url({{ asset('images/serves/service.png') }}) center/cover no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.273);
    }

      .animated-text {
    font-size: 7em;
    font-weight: bold;
    color: #f5f5f5;
    display: flex;
    gap: 7px;
}

.animated-text span {
    display: inline-block;
    animation: wave 1.9s infinite ease-in-out;
}

@keyframes wave {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
    100% {
        transform: translateY(0);
    }
}


    .welcome-text {
        position: absolute;
        right: 10px;
        bottom: 20%;
        transform: rotate(-90deg) translateY(100%);
        font-size: 12px;
        color: rgba(255, 255, 255, 0.621);
        font-weight: bold;
        transition: all 1s ease-in-out;
    }

    .slider.active .welcome-text {
        transform: rotate(-90deg) translateY(0);
    }


    .social-icons {
    position: absolute;
    right: 20px;
    top: 40%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
}

.social-icons a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    margin: 6px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px; /* عرض الأيقونة */
    height: 40px; /* ارتفاع الأيقونة */
    border: 2px solid transparent; /* حواف شفافة افتراضيًا */
    border-radius: 50%; /* لجعل الأيقونة دائرية */
    transition: all 0.3s ease; /* تأثير سلس على جميع الخصائص */
}

.social-icons a:hover {
    transform: translateY(-5px) scale(1.1); /* تحريك الأيقونة للأمام قليلاً وتكبيرها */
    border-color: #c3814c; /* تغيير لون الحواف عند الـ hover */
    background-color: #624126;
}


        .services {
            padding: 50px 20px;
            text-align: center;
            background-color: #ffffff;
        }

        .services h1 {
            color: #c3814c;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .services p {
            color: #444;
            font-size: 1.2rem;
            margin-bottom: 50px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            transition: transform 0.3s ease, border 0.3s ease;
            cursor: pointer;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 6px solid transparent;
            /* الحواف مخفية بشكل افتراضي */
        }

        .service-item:hover {
            transform: scale(1.05);
            background-color: #f0f0f0;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border-color: #c3814c;
            /* إظهار الحواف عند الوقوف */
        }

        .service-icon {
            width: 110px;
            height: 120px;
            position: center;
            margin-bottom: 20px;
        }

        .service-icon img {
            width: 110%;
            height: 110%;
            object-fit: contain;
            padding-bottom: 30px;
        }

        .service-title {
            color: #c3814c;
            font-size: 1.2rem;
            position: relative;
            text-align: center;
            padding-bottom: 10px;
        }

        .service-item:hover .service-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #c3814c;
            animation: underline 0.3s forwards;
        }

        @keyframes underline {
            to {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        a {
        text-decoration: none;
    }

        .success-steps {
            background-color: black;
            color: white;
            padding: 60px 220px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            max-width: 100%;
            margin: auto;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease-in-out forwards;
        }

        .success-info {
            width: 40%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: -90px;
            opacity: 0;
            animation: fadeInLeft 1s ease-in-out forwards 0.5s;
        }

        .success-info h2 {
            color: #c3814c;
            font-size: 3em;
            margin-bottom: 10px;
        }

        .success-info p {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #fff;
        }

        .steps {
            width: 55%;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            align-items: center;
        }

        .step {
            max-width: 300px;
            text-align: left;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-in-out forwards;
        }
        /* تأخير الظهور لكل خطوة */

        .step:nth-child(1) {
            animation-delay: 0.7s;
        }

        .step:nth-child(2) {
            animation-delay: 1.2s;
        }

        .step:nth-child(3) {
            animation-delay: 1.7s;
        }

        .step img {
            width: 60px;
            height: 50px;
            transition: transform 0.3s ease-in-out;
        }

        .step:hover img {
            transform: scale(1.1);
        }

        .step h3 {
            color: #624126;
            margin: 10px;
        }

        .step p {
            color: #ffffff;
            margin: 10px;
        }
        /* الحركات */

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .heritage {
            background-color: #f5f5f5;
            padding: 60px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .heritage .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            /* المسافة بين القسمين */
            max-width: 1200px;
            margin: auto;
        }

        .heritage .right-side {
            flex: 1;
            text-align: left;
        }

        .heritage .right-side h2 {
            font-size: 2em;
            color: #c3814c;
            margin-bottom: 10px;
        }

        .heritage .right-side p {
            font-size: 1.2em;
            color: #000000;
        }

        .heritage .left-side {
            flex: 2;
            text-align: left;
        }

        .heritage .left-side p {
            font-size: 1.5em;
            color: #000000;
            margin-bottom: 10px;
        }
        /* الفاصل بين الجزأين */

        .heritage .separator {
            width: 3px;
            background-color: #c3814c;
            height: 100%;
            min-height: 150px;
        }
    </style>
</head>

<body>

    <section class="slider">
        <div class="overlay"></div>

        <!-- النص المتحرك في المنتصف -->
        <h1 class="animated-text">Our Services</h1>

        <!-- كلمة مرحبا بك على الجانب الأيسر -->
        <div class="welcome-text">WELCOMYOU</div>

        <!-- أيقونات السوشيال ميديا -->
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
        </div>

     

    </section>


    <section class="services">
        <h1>OUR SERVICES</h1>
        <p>"Transforming your business with creativity and cutting-edge solutions."
</p>

        <div class="services-grid">
            <div class="service-item">
                <a href="{{ route('video-photography') }}">
                    <div class="service-icon">
                        <img src="{{ asset('images/serves/v.png') }}" alt="Video & Photography">
                    </div>
                    <h3 class="service-title">Video Photograph</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('motion-graphic') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/mot.png') }}" alt="Motion Graphic">
                    </div>
                    <h3 class="service-title">Motion Graphic</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('web-solutions') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/web.png') }}" alt="Web Solutions">
                    </div>
                    <h3 class="service-title">Web Solutions</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('mobile-apps') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/mob.png') }}" alt="Mobile Apps">
                    </div>
                    <h3 class="service-title">Mobile Apps</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('graphic-design') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/g.png') }}" alt="Graphic Design">
                    </div>
                    <h3 class="service-title">Graphic Design</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('branding') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/b.png') }}" alt="Branding">
                    </div>
                    <h3 class="service-title">Branding</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('packaging') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/pac.png') }}" alt="Packaging">
                    </div>
                    <h3 class="service-title">Packaging</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('social-media-marketing') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/social.png') }}" alt="Social Media & Digital Marketing">
                    </div>
                    <h3 class="service-title">Social Media</h3>
                </a>
            </div>

            <div class="service-item">
                <a href="{{ route('seo') }}">
                    <div class="service-icon">
                        <img src="{{asset('images/serves/seo.png') }}" alt="Search Engine Optimization">
                    </div>
                    <h3 class="service-title">SEO</h3>
                </a>
            </div>
        </div>

    </section>


    <section class="success-steps">
        <div class="success-info">
            <h2>SUCCESS STEPS</h2>
            <p>Your creative partner in the world of e-marketing and technology.</p>
        </div>
        <div class="steps">
            <div class="step">
                <img src="{{ asset('images/SUCCESS/1.png') }}" alt="Step 1">
                <h3>Listening, understanding and planning</h3>
                <p>To agree on the best way to create the brand.</p>
            </div>
            <div class="step">
                <img src="{{ asset('images/SUCCESS/2.png') }}" alt="Step 2">
                <h3>Working</h3>
                <p>Our writers, designers, and all the teamwork work together to bring the brand to life in accordance with the rules and business plan presented.</p>
            </div>
            <div class="step">
                <img src="{{ asset('images/SUCCESS/3.png') }}" alt="Step 3">
                <h3>Following-up</h3>
                <p>Our writers, designers, and all the teamwork work together to bring the brand to life in accordance with the rules and business plan presented.</p>
            </div>
        </div>
    </section>



    <section class="heritage">
        <div class="container">
            <!-- القسم الأيمن -->
            <div class="right-side">
                <h2>More than a pastime, it is a heritage</h2>
                <p>Setting a financial operation apart from the crowd</p>
            </div>

            <!-- الفاصل -->
            <div class="separator"></div>

            <!-- القسم الأيسر -->
            <div class="left-side">
                <p>Excellence and creativity are an important part of our goals, so we work to differ from others and think to help you achieve success for your business.</p>
                <p>We provide a complete marketing strategy based on plans and a study of your services, market, and competitors for your project and identify the target audience...</p>
            </div>
        </div>
    </section>

    <script>
        const text = document.querySelector(".animated-text");
        const letters = text.textContent.split("");
        text.innerHTML = ""; // إزالة النص الأصلي

        letters.forEach((letter, index) => {
        const span = document.createElement("span");
        span.textContent = letter;
        span.style.animationDelay = `${index * 0.2}s`; // تأخير الموجة لكل حرف
        text.appendChild(span);
    });

</script>
</body>

</html>
