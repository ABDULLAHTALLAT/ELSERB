<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media & Digital Marketing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
        background: url({{ asset('images/slider2/8122.png') }}) center/cover no-repeat;
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
    font-size: 4em;
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

        <h1 class="animated-text">Social Media & Digital Marketing</h1>
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
        <h2 class="title">Social Media & Digital Marketing</h2>

            <div class="social-icons">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
            </div>


        <h3 class="subtitle">What is Social Media & Digital Marketing?</h3>

        <p class="description">
            Social Media & Digital Marketing is the most powerful art that has breathed fresh life into digital marketing. This modern form of art has added a contemporary flair to the advertisement profile of every company. It also acts as one of the key components to build brand
            awareness and influence the customer’s decision-making process.
        </p>

        <h3 class="subtitle">Why do you need Graphics in your marketing?</h3>

        <p class="bold-text">1. Social Media & Digital Marketing is a powerful mode of communication.</p>
        <p class="description">
            The good old saying “pictures speak louder than words” explains what design can do for communicating. With the assistance of powerful images, colors and layout, you can deliver strong messages to potential customers without using lengthy paragraphs. In
            simplest terms, graphics can make the message clearer and straightforward.
        </p>

        <p class="bold-text">2. Indicate professionalism.</p>
        <p class="description">
            All the designs related to your business (including logo, Social Media & Digital Marketing, leaflets, business cards, etc.) are a strong sign of your professionalism. A professional appearance distinguishes your product, and business, from others, allowing you to gain new customers
            and encourage existing clients to stick to your products and/or services.
        </p>

        <p class="bold-text">3. Graphics Surpass Languages.</p>
        <p class="description">
            People can only read this blog if they have a good grasp of the English language. However, no matter what their primary language is, people can understand themes and images. The same is applicable to any kind of image or visual aid. As the internet breaks
            down geographical barriers, appealing to a multilingual audience is important. Social Media & Digital Marketing is one of the best ways to achieve it.
        </p>

        <p class="highlight-text">
            You don’t get a second chance at a first impression, so your business’Social Media & Digital Marketing needs to be spot on right away. Our creative designers offer outstanding and attention-grabbing visuals for brochures, banners, flyers, business cards and many more. We will
            work with you to produce high-quality designs based on your unique requirements.
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
                        <img src="{{ asset('images/work/2.jpg') }}" alt="Project 2">
                        <div class="work-info">Project 2</div>
                        <div class="category-name">Development</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-card" data-category="photography" onclick="openProject('3', 'Photography')">
                        <img src="{{ asset('images/work/3.jpg') }}" alt="Project 3">
                        <div class="work-info">Project 3</div>
                        <div class="category-name">Photography</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-card" data-category="design" onclick="openProject('4', 'Design')">
                        <img src="{{ asset('images/work/4.jpg') }}" alt="Project 4">
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
        span.style.animationDelay = `${index * 0.2}s`; // تأخير الموجة لكل حرف
        text.appendChild(span);
    });
</script>
</body>

</html>
