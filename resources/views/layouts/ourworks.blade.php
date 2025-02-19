<style>
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
        height: 65vh;
        background: url({{ asset('images/work/slide.jpeg') }}) center/cover no-repeat;
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
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
    }

    .social-icons a {
        text-decoration: none;
        color: white;
        font-size: 10px;
        margin: 3px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 20px;
        height: 20px;
        transition: 0.3s;
    }

    .social-icons a:hover {
        background: #b57746;
    }




  .work-section {
            text-align: center;
            padding: 50px;
            background-color: #000000;
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
     padding-top: 20px;
      padding-bottom: 20px;
      padding-left: 200px;
        padding-right: 200px;

        gap: 6px;
}

.work-card {
    position: relative;
    width: calc(25% - 6px); /* 4 كروت في الصف الواحد (100% / 4) مع مراعاة الفجوة بين الكروت */
    height: 400px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;

}

/* عند تغيير الحجم على الشاشات الصغيرة (مثل التابلت) */
@media (max-width: 1024px) {
    .work-card {
        width: calc(50% - 6px); /* 2 كروت في الصف الواحد */
    }
}

/* عند تغيير الحجم على الشاشات الصغيرة جدًا (مثل الموبايل) */
@media (max-width: 768px) {
    .work-card {
        width: calc(100% - 6px); /* كارت واحد في الصف الواحد */
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
            background: #c3814c;
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
<body>

        <section class="slider">
            <div class="overlay"></div>
            <h1 class="animated-text">Our Works</h1>
            <div class="welcome-text">WELCOMYOU</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </section>

<div class="work-section">
    <h2 class="work-title">Featured Portfolio</h2>
    <div class="work-container" id="workGallery"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
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

        // لا حاجة لاستخدام الزر "Show More" هنا
        function renderProjects() {
            let container = $("#workGallery");

            // عرض جميع المشاريع في البداية
            projects.forEach(project => {
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
            });
        }

        // عرض جميع المشاريع عند تحميل الصفحة
        renderProjects();
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

