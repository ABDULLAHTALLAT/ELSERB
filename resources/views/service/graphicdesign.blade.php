<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Design</title>
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
        background: url({{ asset('images/slider/6.jpg') }}) center/cover no-repeat;
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
    border-color: #382815; /* تغيير لون الحواف عند الـ hover */
background-color: #b88f61;
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

        .google {
            background: #4c4c6d;
        }

        .twitter {
            background: #55acee;
        }

        .google-plus {
            background: #dd4b39;
        }

        .linkedin {
            background: #0077b5;
        }

        .behance {
            background: #ff2b2b;
        }
        .social-icons a:hover {
    transform: scale(1.1); /* تكبير بسيط */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2),
                0 0 10px rgba(0, 0, 0, 0.2),
                0 0 15px rgba(0, 0, 0, 0.2); /* طبقات متعددة */
}

/* جعل اللون الرئيسي لكل أيقونة ينتشر في الطبقات */
.google:hover {
    box-shadow: 0 0 5px #4c4c6d, 0 0 10px #4c4c6d, 0 0 15px #4c4c6d;
}

.twitter:hover {
    box-shadow: 0 0 5px #55acee, 0 0 10px #55acee, 0 0 15px #55acee;
}

.google-plus:hover {
    box-shadow: 0 0 5px #dd4b39, 0 0 10px #dd4b39, 0 0 15px #dd4b39;
}

.linkedin:hover {
    box-shadow: 0 0 5px #0077b5, 0 0 10px #0077b5, 0 0 15px #0077b5;
}

.behance:hover {
    box-shadow: 0 0 5px #ff2b2b, 0 0 10px #ff2b2b, 0 0 15px #ff2b2b;
}

        .subtitle {
            font-weight: bold;
            color: #000000;
            font-size: 30px;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .description {
            color: #666;
            max-width: 600px;
        }

        .bold-text {
            font-weight: bold;
        }

        .highlight-text {
            font-weight: bold;
            color: #000;
        }

        .work-section {
            text-align: center;
            padding: 50px 0;
        }

        .work-title {
            color: #c3814c;
            font-weight: bold;
            font-size: 50px;
            margin-bottom: 20px;
            padding-bottom: 30px;
        }

        .work-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3px;
        }

        .work-card {
            position: relative;
            width: 300px;
            height: 400px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            padding-top: 20px;
        }

        .work-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .work-card:hover img {
            transform: translateY(30px);
        }

        .work-info {
            position: absolute;
            bottom: -9999px;
            /* جعل العنصر بعيداً عن الرؤية */
            left: 0;
            width: 100%;
            background: #3a2717;
            font-size: large;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 10px;
            font-weight: bold;
        }

        .work-card:hover .work-info {
            bottom: 0;
        }

        .show-more {
            margin-top: 20px;
            padding: 10px 20px;
            border: 2px solid #c3814c;
            background: none;
            color: #c3814c;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .show-more:hover {
            background: #c3814c;
            color: white;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>



    <section class="slider">
        <div class="overlay"></div>
        <h1 class="animated-text">Graphic Design</h1>
        <div class="welcome-text">WELCOMYOU</div>
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
            <a href="#" class="google"><i class="fab fa-google"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="behance"><i class="fab fa-behance"></i></a>
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
        <h2 class="work-title">Our Work</h2>
        <button class="show-more" id="showMore">Show More</button>
        <div class="work-container" id="workGallery">

        </div>


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
        span.style.animationDelay = `${index * 0.2}s`; // تأخير الموجة لكل حرف
        text.appendChild(span);
    });
</script>

</body>

</html>
