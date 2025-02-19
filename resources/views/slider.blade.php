
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.css">
<style>
    .header {
        position: relative;
        width: 100%;
        height: 110vh;
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
        position: relative;
    }

    .slide-title {
        font-size: 2rem;
        font-weight: bold;
        position: absolute;
        z-index: 5;
        color: white;
        transition: all 0.5s ease;
        left: 5%;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .previous-title {
        bottom: 60%;
        opacity: 0.8;
        background: linear-gradient(45deg , #f2c798, #ff8400, #c88354, #44321f);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
        font-size: 4rem;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.393);
        margin-bottom: 10px;
    }

    .current-title {
        top: 40%;
        opacity: 1;
        font-size: 6rem;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0);
        margin-top: 10px;
    }

    .next-title {
        top: 60%;
        opacity: 0.8;
         background: linear-gradient(45deg, #ae865a, #c88354, #44321f);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
        font-size: 4rem;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0);
        margin-top: 10px;
    }

    .gallery-thumbs {
        position: absolute;
        left: 10%;
        bottom: 10%;
        height: auto;
        width: 40%;
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
        font-size: 2rem;
        text-align: left;
        color: #fff
    }

    .swiper-pagination .current-number {
        font-size: 6rem;
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
        right: 25px;
        transform: translateY(-50%);
        color: #fff;
        font-size: 1rem;
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
            <li><a href="#"><i class="fab fa-behance"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-google"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>

        <!-- الكلمة "WELCOME YOU" -->
        <div class="welcome-text">
            <b>WELCOME YOU</b>
        </div>


    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
    <script>
        const sliderData = [{
            title: 'Video & Photography',
            image: '{{ asset('images/slider/1.jpg') }}',
            page: 'video-photography.html'
        }, {
            title: 'Motion Graphic',
            image: '{{ asset('images/slider/2.jpg') }}',
            page: 'motion-graphic.html'
        }, {
            title: 'Web Solutions',
            image: '{{ asset('images/slider/3.jpg') }}',
            page: 'serv/web-solutions.html'
        }, {
            title: 'Mobile Apps',
            image: '{{ asset('images/slider/4.jpg') }}',
            page: 'mobile-apps.html'
        }, {
            title: 'Graphic Design',
            image: '{{ asset('images/slider/5.jpg') }}',
            page: 'graphic-design.html'
        }, {
            title: 'Branding',
            image: '{{ asset('images/slider/6.jpg') }}',
            page: 'branding.html'
        }, {
            title: 'Packaging',
            image: '{{ asset('images/slider/7.jpg') }}',
            page: 'packaging.html'
        }, {
            title: 'Social Media & Digital Marketing',
            image: '{{ asset('images/slider/8.jpg') }}',
            page: 'social-media-marketing.html'
        }, {
            title: 'Search Engine Optimization',
            image: '{{ asset('images/slider/9.jpg') }}',
            page: 'seo.html'
        }];

        document.addEventListener('DOMContentLoaded', function() {
            const topWrapper = document.querySelector('.gallery-top .swiper-wrapper');
            const thumbsWrapper = document.querySelector('.gallery-thumbs .swiper-wrapper');

            sliderData.forEach((slide, index) => {
                topWrapper.innerHTML += `
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image: url('${slide.image}');">
                        <div class="slide-title previous-title">${index > 0 ? sliderData[(index - 1 + sliderData.length) % sliderData.length].title : sliderData[sliderData.length - 1].title}</div>
                        <div class="slide-title current-title">${slide.title}
                            <span class="details-container">


                            </span>
                        </div>
                        <div class="slide-title next-title">${index < sliderData.length - 1 ? sliderData[(index + 1) % sliderData.length].title : sliderData[0].title}</div>
                    </div>
                </div>
            `;

                if (index < 3) {
                    thumbsWrapper.innerHTML += `
                    <div class="swiper-slide">${slide.title}</div>
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
                    renderFraction: function(currentClass, totalClass) {
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
                    slideChange: function() {
                        document.querySelector('.current-number').textContent = this.realIndex + 1;
                    }
                }
            });



        });
    </script>
</body>

</html>
