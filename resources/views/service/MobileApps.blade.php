<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Apps</title>
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
        background: url({{ asset('images/slider/5.jpg') }}) center/cover no-repeat;
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
        background: rgba(0, 0, 0, 0.399);
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
            margin-top: 50px;
        }

        .description {
            color: #666;
            max-width: 600px;
        }

        .bold-text {
            font-weight: bold;
            color: #333333d4;
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
        <h1 class="animated-text">Mobile Apps</h1>
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
        <h2 class="title">Mobile Apps</h2>

        <div class="social-icons">
            <a href="#" class="google"><i class="fab fa-google"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="behance"><i class="fab fa-behance"></i></a>
        </div>

        <h3 class="subtitle">What is Mobile Apps?</h3>

        <p class="description">
        App development for mobile devices refers to the process of developing applications for smartphones and tablets. The
        apps are able to fetch data over the internet, which results in effective and enhanced user experience.

        The process involves conceptualizing the idea, developing the application, linking it with the backend systems, and
        debugging the application to various devices to ensure the functionality of the application. This is how applications
        that are easy to use and address the needs of the audience are built by businesses.
        </p>

        <h3 class="subtitle">Why Mobile App Development Is Important for Your Business?</h3>

        <p class="bold-text">1. Reach a global audience.</p>
        <p class="description">
        Broaden Your Horizon to a Global Audience
        Since most of today's internet traffic is coming from mobile devices, mobile apps allow businesses to connect with
        customers through millions of locations worldwide. The right application design can give a business the strength to
        expand markets, increase brand visibility, and newly unlock growth opportunities in a globally interconnected space.
        </p>

        <p class="bold-text">2. On-the-go advertising.</p>
        <p class="description">
        Be at the Top of Your Customer's Mind During Travel
        Mobile apps allow consumers to interact with your business any time and any place-whether at home, on the move, or at
        work. An app provides your business with a friendly and more accessible environment while strengthening your brand
        presence, which enhances repeat buying and customer loyalty.
        </p>

        <p class="bold-text">3. Social platforming.</p>
        <p class="description">
        Build an Active Community with Social Features
        By integrating social features such as forums, in-app messaging, and reviews, a mobile app can turn into an engagement
        hub. These features provide a platform for active community building, where customers can share feedback, discuss
        products, and interact with your brand on a deeper level.

        Tailored Solutions Once Created
        Our mobile app development services are about your budget, goals, and requirements. Zero in on your need, from native
        apps on iOS and Android to cross-platform solutions, offering the user the best experience out there with the full
        extent of the device and OS features combined.
 </p>

        <p class="highlight-text">
        Our application development services are tailor-made based on your budget, specific needs, and requirements. We maximize
        value by suggesting improvements with advanced technologies to reduce cost or make systems more efficient, we create
        native and cross-platform mobile apps for IOS and Android with unique native user experiences that leverage all
        potential device and operating system features. We connect your app with third-party services, extend its functionality,
        implement new security protocols and centralize data between your disparate business systems.
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
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 2",
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/4.jpg') }}",
                name: "Project 3",
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 4",
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/1.jpg') }}",
                name: "Project 5",
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/4.jpg') }}",
                name: "Project 6",
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 7",
                category: "Mobile Apps"
            }, {
                image: "{{ asset('images/work/3.jpg') }}",
                name: "Project 8",
                category: "Mobile Apps"
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
