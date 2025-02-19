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
        height: 80vh;
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
        <h1 class="animated-text">Motion Graphic</h1>
        <div class="welcome-text">WELCOMYOU</div>
        <div class="social-iconc">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
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
            Motion Graphic is the most powerful art that has breathed fresh life into digital marketing. This modern form of art has added a contemporary flair to the advertisement profile of every company. It also acts as one of the key components to build brand
            awareness and influence the customer’s decision-making process.
        </p>

        <h3 class="subtitle">Why do you need Graphics in your marketing?</h3>

        <p class="bold-text">1. Motion Graphic is a powerful mode of communication.</p>
        <p class="description">
            The good old saying “pictures speak louder than words” explains what design can do for communicating. With the assistance of powerful images, colors and layout, you can deliver strong messages to potential customers without using lengthy paragraphs. In
            simplest terms, graphics can make the message clearer and straightforward.
        </p>

        <p class="bold-text">2. Indicate professionalism.</p>
        <p class="description">
            All the designs related to your business (including logo, packaging, leaflets, business cards, etc.) are a strong sign of your professionalism. A professional appearance distinguishes your product, and business, from others, allowing you to gain new customers
            and encourage existing clients to stick to your products and/or services.
        </p>

        <p class="bold-text">3. Graphics Surpass Languages.</p>
        <p class="description">
            People can only read this blog if they have a good grasp of the English language. However, no matter what their primary language is, people can understand themes and images. The same is applicable to any kind of image or visual aid. As the internet breaks
            down geographical barriers, appealing to a multilingual audience is important. Motion Graphic is one of the best ways to achieve it.
        </p>

        <p class="highlight-text">
            You don’t get a second chance at a first impression, so your business’Motion Graphic needs to be spot on right away. Our creative designers offer outstanding and attention-grabbing visuals for brochures, banners, flyers, business cards and many more. We will
            work with you to produce high-quality designs based on your unique requirements.
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
