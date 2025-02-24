<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Branding</title>
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
        background: url({{ asset('images/slider/1.jpg') }}) center/cover no-repeat;
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
    border-color: #91c637; /* تغيير لون الحواف عند الـ hover */
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
            margin-top: 50px;
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
    justify-content: space-between; /* توزيع البطاقات بالتساوي */
    max-width: 1300px; /* عرض أقصى للحاوية ليتناسب مع 4 بطاقات */
    margin: auto; /* توسيط العنصر */
    gap: 3px; /* المسافة بين البطاقات */
}

.work-card {
    flex-basis: calc(25% - 15px); /* كل بطاقة تأخذ ربع المساحة مع الفراغات */
    max-width: 300px; /* تحديد عرض أقصى */
    height: 400px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    padding-top: 20px;
}

@media (max-width: 1200px) {
    .work-card {
        flex-basis: calc(50% - 15px); /* عندما تصغر الشاشة تصبح 2 في الصف */
    }
}

@media (max-width: 768px) {
    .work-card {
        flex-basis: 100%; /* على الشاشات الصغيرة يصبح كل عنصر في صف مستقل */
    }
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
            background: rgba(123, 225, 20, 0.7);
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
        <h1 class="animated-text"> Branding</h1>
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
        <h2 class="title"> Branding</h2>

        <div class="social-icons">
            <a href="#" class="google"><i class="fab fa-google"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="behance"><i class="fab fa-behance"></i></a>
        </div>

        <h3 class="subtitle">What is Branding?</h3>

        <p class="description">
            Branding defines how your business is viewed, whilst building an emotional bond at every touchpoint. A successful brand
            does not only create a loyalty between the current customers but it can also bring new audience by clearly expressing
            its values and identity.

        </p>

        <h3 class="subtitle">Why Do You Need Branding in Your Marketing?</h3>

        <p class="bold-text">1. More People Will Recognize Your Business.</p>
        <p class="description">
            Boosts Recognition for Your Business
            A strong brand helps your business stand out and stay memorable. Customers are more likely to notice and recall a
            business with cohesive and impactful branding than one that lacks a clear identity.

        </p>

        <p class="bold-text">2. Branding Creates Loyal Customers.</p>
        <p class="description">
        Builds Customer Loyalty
        Effective branding goes beyond recognition; it creates an emotional connection. By giving your business a relatable,
        human side, you foster loyalty among customers who feel aligned with your brand values and are more likely to return.

        </p>

        <p class="bold-text">3. Your brand provides motivation and direction for your staff.</p>
        <p class="description">
        Inspires and Unites Your Team
        Branding isn’t just for customers—it motivates your staff, too. Branded materials, office design, and a clear brand
        identity create a sense of pride and unity among employees, driving better engagement and performance.
</p>

        <p class="highlight-text">
        We help you capture marketplace opportunities and establish sustained differentiation through creative naming,
        imaginative logo, comprehensive brand strategy and insightful market research.
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
        $(document).ready(function() {
            let projects = [{
                image: "{{ asset('images/work/1.jpg') }}",
                name: "Project 1",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 2",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/4.jpg') }}",
                name: "Project 3",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 4",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/1.jpg') }}",
                name: "Project 5",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/4.jpg') }}",
                name: "Project 6",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 7",
                category: " Branding"
            }, {
                image: "{{ asset('images/work/3.jpg') }}",
                name: "Project 8",
                category: " Branding"
            }];

            let itemsPerPage = 4;
            let currentIndex = 0;

            function renderProjects() {
                let container = $("#workGallery");
                let endIndex = currentIndex + itemsPerPage;

                for (let i = currentIndex; i < endIndex && i < projects.length; i++) {
                    let project = projects[i];
                    let card = `
                        <div class="work-card">
                            <img src="${project.image}" alt="${project.name}">
                            <div class="work-info">
                                <h5>${project.name}</h5>
                                <p>${project.category}</p>
                            </div>
                        </div>
                    `;
                    container.append(card);
                }

                currentIndex += itemsPerPage;

                // إخفاء زر "Show More" إذا تم عرض كل المشاريع
                if (currentIndex >= projects.length) {
                    $("#showMore").hide();
                }
            }

            // عرض المشاريع الأولية
            renderProjects();

            // عند الضغط على زر "Show More"
            $("#showMore").click(function() {
                renderProjects();
            });
        });
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
