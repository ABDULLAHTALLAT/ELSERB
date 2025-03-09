<style>
    /* إعدادات أساسية */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #000;
    }

    .slider {
        width: 100%;
        height: 85vh;
        background: url({{ asset('images/slider2/clien.png') }}) center/cover no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
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

.social-iconsk a:hover {
    transform: translateY(-5px) scale(1.1); /* تحريك الأيقونة للأمام قليلاً وتكبيرها */
    border-color: #c3814c; /* تغيير لون الحواف عند الـ hover */
background-color: #904600;
}


    .section {
        padding: 50px 20px;
    }

    .clients-section {
        background-color: #000;
        color: white;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out;
    }

    .clients-section.active {
        opacity: 1;
        transform: translateY(0);
    }

    .container {
        width: 70%;
        margin: auto;
        text-align: center;
        padding: 50px 0;
    }

    .container h2 {
        color: #c3814c;
        font-size: 100px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 10px;
        text-align: left;
        opacity: 0;
        transform: translateY(-50px);
        transition: all .5s ease-in-out;
    }
.container p {
      font-family: Arial, sans-serif;
}
    .clients-section.active h2 {
        opacity: 1;
        font-size: 50px;

        transform: translateY(0);

    }

    .clients {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        text-align: left;
        font-family: Arial, sans-serif;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out 0.3s;
    }

    .clients-section.active .clients {
        opacity: 1;
        font-size: 30px;
        transform: translateY(0);
    }

    .partners {
        background-color: white;
        color: black;
        padding: 50px;
        text-align: center;
        margin-top: 50px;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out 0.5s;
    }

    .partners.active {
        opacity: 1;
        transform: translateY(0);
    }

    .partners h2 {
        color: #c3814c;
        font-size: 40px;
        opacity: 0;
        transform: translateY(-50px);
        transition: all 1s ease-in-out;
        padding-left: 30px;
        padding-bottom: 30px;
    }

    .partners.active h2 {
        opacity: 1;

        transform: translateY(0);
    }

    .partners p,
    .logos {
        opacity: 0;
          font-family: Arial, sans-serif;
        transform: translateY(50px);
        transition: all 1s ease-in-out 0.3s;
    }

    .partners.active p,
    .partners.active .logos {
        opacity: 1;
        transform: translateY(0);
    }

    .logos {
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
    }

    .logos img {
        width: 90px;
        filter: grayscale(100%) opacity(0.6);
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .logos img:hover {
        filter: grayscale(0%) opacity(1);
        transform: scale(1.1);
    }

    /* إضافة مسافة فارغة تحت السيكشن الثاني */
    .partners::after {
        content: "";
        display: block;
        height: 80px;
    }

      @media (max-width: 1200px) {
    .slider {
        height: 60vh;
    }
    .animated-text {
        font-size: 4em;
    }

     .social-iconc a {
        font-size: 10px;
    }
}

@media (max-width: 992px) {
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

@media (max-width: 768px) {
    .slider {
        height: 50vh;
    }
    .animated-text {
        font-size: 3em;
    }
      .social-icons {
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
    .social-icons {
        display: none;
    }
}



</style>

<body>
    <section class="slider">

        <h1 class="animated-text"> Our Clients</h1>
        <div class="welcome-text">Alserb...</div>
        <div class="social-icons">
            <a href="https://www.instagram.com/alserbagency/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/alserbagency/"><i class="fab fa-facebook"></i></a>
            <a href="http://linkedin.com/company/alserbagency/"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.tiktok.com/@alserbagency"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.youtube.com/@alserbagency"><i class="fab fa-youtube"></i></a>
            <a href="https://www.snapchat.com/add/alserbmarketing"><i class="fab fa-snapchat"></i></a>
        </div>
    </section>

    <div class="container clients-section">
        <h2>Our Clients</h2>
        <div class="clients">
            <div class="left">
                <p>Our customers are success partners that we are proud to deal with</p>
                <p>More than 100 customers around the world</p>
            </div>
            <div class="right">
                <p>We constantly strive to obtain high satisfaction rates from our customers.</p>
                <p>Our clients represent a distinguished selection of worldwide brands.</p>
            </div>
        </div>
    </div>

    <div class="partners">
        <h2>Our Partners of Success</h2>
        <p></p>
        <div class="logos">
            {{-- <img src="images/clients/1.png" alt="Partner 1">
            <img src="images/clients/2.png" alt="Partner 2">
            <img src="images/clients/3.png" alt="Partner 3">
            <img src="images/clients/4.png" alt="Partner 4">
            <img src="images/clients/5.png" alt="Partner 5">
            <img src="images/clients/6.png" alt="Partner 1">
            <img src="images/clients/7.png" alt="Partner 2">
            <img src="images/clients/8.png" alt="Partner 3">
            <img src="images/clients/9.png" alt="Partner 4">
            <img src="images/clients/10.png" alt="Partner 5">
            <img src="images/clients/11.png" alt="Partner 1">
            <img src="images/clients/12.png" alt="Partner 2">
            <img src="images/clients/13.png" alt="Partner 3">
            <img src="images/clients/14.png" alt="Partner 4">
            <img src="images/clients/15.png" alt="Partner 5">
            <img src="images/clients/1.png" alt="Partner 1">
            <img src="images/clients/2.png" alt="Partner 2">
            <img src="images/clients/3.png" alt="Partner 3">
            <img src="images/clients/4.png" alt="Partner 4">
            <img src="images/clients/5.png" alt="Partner 5"> --}}
        </div>
    </div>

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
