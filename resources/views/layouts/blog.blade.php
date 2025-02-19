<style>
   .slider {
        width: 100%;
        height: 70vh;
        background: url({{ asset('images/Blugs/1.jpg') }}) center/cover no-repeat;
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
        bottom: 10%;
        transform: rotate(-90deg) translateY(100%);
        font-size: 12px;
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
            margin-left: -20px;
        }
        .card p {
            font-size: 19px;
            color: #666;
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
        }
        .read-more:hover {
            text-decoration: underline;
            text-decoration-color: #bb7b54;
        }


</style>
<body>
    <section class="slider">
        <div class="overlay"></div>
        <h1 class="animated-text">News</h1>
        <div class="welcome-text">WELCOM YOU</div>
        <div class="social-iconc">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </section>

<div class="container">
    <div class="card">
        <a href="{{ route('seoblog') }}">
        <img src="{{ asset("images/Blugs/seo/1 (1).jpg") }}" alt="Web Applications"></a>
        <h3>The difference between web applications and websites.</h3>
        <p>Understanding the difference between web applications and websitesSEO stands for Search Engine Optimization, which is the practice of increasing the quantity and quality of traffic to
        your website through organic search engine results. It is also a valuable tool for brand awareness......</p>
        <a href="{{ route('seoblog') }}" class="read-more">READ MORE</a>
    </div>
    <div class="card">
        <a href="{{ route('blog6') }}">
        <img src="{{ asset("images/Blugs/seo/1 (2).jpg") }}" alt="SEO Importance"></a>
        <h3>Why is SEO Important for your Website?</h3>
        <p>SEO enhances visibility and quality of traffic to your website SEO stands for Search Engine Optimization, which is the practice of increasing the quantity and quality of traffic to
        your website through organic search engine results. It is also a valuable tool for brand awareness... SEO stands for Search Engine Optimization, which is the practice of increasing the quantity and quality of traffic to
        your website through organic search engine results. It is also a valuable tool for brand awareness......</p>
        <a href="{{ route('blog6') }}" class="read-more">READ MORE</a>
    </div>
    <div class="card">
        <a href="{{ route('blog5') }}">
        <img src="{{ asset("images/Blugs/seo/1 (3).jpg") }}" alt="Mobile Technologies"></a>
        <h3>Top Technologies Used to Develop Mobile App</h3>
        <p>Discover the most important technologies used in mobile app development.SEO stands for Search Engine Optimization, which is the practice of increasing the quantity and quality of traffic to
        your website through organic search engine results. It is also a valuable tool for brand awareness.....</p>
        <a href="{{ route('blog5') }}" class="read-more">READ MORE</a>
    </div>
    <div class="card">
        <a href="{{ route('blog4') }}">
        <img src="{{ asset("images/Blugs/seo/1 (4).jpg") }}"alt="Brand Marketing"></a>
        <h3>What is brand marketing? And how to create a brand marketing strategy</h3>
        <p>Learn how to build a strong brand marketing strategy...</p>
        <a href="{{ route('blog4') }}" class="read-more">READ MORE</a>
    </div>
    <div class="card">
        <a href="{{ route('blog3') }}">
        <img src="{{ asset("images/Blugs/seo/1 (5).jpg") }}" alt="Visual Identity"></a>
        <h3>The Importance of Visual Identity for Building a Strong Brand</h3>
        <p>Visual identity is key to brand recognition and differentiation...</p>
        <a href="{{ route('blog3') }}" class="read-more">READ MORE</a>
    </div>
    <div class="card">
        <a href="{{ route('blog2') }}" >
        <img src="{{ asset("images/Blugs/seo/1 (6).jpg") }}" alt="Website Traffic"></a>
        <h3>How to increase traffic to website?</h3>
        <p>Boosting website traffic is essential for online success...</p>
        <a href="{{ route('blog2') }}" class="read-more">READ MORE</a>
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


