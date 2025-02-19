<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elserb</title>
    <link rel="icon" href="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css2?family=Neighbor&display=swap" rel="stylesheet">    <style>
        /* styles.css */

        .services-section {
            padding: 6rem 2rem;

            background-color: #000000;
            position: relative;
        }

        .section-title {
            font-family: 'Neighbor';
            color: #c3814c;
            font-size: 5rem;
            text-align: center;
            margin-bottom: 3rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .services-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            width: 350px;

            height: 450px;
            background-color: #000000;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            text-decoration: none;
            transform-style: preserve-3d;
            transform: perspective(1000px);
            transition: transform 0.1s ease;
            border: 2px solid transparent;
        }

        .service-card:hover {
            border-color: #c3814c;
        }

        .service-content {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .service-icon {
            width: 170px;
            /* تكبير الصورة قليلاً */
            height: 170px;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .service-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* يضمن تغطية الصورة للمساحة بالكامل مع الحفاظ على النسبة */
            transition: transform 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
            /* تكبير الصورة بشكل بسيط */
            z-index: 2;
            background-color: #1a181873;

        }

        .service-card h3 {
            color: #c3814c;
            font-size: 1.4rem;
            text-align: center;
            margin-top: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;

        }

        @media (max-width: 768px) {
            .service-card {
                width: 280px;
                height: 350px;
            }
            .service-icon {
                width: 130px;
                height: 130px;
            }
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <section class="services-section">
        <h2 class="section-title">OUR SERVICES</h2>
        <div class="services-container">
          <a href="{{ route('video-photography') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/vedio.png') }}" alt="Video & Photography">
                    </div>
                    <h3>Video & Photography</h3>
                </div>
            </a>

            <a href="{{ route('motion-graphic') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/vedio.png') }}" alt="Motion Graphic">
                    </div>
                    <h3>Motion Graphic</h3>
                </div>
            </a>

            <a href="{{ route('web-solutions') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/web.png') }}"  alt="Web Solutions">
                    </div>
                    <h3>Web Solutions</h3>
                </div>
            </a>

            <a href="{{ route('mobile-apps') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/mas.png') }}" alt="Motion Graphic">
                    </div>
                    <h3>Mobile Apps</h3>
                </div>
            </a>

            <a href="{{ route('graphic-design') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/gs.png') }}" alt="Web Solutions">
                    </div>
                    <h3>Graphic Design</h3>
                </div>
            </a>


            <a href="{{ route('branding') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/brand.png ') }}" alt="Motion Graphic">
                    </div>
                    <h3>Branding</h3>
                </div>
            </a>

            <a href="{{ route('packaging') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/packe.png') }}" alt="Web Solutions">
                    </div>
                    <h3>Packaging</h3>
                </div>
            </a>


        <a href="{{ route('social-media-marketing') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/digital.png') }}" alt="Web Solutions">
                    </div>
                    <h3>Social Media &</h3>
                    <h3> Digital Marketing</h3>
                </div>
            </a>


            <a href="{{ route('seo') }}" class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <img src="{{ asset('images/ourserves/seo.png') }}"alt="Web Solutions">
                    </div>
                    <h3>Search Engine Optimization</h3>
                </div>
            </a>
        </div>
    </section>




    <script src="script.js"></script>
    <script>
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mousemove', handleMouseMove);
            card.addEventListener('mouseleave', handleMouseLeave);
        });

        function handleMouseMove(e) {
            const card = e.currentTarget;
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Calculate rotation (maximum 10 degrees)
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * 10;
            const rotateY = ((x - centerX) / centerX) * 10;

            // Apply the transformation
            card.style.transform = `
                perspective(1000px)
                rotateX(${-rotateX}deg)
                rotateY(${rotateY}deg)
                scale(1.05)
            `;
        }

        function handleMouseLeave(e) {
            const card = e.currentTarget;
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
        }
    </script>



</body>

</html>
