<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .slider {
        width: 100%;
        height: 95vh;
        background: url({{ asset('images/slider2/grapic.png') }}) center/cover no-repeat;
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
        background: rgba(0, 0, 0, 0.6);
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
    transform: translateY(0); /* لا يوجد تحريك افتراضي */
}

/* عند تمرير الماوس، يتم تفعيل الأنيميشن ويظل مستمرًا */
.animated-text:hover span {
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


    .social-iconc {
    position: absolute;
    right: 20px;
    top: 40%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
}

.social-iconc a {
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

.social-iconc a:hover {
    transform: translateY(-5px) scale(1.1); /* تحريك الأيقونة للأمام قليلاً وتكبيرها */
    border-color: #c3814c; /* تغيير لون الحواف عند الـ hover */
background-color: #904600;
}


        .container {
            max-width: 700px;
            margin: auto;
            text-align: left;
        }

        .title {
    color: #c3814c;
    font-weight: bold;
    font-size: 60px;
    margin-top: 50px;
    margin-bottom: 20px;
    transition: color 0.3s ease-in-out; /* تأثير سلس عند التغيير */
}

.title:hover {
    color: #904600; /* اللون الجديد عند تمرير الفأرة */
}
.social-icons {
    margin: 10px 0;
}

.social-icons a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
    color: white;
    border-radius: 5px;
    margin: 5px;
}

/* تخصيص الألوان لكل منصة */
.facebook { background: #1877F2; }
.instagram { background: #E4405F; }
.tiktok { background: #000000; }
.snapchat { background: #FFFC00; color: black; } /* لون نص أسود ليظهر على الخلفية الصفراء */
.youtube { background: #FF0000; }

/* تأثيرات عند التحويل */
.social-icons a:hover {
    transform: scale(1.1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2),
                0 0 10px rgba(0, 0, 0, 0.2),
                0 0 15px rgba(0, 0, 0, 0.2);
}

/* جعل اللون الرئيسي لكل أيقونة ينتشر في التأثير */
.facebook:hover { box-shadow: 0 0 5px #1877F2, 0 0 10px #1877F2, 0 0 15px #1877F2; }
.instagram:hover { box-shadow: 0 0 5px #E4405F, 0 0 10px #E4405F, 0 0 15px #E4405F; }
.tiktok:hover { box-shadow: 0 0 5px #000000, 0 0 10px #000000, 0 0 15px #000000; }
.snapchat:hover { box-shadow: 0 0 5px #FFFC00, 0 0 10px #FFFC00, 0 0 15px #FFFC00; }
.youtube:hover { box-shadow: 0 0 5px #FF0000, 0 0 10px #FF0000, 0 0 15px #FF0000; }

        .subtitle {
            font-weight: bold;
                    font-family: 'Cairo', sans-serif;

            color: #000000;
            margin-top: 50px;
        }

        .description {
            color: #666;
            max-width: 600px;
            font-family: 'Cairo', sans-serif;

        }

        .bold-text {
            font-weight: bold;
                    font-family: 'Cairo', sans-serif;

        }

        .highlight-text {
            font-weight: bold;
              font-family: 'Cairo', sans-serif;

            color: #000;
        }

        .work-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .work-title {
            color: #c3814c;
            font-weight: bold;
            font-size: 50px;
            margin-bottom: 40px;

        }

        .work-title:hover {
            color: #904600;
        }

      .work-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 40px;
    max-width: 1500px; /* تحديد عرض مناسب لتحديد عدد الكروت */
    margin: auto;
}

.work-card {
    position: relative;
    width: 280px;
    height: 400px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    border-radius: 20px;
    padding-bottom: 30px;
}

.work-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(50%);
    transition: 0.3s;
}

.work-card:hover img {
    filter: brightness(100%);
    transform: scale(1.05);
}

.work-card .work-info {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #c3814c;
    font-weight: bold;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.work-card:hover .work-info {
    opacity: 1;
}

.work-card .category-name {
    position: absolute;
    top: 59%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #ffffff;
    font-weight: bold;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    font-size: 20px;
}

.work-card:hover .category-name {
    opacity: 1;
}

    .show-more {
    display: inline-block; /* اجعل الرابط يبدو كزر */
    text-decoration: none; /* إزالة الخط السفلي */
    font-size: 18px; /* تكبير حجم النص */
    padding: 15px 25px; /* تكبير الأبعاد */
    border-radius: 5px; /* تدوير الحواف */
    margin-top: 20px;
    border: 2px solid #c3814c;
    background: none;
    color: #c3814c;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    margin-bottom: 20px;
}

.show-more:hover {
    background: #c3814c;
    color: white;
}


    </style>
</head>

<body>



    <section class="slider">

        <h1 class="animated-text">Graphic <space> <space> Design</h1>
        <div class="welcome-text">Alserb...</div>
        <div class="social-iconc">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
        </div>
    </section>

    <div class="container">
        <h2 class="title">Graphic Design</h2>

            <div class="social-icons">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
            </div>


        <h3 class="subtitle">What is Graphic Design?</h3>

        <p class="description">
        Graphic design is the most powerful art that has breathed fresh life into digital marketing. This modern form of art has
        added a contemporary flair to the advertisement profile of every company. It also acts as one of the key components to
        build brand awareness and influence the customer’s decision-making process.
        </p>

        <h3 class="subtitle"> Why Do You Need Graphics in Your Marketing?</h3>

        <p class="bold-text">1. Graphic design is a powerful mode of communication.</p>
        <p class="description">
    Graphics Communicate More Effectively
    The saying “a picture is worth a thousand words” holds true in marketing. Graphics use powerful visuals, colors, and
    layouts to deliver clear and compelling messages, making it easier for potential customers to understand your brand
    without lengthy explanations.


        </p>

        <p class="bold-text">2. Indicate professionalism.</p>
        <p class="description">
        Showcase Professionalism
        Every design associated with your business—logos, packaging, brochures, or business cards—reflects your professionalism.
        High-quality graphics set you apart from competitors, building trust and encouraging both new and loyal customers to
        engage with your brand.


        </p>

        <p class="bold-text">3. Graphics Surpass Languages.</p>
        <p class="description">
            Break Language Barriers
            While written content requires a shared language, visuals speak universally. Graphics allow you to connect with a
            diverse, multilingual audience, making them essential for businesses targeting global or culturally varied markets.
        </p>

        <p class="highlight-text">
        Make Your First Impression Count
        In marketing, first impressions are everything. Our expert designers create stunning visuals tailored to your unique
        needs, including brochures, banners, flyers, and more. Let us help you build a professional brand image that leaves a
        lasting impact.
        </p>
    </div>



    <div class="work-section">



        <div class="container work-container">
            <h2 class="work-title">Our Work</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="work-card" data-category="design" onclick="openProject('1', 'Design')">
                        <img src="{{ asset('images/work/1.jpg') }}" alt="Project 1">
                        <div class="work-info">Project 1</div>
                        <div class="category-name">Design</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-card" data-category="development" onclick="openProject('2', 'Development')">
                        <img src="{{ asset('images/work/2.jpg') }}"  alt="Project 2">
                        <div class="work-info">Project 2</div>
                        <div class="category-name">Development</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-card" data-category="photography" onclick="openProject('3', 'Photography')">
                        <img src="{{ asset('images/work/3.jpg') }}"  alt="Project 3">
                        <div class="work-info">Project 3</div>
                        <div class="category-name">Photography</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-card" data-category="design" onclick="openProject('4', 'Design')">
                        <img src="{{ asset('images/work/4.jpg') }}"  alt="Project 4">
                        <div class="work-info">Project 4</div>
                        <div class="category-name">Design</div>
                    </div>
                </div>

            </div>
        </div>

    <a href="{{ route('ourwork') }}" class="show-more">Show More</a>




    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

    </script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector(".slider").classList.add("active");
        setTimeout(() => {
            document.querySelector(".clients-section").classList.add("active");
        }, 500);
        setTimeout(() => {
            document.querySelector(".partners").classList.add("active");
        }, 1000);
    });
</script>




    <script>
                        const text = document.querySelector(".animated-text");
                        const letters = text.textContent.split("");
                        text.innerHTML = ""; // إزالة النص الأصلي

                    letters.forEach((letter, index) => {
                    const span = document.createElement("span");
                        span.textContent = letter;
                        span.style.animationDelay = `${index * 0.3}s`; // تأخير الموجة لكل حرف
                        text.appendChild(span);
                });
    </script>

</body>

</html>
