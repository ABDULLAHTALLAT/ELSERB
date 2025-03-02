<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
 * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #000000;
    }

    .slider {
        width: 100%;
        height: 85vh;
        background: url({{ asset('images/work/work.png') }}) center/cover no-repeat;
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
    transform: translateY(-5px) scale(1.1); /* تحريك الأيقونة للأمام قليلاً وتكبيرها */
    border-color: #c3814c; /* تغيير لون الحواف عند الـ hover */
background-color: #904600;
}


    .project-section {
            background-color: rgba(0, 0, 0, 0.364);
        }

        .filter-section {
            text-align: center;
            padding: 40px;
        }

        h2 {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #c3814c;
        }
          h2:hover {

            color: #663106;

        }

        .category-container {
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 25px;
            display: inline-block;
            width: 700PX;
        }

        .category-container span {
            margin: 0 10px;
            cursor: pointer;
            font-size: 17px;
            font-weight: 500;
            font-family: 'Cairo', sans-serif;
            color: #777;
            transition: color 0.3s ease-in-out;

        }

        .category-container span.active {
            color: #c3814c;
            font-weight: bold;
        }

        .category-container span:hover {
            color: #c3814c;
        }

      .work-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 40px;
    max-width: 1100px; /* تحديد عرض مناسب لتحديد عدد الكروت */
    margin: auto;
}

.work-card {
    position: relative;
    width: 250px;
    height: 400px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 1s ease-in-out;
    border-radius: 20px;
    padding-bottom: 30px;
}

.work-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(30%);
    transition: 0.3s;
}

.work-card:hover img {
    filter: brightness(100%);
    transform: scale(1.12);
}

.work-card .work-info,
.work-card .category-name {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-weight: bold;
                font-family: 'Cairo', sans-serif;

    opacity: 1; /* اجعل الاسم والقسم ظاهرين افتراضيًا */
    transition: opacity 0.3s ease-in-out;
}

.work-card .work-info {
    color: #c3814c;
}

.work-card .category-name {
    top: 59%;
    color: #ffffff;
    font-size: 30px;
}

.work-card:hover .work-info,
.work-card:hover .category-name {
    opacity: 0; /* إخفاء الاسم والقسم عند التحويم */
}

</style>
<body>

        <section class="slider">
            <div class="overlay"></div>
            <h1 class="animated-text">Portfolio<space><space></h1>
            <div class="welcome-text">Alserb..</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-snapchat"></i></a>
            </div>
        </section>

<section class="project-section">

    <div class="filter-section">
        <h2>Featured Portfolio</h2>
        <div class="category-container">
            <span class="active" data-category="all">All</span>
            <span data-category="Video & Photography">Video & Photography </span>
            <span data-category="Motion Graphic">Motion Graphic</span>
            <span data-category="Web Solutions"> Web Solutions </span>
            <span data-category="Mobile Apps">Mobile Apps </span>
            <span data-category="Graphic Design">Graphic Design</span>
            <span data-category="Branding"> Branding</span>
            <span data-category="Packaging">Packaging</span>
            <span data-category="Social Media & Digital Marketing">Social Media & Digital Marketing</span>
            <span data-category="Search Engine Optimization">Search Engine Optimization</span>
        </div>
    </div>

    <div class="container work-container">
        <div class="row">
            <div class="col-md-3">
                <div class="work-card" data-category="design" onclick="openProject('1', 'Design')">
                    <img src="images/work/1.jpg" alt="Project 1">
                    <div class="work-info">Project 1</div>
                    <div class="category-name">Design</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="work-card" data-category="development" onclick="openProject('2', 'Development')">
                    <img src="images/work/2.jpg" alt="Project 2">
                    <div class="work-info">Project 2</div>
                    <div class="category-name">Development</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="work-card" data-category="photography" onclick="openProject('3', 'Photography')">
                    <img src="images/work/3.jpg" alt="Project 3">
                    <div class="work-info">Project 3</div>
                    <div class="category-name">Photography</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="work-card" data-category="design" onclick="openProject('4', 'Design')">
                    <img src="images/work/4.jpg" alt="Project 4">
                    <div class="work-info">Project 4</div>
                    <div class="category-name">Design</div>
                </div>
            </div>

        </div>
    </div>


</section>



<script>
    document.querySelectorAll(".category-container span").forEach(item => {
        item.addEventListener("click", function () {
            document.querySelectorAll(".category-container span").forEach(el => el.classList.remove("active"));
            this.classList.add("active");

            let selectedCategory = this.getAttribute("data-category");
            let cards = document.querySelectorAll(".work-card");

            cards.forEach(card => {
                if (selectedCategory === "all" || card.dataset.category === selectedCategory) {
                    card.closest('.col-md-3').style.display = "block";
                } else {
                    card.closest('.col-md-3').style.display = "none";
                }
            });
        });
    });

    function openProject(id, category) {
        window.location.href = `project-details.html?id=${id}&category=${category}`;
    }
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

