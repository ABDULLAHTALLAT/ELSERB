<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion Graphic</title>
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
        background: url({{ asset('images/slider/4.jpg') }}) center/cover no-repeat;
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
    gap: 15px; /* المسافة بين البطاقات */
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
            background: rgba(173, 126, 38, 0.7);
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
        <h1 class="animated-text">Motion Graphic</h1>
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
        <h2 class="title">Motion Graphic</h2>

        <div class="social-icons">
            <a href="#" class="google"><i class="fab fa-google"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="behance"><i class="fab fa-behance"></i></a>
        </div>

        <h3 class="subtitle">What is Motion Graphic?</h3>

        <p class="description">
        Motion graphics are an animated form of graphic design, which can include text changes and other animations For
        Example shapes or illustrations. Animations can be 2D or 3D and are often produced with an accompanying music, voiceover
        or on-screen text to communicate the message visually.
        </p>

        <h3 class="subtitle"> Why Should You Integrate Motion Graphics In Your Marketing?
</h3>

        <p class="bold-text">1. Thinking Outside the Box.</p>
        <p class="description">
        Relish Enhanced Creativity and Innovation
        First and foremost, you are allowed to ditch the conventional approaches and expand the outer limits of creativity. Such
        tools assist you in making your ideas clear to the audience helping you become articulate when it comes to your
        presentations and campaigns. If you have a statistics to explain, a product to launch or a story around the brand you
        want to narrate – motion graphics serve you with an impressive recourse of communication at professional levels, but
        still within a creative framework.

        </p>

        <p class="bold-text">2. They’re Great When You’re Short on Time.</p>
        <p class="description">
        Make an Impact in a Flash
        The modern day life is busy and you have only a limited period to capture someone’s attention. Usually, Motion Graphics
        is brief – somewhere between 30 seconds and 3 minutes long which provides an excellent way of getting your message
        across whilst keeping it short. It takes less than a minute to express ideas that in a conventional sense may take 1500
        words worth of reading material delivered, visually, in written word and accompanied with music so that the message is
        concise and impactful.
        </p>

        <p class="bold-text">3.They’re Emotionally Captivating.</p>
        <p class="description">
        Build an Emotional Tie with Your Target Audience
        Motion graphics introduction is the best way to revolutionize a piece of text. It has an ability to awe someone and take
        them in a different reality by simply adding beautiful art, music, and voice narration with a simple statement, whereas
        for many their feelings are always an excellent way of moving forward.</p>

        <p class="highlight-text">
        We will guide you through the process of creating astonishing artwork for your landing page or an engaging video
        explainer for social media using visual effects, animation, and other cinematic techniques to bring your creations to
        life.
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
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 2",
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/4.jpg') }}",
                name: "Project 3",
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 4",
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/1.jpg') }}",
                name: "Project 5",
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/4.jpg') }}",
                name: "Project 6",
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/2.jpg') }}",
                name: "Project 7",
                category: "Motion Graphic"
            }, {
                image: "{{ asset('images/work/3.jpg') }}",
                name: "Project 8",
                category: "Motion Graphic"
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
