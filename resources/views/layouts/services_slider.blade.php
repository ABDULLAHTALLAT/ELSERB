

@section('content')
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
    <!-- Social Media Links -->
    <ul class="social-media">
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-behance"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fab fa-google"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    </ul>
    <!-- "WELCOME YOU" Text -->
    <div class="welcome-text">
        <b>WELCOME YOU</b>
    </div>
</header>
@endsection

@section('scripts')
<script>
    const sliderData = [{
        title: 'Video & Photography',
        image: 'images/slide/1.jpg',
        page: 'video-photography.html'
    }, {
        title: 'Motion Graphic',
        image: 'images/slide/2.jpg',
        page: 'motion-graphic.html'
    }, {
        title: 'Web Solutions',
        image: 'images/slide/3.jpg',
        page: 'serv/web-solutions.html'
    }, {
        title: 'Mobile Apps',
        image: 'images/slide/4.jpg',
        page: 'mobile-apps.html'
    }, {
        title: 'Graphic Design',
        image: 'images/slide/5.jpg',
        page: 'graphic-design.html'
    }, {
        title: 'Branding',
        image: 'images/slide/6.jpg',
        page: 'branding.html'
    }, {
        title: 'Packaging',
        image: 'images/slide/7.jpg',
        page: 'packaging.html'
    }, {
        title: 'Social Media & Digital Marketing',
        image: 'images/slide/8.jpg',
        page: 'social-media-marketing.html'
    }, {
        title: 'Search Engine Optimization',
        image: 'images/slide/9.jpg',
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
                                <span class="details-text">Details</span>
                                <button class="details-button">
                                    <i class="fas fa-plus"></i>
                                </button>
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

        // Handle Details button click
        const detailsButtons = document.querySelectorAll('.details-button');
        detailsButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.classList.add('active'); // Switch to "X" icon
            });

            button.addEventListener('mouseleave', function() {
                this.classList.remove('active'); // Switch back to "+" icon
            });

            button.addEventListener('click', function() {
                const slideTitle = this.closest('.slide-title').querySelector('.current-title').textContent.trim();
                const page = sliderData.find(slide => slide.title === slideTitle).page;
                window.location.href = `/${page}`; // Redirect to the respective page
            });
        });
    });
</script>
@endsection
