
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.css">
<style>
    .header {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .slider {
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .gallery-top {
        width: 100%;
        height: 100%;
    }

    .slide-inner {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: white;

    }

    .slide-title {
        font-size: 2rem;
        font-weight: bold;
        position: absolute;
        width: 100%;
        z-index: 5;
        color: white;
        transition: all 0.5s ease;
        left: 5%;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }
.slide-title a {
    text-decoration: none !important; /* إزالة الخط */
    color: inherit; /* جعل اللون متوافقًا مع النص الأصلي */
}

.slide-title a:hover {
    text-decoration: none !important; /* التأكد من عدم ظهوره عند التحويم */
}

    .previous-title {
        bottom: 65%;
        opacity: 0.8;
background: #e28743;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
        font-size: 3rem;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.049);
        margin-bottom: 10px;
    }

    .current-title {
        top: 40%;
        opacity: 1;
        font-size:3.5rem;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0);
        margin-top: 10px;
        text-decoration: none;
    }

    .next-title {
        top: 58%;
        opacity: 0.8;
         background: #e28743;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
        font-size: 3rem;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0);
        margin-top: 10px;
    }

    .gallery-thumbs {
        position: absolute;
        left: 10%;
        bottom: 10%;
        height: auto;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .gallery-thumbs .swiper-slide {
        width: 100%;
        opacity: 0.4;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 2rem;
        color: #fff;
        padding: 10px 0;
        transform: translateY(100%);
        transition: transform 0.8s ease-in-out;
    }

    .gallery-thumbs .swiper-slide-active {
        opacity: 1;
        transform: translateY(0);
    }

    .swiper-pagination {
        position: absolute;
        left: 7%;
        bottom: 2%;
        font-size: 1rem;
        text-align: left;
        color: #fff
    }

    .swiper-pagination .current-number {
        font-size: 3rem;
        font-weight: bold;
    }

    .swiper-pagination .total-number {
        font-size: 1rem;
        opacity: 0.6;
    }

    .social-media {
        position: absolute;
        right: 30px;
        top: 40%;
        transform: translateY(-50%);
        list-style: none;
        z-index: 10;
    }

    .social-media li {
        margin: 15px 0;
    }

    .social-media a {
        color: #fff;
        font-size: 1.4rem;
        transition: color 0.3s ease;
    }

    .social-media a:hover {
        color: #c3814c;
    }

    .welcome-text {
        position: absolute;
        top: 70%;
        right: 40px;
        transform: translateY(-50%);
        color: #ffffff;
        font-size: 1rem;

        font-weight: bold;
        font-family: 'Cairo', sans-serif;

        font-weight: bold;
        text-align: center;
        writing-mode: vertical-rl;
        z-index: 10;
        animation: moveUpDown 2s infinite alternate;
         word-spacing: 5px;
    }

    @keyframes moveUpDown {
        0% {
            transform: translateY(-100px);
        }
        50% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(100px);
        }
    }

    .scroll-down {
        position: fixed;
        right: 30px;
        bottom: 30px;
        color: #fff;
        text-align: center;
    }

    .scroll-down span {
        display: block;
        width: 20px;
        height: 20px;
        border-right: 2px solid #fff;
        border-bottom: 2px solid #fff;
        transform: rotate(45deg);
        margin: 10px auto;
        animation: scrollAnim 1.5s infinite;
    }

    @keyframes scrollAnim {
        0% {
            transform: rotate(45deg) translateY(0);
        }
        100% {
            transform: rotate(45deg) translateY(10px);
        }
    }

    .details-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
        color: #ff9500;
    }

    .details-text {
        font-size: 2rem;
    }

    .details-button {
        width: 30px;
        height: 30px;
        background-color: #fff;
        color: #000000f3;
        border: none;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .details-button:hover {
        transform: scale(1.1);
    }

    .details-button.active i {
        content: '\f00d';
        /* رمز "X" */
    }

    .details-button i {
        content: '\f067';
        /* رمز "+" */
    }
    /* إضافة طبقة شفافة فوق السلايدر */
@media (max-width: 2020px) {
    .slide-title {
        font-size: 2rem;
    }

    .previous-title, .next-title {
        font-size: 2rem;
    }

    .current-title {
        font-size: 2.5rem;
    }

    .gallery-thumbs {
        width: 60%;
        left: 20%;
    }

    .swiper-pagination .current-number {
        font-size: 2rem;
    }

    .swiper-container.gallery-top {
    width: 100%;
    height: 100vh;
}

.swiper-slide {
    width: 100%;
    height: 100%;
}

.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* يجعل الصورة تغطي الشاشة بالكامل */
}

}

@media (max-width: 768px) {
    .slide-title {
        font-size: 1.5rem;
    }

    .previous-title, .next-title {
        font-size: 1.8rem;
    }

    .current-title {
        font-size: 2rem;
    }

    .gallery-thumbs {
        width: 80%;
        left: 10%;
    }

    .swiper-pagination {
        left: 5%;
    }

    .swiper-pagination .current-number {
        font-size: 1.5rem;
    }

    .swiper-container.gallery-top {
    width: 100%;
    height: 100vh; /* يجعل الصورة تأخذ كامل ارتفاع الشاشة */
}

.swiper-slide {
    width: 100%;
    height: 100%;
}

.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* يجعل الصورة تغطي الشاشة بالكامل */
}

}

@media (max-width: 1280px) {
    .slide-title {
        font-size: 1.2rem;
        left: 2%;
    }

    .previous-title, .next-title {
        font-size: 1.5rem;
    }

    .current-title {
        font-size: 1.8rem;
    }

    .gallery-thumbs {
        width: 100%;
        left: 0;
    }

    .swiper-pagination {
        left: 3%;
    }

    .swiper-pagination .current-number {
        font-size: 1.2rem;
    }

    .social-media {
        right: 10px;
        top: 50%;
    }

    .swiper-container.gallery-top {
    width: 100%;
    height: 100vh; /* يجعل الصورة تأخذ كامل ارتفاع الشاشة */
}

.swiper-slide {
    width: 100%;
    height: 100%;
}

.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* يجعل الصورة تغطي الشاشة بالكامل */
}

}

@media (max-width: 1420px) {
    .header,
    .slider,
    .swiper-container.gallery-top {
        width: 100vw;
        height: 100vh;
    }

    .swiper-slide {
        width: 100vw;
        height: 100vh;
    }

    .swiper-slide img {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
    }
}

</style>
</head>

<body>
    <header class="header">
        <div class="slider">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <!-- Slides will be dynamically added here -->
                </div>
                <div class="swiper-pagination">
                    <span class="current-number">1</span> / <span class="total-number">9</span>
                </div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <!-- Thumbnails will be dynamically added here -->
                </div>
            </div>
        </div>

        <!-- السوشيال ميديا -->
    <ul class="social-media">
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
    </ul>


        <!-- الكلمة "WELCOME YOU" -->
        <div class="welcome-text">
            <b>Alserb...</b>
        </div>


    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
   <script>
    const sliderData = [
        {
            title: 'Video & Photography',
            image: "{{ asset('images/slider2/12345.png') }}",
            page: "{{ route('video-photography') }}"
        },
        {
            title: 'Motion Graphic',
            image: "{{ asset('images/slider2/213.png') }}",
            page: "{{ route('motion-graphic') }}"
        },
        {
            title: 'Web Solutions',
            image: "{{ asset('images/slider2/web1 (1).png') }}",
            page: "{{ route('web-solutions') }}"
        },
        {
            title: 'Mobile Apps',
            image: "{{ asset('images/slider2/mobil.png') }}",
            page: "{{ route('mobile-apps') }}"
        },
        {
            title: 'Graphic Design',
            image: "{{ asset('images/slider2/grap.png') }}",
            page: "{{ route('graphic-design') }}"
        },
        {
            title: 'Branding',
            image: "{{ asset('images/slider2/612.png') }}",
            page: "{{ route('branding') }}"
        },
        {
            title: 'Packaging',
            image: "{{ asset('images/slider2/712.png') }}",
            page: "{{ route('packaging') }}"
        },
        {
            title: 'Social Media & Digital Marketing',
            image: "{{ asset('images/slider2/8122.png') }}",
            page: "{{ route('social-media-marketing') }}"
        },
        {
            title: 'Search Engine Optimization',
            image: "{{ asset('images/slider2/91234.png') }}",
            page: "{{ route('seo') }}"
        }
    ];

    document.addEventListener('DOMContentLoaded', function () {
        const topWrapper = document.querySelector('.gallery-top .swiper-wrapper');
        const thumbsWrapper = document.querySelector('.gallery-thumbs .swiper-wrapper');

        sliderData.forEach((slide, index) => {
            topWrapper.innerHTML += `
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image: url('${slide.image}');">
                        <div class="slide-title previous-title">
                            <a href="${index > 0 ? sliderData[(index - 1 + sliderData.length) % sliderData.length].page : sliderData[sliderData.length - 1].page}">
                                ${index > 0 ? sliderData[(index - 1 + sliderData.length) % sliderData.length].title : sliderData[sliderData.length - 1].title}
                            </a>
                        </div>
                        <div class="slide-title current-title">
                            <a href="${slide.page}">
                                ${slide.title}
                            </a>
                            <span class="details-container"></span>
                        </div>
                        <div class="slide-title next-title">
                            <a href="${index < sliderData.length - 1 ? sliderData[(index + 1) % sliderData.length].page : sliderData[0].page}">
                                ${index < sliderData.length - 1 ? sliderData[(index + 1) % sliderData.length].title : sliderData[0].title}
                            </a>
                        </div>
                    </div>
                </div>
            `;

            if (index < 3) {
                thumbsWrapper.innerHTML += `
                    <div class="swiper-slide">
                        <a href="${slide.page}">${slide.title}</a>
                    </div>
                `;
            }
        });

        const galleryThumbs = new Swiper('.gallery-thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 3,
            loop: true
        });

        const galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            effect: 'fade',
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
                renderFraction: function (currentClass, totalClass) {
                    return `<span class="current-number ${currentClass}"></span> / <span class="total-number ${totalClass}">9</span>`;
                }
            },
            thumbs: {
                swiper: galleryThumbs
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            on: {
                slideChange: function () {
                    document.querySelector('.current-number').textContent = this.realIndex + 1;
                }
            }
        });
    });
</script>


</body>

</html>
