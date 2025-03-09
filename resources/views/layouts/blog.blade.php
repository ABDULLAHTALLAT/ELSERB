<style>
   .slider {
        width: 100%;
        height: 85vh;
        background: url({{ asset('images/Blugs/blogs.png') }}) center/cover no-repeat;
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
        background: rgba(0, 0, 0, 0);
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
        bottom: 10%;
        transform: rotate(-90deg) translateY(100%);
        font-size: 12px;
        font-family: 'Cairo', sans-serif;
        color: rgba(255, 255, 255, 0.621);
        font-weight: bold;
        transition: all 1s ease-in-out;
        word-spacing: 5px;

    }

    .slider.active .welcome-text {
        transform: rotate(-90deg) translateY(0);
    }


    .social-iconc {
    position: absolute;
    right: 20px;
    top: 45%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
}

.social-iconc a {
    text-decoration: none;
    color: white;
    font-size: 15px;
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
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 100%;
            margin: auto;
            padding: 40px;
        }
        .card {

            background: white;
            padding: 30px;
            border-radius: 5px;

        }
        .card img {
            width: 100%;
            border-radius: 5px;
        }


        .card h3 {
            color: #bb7b54;
            font-size: 30px;
            padding: 10px;
            padding-bottom: 50px;
            padding-top: 20px;
            margin-left: -20px;
        }



        .card p {
            font-size: 19px;
            font-family: 'Cairo', sans-serif;
            color: #000000;
        }
         .read-more {

            padding: 10px;
            display: inline-block;
            margin-top: 10px;
            color: #bb7b54;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            center-align: center;
            padding-top: 20px;
        }
        .read-more:hover {
            text-decoration: underline;
            text-decoration-color: #bb7b54;
        }
        @media (max-width: 1200px) {
    .slider {
        height: 60vh;
    }
    .animated-text {
        font-size: 4em;
    }

     .social-icons a {
        display: none;
    }
}

@media (max-width: 992px) {
    .slider {
        height: 60vh;
    }
    .animated-text {
        font-size: 4em;
    }

    .social-iconc a {
        display: none;
            }
}

@media (max-width: 768px) {
    .slider {
        height: 50vh;
    }
    .animated-text {
        font-size: 3em;
    }
      .social-iconc {
        display: none;
    }
}

@media (max-width: 576px) {
    .slider {
        height: 40vh;
    }
    .animated-text {
        font-size: 2em;
    }
    .social-iconc {
        display: none;
    }
}

@media (max-width: 1200px) {
    .container {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        padding: 20px;
    }

    .card h3 {
        font-size: 18px;
    }

    .card p {
        display: none;
    }
    .read-more {
    display: none; /* إخفاء زر القراءة */
}
}

@media (max-width: 480px) {
    .container {
        padding: 10px;
    }

    .card {
        padding: 15px;
    }

    .card h3 {
        font-size: 12px;
    }
     .card p {
        display: none;
    }
    .read-more {
    display: none; /* إخفاء زر القراءة */
}
}

</style>
<body>
    <section class="slider">
        <div class="overlay"></div>
        <h1 class="animated-text">News</h1>
        <div class="welcome-text">Alserb...</div>
        <div class="social-iconc">
        <a href="https://www.instagram.com/alserbagency/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/alserbagency/"><i class="fab fa-facebook"></i></a>
        <a href="http://linkedin.com/company/alserbagency/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.tiktok.com/@alserbagency"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.youtube.com/@alserbagency"><i class="fab fa-youtube"></i></a>
        <a href="https://www.snapchat.com/add/alserbmarketing"><i class="fab fa-snapchat"></i></a>
        </div>
    </section>

<div class="container">
    <div class="card">
        <a href="{{ route('blog2') }}">
        <img src="{{ asset("images/Blugs/seo/socia1.png") }}" alt="Web Applications"></a>
        <h3>the power of video content on social media</h3>
        <p>
        Video content is a powerful tool for engaging audiences on social media, offering dynamic storytelling, strong brand
        building, and effective action-driving....</p>
        <a href="{{ route('blog2') }}" class="read-more">READ MORE</a>
    </div>
    <div class="card">
        <a href="{{ route('seoblog') }}">
        <img src="{{ asset("images/Blugs/seo/seo.webp") }}" alt="SEO Importance"></a>
        <h3>why is SEO the backbone of digital marketing?</h3>
        <p>SEO is key to digital marketing, linking businesses with customers at critical moments. A strong SEO foundation ensures
        a scalable and effective marketing strategy.....</p>
        <a href="{{ route('seoblog') }}" class="read-more">READ MORE</a>
    </div>

</div>



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


