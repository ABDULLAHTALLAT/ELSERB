<!-- Google Fonts: Nippor -->
<link href="https://fonts.googleapis.com/css2?family=Nippor:wght@400;700&display=swap" rel="stylesheet">

<style>
 * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    .slider {
        width: 100%;
        height: 80vh;
        background: url({{ asset('images/About/about.jpg') }}) center/cover no-repeat;
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


    .slider.active .animated-text {
        transform: translateX(0);
        opacity: 1;
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
    transform: translateY(-5px) scale(1.5); /* تحريك الأيقونة للأمام قليلاً وتكبيرها */
    border-color: #754d2e; /* تغيير لون الحواف عند الـ hover */
background-color: #c3814c
}




        .about-section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        .about-title {
            color: #c3814c;
            font-size: 5em;
            font-weight: bold;
            margin-bottom:-140px;
            text-align: left;

        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .about-column {
            color: #333;
            line-height: 1.6;
        }

        .about-column p {
            margin-bottom: 20px;
            font-size: 15px;
        }
        /* الجزء الأيسر - النص الأول */

        .left-column p {
            color: #000000;
            line-height: 1.6;
            font-size: 20px;
            max-width: 100%;
            text-align: left;
            margin: 0;
            padding-top: 140px;

            white-space: pre-line;
            font-weight: 500;
            font-family: 'Cairo', sans-serif;
            letter-spacing: -0.2px;
        }
        /* الجزء الأيمن - النص الثاني */

        .right-column p {
            color: #444;
            line-height: 1.6;
            font-size: 20px;
            max-width: 100%;
            text-align: left;
             font-family: Arial, sans-serif;
             font-style: bold;
            margin: 0;
            padding: 0;
            white-space: pre-line;
            margin-bottom: 20px;
            letter-spacing: -0.2px;
        }

        @media (max-width: 768px) {
            .about-content {
                grid-template-columns: 1fr;
            }
            .about-title {
                text-align: center;
            }
        }

        .team-title {
            color: #c3814c;
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1100px;
            margin: auto;
        }
        /* تصميم الكرت */

      .team-card {
    position: relative;
    width: 200px;
    height: 280px;
    background: linear-gradient(135deg, #3e3d3d, #777676); /* تدرج لوني بين لونين */
    /*border-radius: 10px;*/
    overflow: hidden;
    text-align: center;
    transition: transform 0.4s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Cairo', sans-serif;
}

        /* الدائرة الفارغة بحواف خضراء */

        .team-card .circle-bg {
            width: 195px;
            height: 195px;
            background-color: transparent;
            border: 6px solid #c3814c;
            border-radius: 50%;
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
        }
        /* الصورة داخل الدائرة */

     .team-card img {
    width: 170px; /* حجم الصورة */
    height: 170px; /* تأكد من أن العرض والطول متساويان */
    border-radius: 50%; /* يجعل الصورة دائرية */
    object-fit: cover;
    position: absolute;
    top: 10px; /* ضبط الموضع */
    left: 50%;
    transform: translateX(-50%);
    filter: grayscale(100%);
    transition: filter 0.2s ease-in-out;
    border: 0px solid #ffffff00; /* إضافة إطار أبيض حول الصورة */
}

.team-card:hover img {
    filter: grayscale(0%);
}


        .team-card:nth-child(odd):hover {
            transform: translateY(-20px);
        }
        /* التأثير الثاني: يهبط للأسفل */

        .team-card:nth-child(even):hover {
            transform: translateY(20px);
        }
        /* معلومات الفريق */

        .team-info {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            background-color: #33333300;
            color: white;
            padding: 10px;
            transition: bottom 0.4s ease-in-out;
            font-family: 'Cairo', sans-serif;
        }
        /* عند تمرير الماوس، تظهر معلومات الفريق */

        .team-card:hover .team-info {
            bottom: 15px;
        }

        .separator {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .line {
            width: 35%;
            height: 4px;
            background-color: #c3814c;
            padding-right: 5px;
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
            border: 4px solid #c3814c;
        }

        .logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }


        .methodology-section {
            max-width: 1100px;
            margin: 0 auto;
            font-family: Arial, sans-serif;

            padding-bottom: 50px;
        }

        .methodology-title {
            font-size: 3em;
            font-weight: bold;
            color: #c3814c;
            margin-bottom: 40px;
            text-align: left;
            padding-left: 0;
        }

        .methodology-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            max-width: 100%;
            margin: 0;
        }

        .methodology-step {
            text-align: left;
        }

        .methodology-step h3 {
            font-size: 20px;
            color: #754d2e;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .methodology-step p {
            font-size: 15px;
            color: #444;
            line-height: 1.6;
            white-space: pre-line;
            letter-spacing: -0.2px;
        }

        @media (max-width: 768px) {
            .methodology-container {
                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 1200px) {
    .slider {
        height: 60vh;
    }
    .animated-text {
        font-size: 4em;
    }

     .social-icons a {
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
        font-size: 5px;
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
        <div class="overlay"></div>
        <h1 class="animated-text">About <space> <space> <space> Us</h1>
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











    <section class="about-section">
        <h2 class="about-title">Alserb</h2>
        <div class="about-content">
            <div class="about-column left-column">
                <p>
                  <space><space> is a marketing company that depends on knowledge and experience. The company helps commercial and service companies to help them and build an integrated community on the Internet, starting from building the brand and targeting the right audience
                    for you, to designing and creating complete websites, in addition to campaign and account management services on the Internet on All platforms.
                </p>
            </div>
            <div class="about-column right-column">
                <p>
                Alserb excels in digital marketing through strategic planning, creative execution, and engaging content that drives
                customer interaction. We prioritize Arab talents, valuing expertise over profit, ensuring our team is highly skilled and
                experienced. With rigorous training and a workforce of over 70% specialists and academics, Alserb guarantees excellence
                in every project.
                </p>
            </div>
        </div>
    </section>

    <div class="separator">
        <div class="line"></div>
        <div class="logo">
            <img src="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" alt="Logo">
        </div>
        <div class="line"></div>
    </div>

    <h2 class="team-title">OUR TEAM</h2>
    <div class="team-container">
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/') }}" alt=" ">
            </div>
            <div class="team-info">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/1.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Ahmed Abdelhady</h3>
                <p>Founder CEO</p>
            </div>
        </div>

        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/amira.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Amira</h3>
                <p> </p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/y.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Yasmine Ibrahim</h3>
                <p>Reel Creator</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/4.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>salma</h3>
                <p></p>
            </div>
        </div>

        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/abdo2.png') }}" alt="Team Member" width="100%" hight="100%" top="-25px">

            </div>
            <div class="team-info">
                <h3>Abdullah Tallat</h3>
                <p>Software Engineer 💻</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/3.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Abanoub Nader</h3>
                <p>Graphics Designer</p>
            </div>
        </div>

        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/most.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Mustafa Ashraf</h3>
                <p>media buyer</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/7.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>jana</h3>
                <p>Web Developar</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/2 (2).png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Ahmed Al-Fateh</h3>
                <p>Media buyer</p>
            </div>
        </div>

        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/19.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Rovan </h3>
                <p>Videographer</p>
            </div>
        </div>

        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/12.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Adham </h3>
                <p> خليها علي الله  </p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/29.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Mahamoud </h3>
                <p></p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/22.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Karim</h3>
                <p>Senior Sales</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/30.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Majid</h3>
                <p>Senior Sales</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/21.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Andrew</h3>
                <p>Senior Sales</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/26.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Mark</h3>
                <p>Junior Sales</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/18.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Basant</h3>
                <p> Fresh Sales</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/24.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>adham</h3>
                <p>Fresh Sales</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/20.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Ahmed</h3>
                <p>Accountant</p>
            </div>
        </div>
        <div class="team-card">
            <div class="circle-bg">
                <img src="{{ asset('images/About/staf/17.png') }}" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Shaimaa</h3>
                <p>Accountant</p>
            </div>
        </div>
    </div>


    <div class="separator">
        <div class="line"></div>
        <div class="logo">
            <img src="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" alt="Logo">
        </div>
        <div class="line"></div>
    </div>


    <!-- Work Methodology Section -->
    <section class="methodology-section">
        <h2 class="methodology-title">Work methodology</h2>
        <div class="methodology-container">
            <div class="methodology-step">
                <h3>Listening and understanding</h3>
                <p>First, we listen to our client and make sure that we understand their vision and ideas. This is a pivotal stage where we can take a copy of the customer's perception of their brand and stick it in our minds.</p>
            </div>
            <div class="methodology-step">
                <h3>Planning</h3>
                <p>After understanding all aspects and ideas, the creative marketing team comes together to agree on the best way to create the brand.</p>
            </div>
            <div class="methodology-step">
                <h3>Working</h3>
                <p>Our writers, designers, and all the teamwork work together to bring the brand to life in accordance with the rules and business plan presented.</p>
            </div>
            <div class="methodology-step">
                <h3>Follow-up</h3>
                <p>After careful effort and a design and coordination process, we deliver the project to the client. However, that does not mean that it is the last. We will get the customer's reaction, and then we will get back to work again to implement
                    all of their feedback.</p>
            </div>
        </div>
    </section>

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
