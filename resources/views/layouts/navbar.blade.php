<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elserb - Your trusted partner for innovative solutions.">
    <title>Elserb</title>
    <link rel="icon" href="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nippor:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        :root {
            --primary-color: #c3814c;
            --text-color: #ffffff;
            --background-color: #000000;
            --menu-timing: 0.5s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }


.nav-section {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 90px;
    background-color: #00000000; /* شفاف في البداية */
    transition: background-color 0.1s ease-in-out;
    padding: 15px 20px;
    z-index: 1000;
}

/* ✅ عندما يتم التمرير يصبح النيفبار أسود */
.nav-section.scrolled {
    background-color: rgb(0, 0, 0); /* لون أسود */
}

/* ✅ عندما يكون داخل القائمة الجانبية يبقى شفاف */
.nav-section.transparent {
    background-color: transparent !important;
}

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.1rem .5rem;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: .5rem;
            cursor: pointer;
            margin-left: -130px;
        }

        .brand img {
            width: 80px;
            height: auto;
        }

      .logo-text {
    font-size: 1.8rem;

    color: var(--text-color);
    transition: all 0.3s ease;
    margin-left: -10px;
    margin-bottom: -10px;

}

.logo-text:hover {
    background: linear-gradient(45deg, #873e23, #a47c4f,#c3814c); /* تأثير لونين */
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;

}


        .menu-toggle {
            display: flex;
            align-items: center;
            gap: 1rem;
            cursor: pointer;
        }

        .menu-text {
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #ffffff;
        }

        .menu-icon {
            margin-right: -155px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap:2px;
            transition: all 0.3s ease;
            position: relative;
        }

        .menu-icon:hover {
            border-color: var(--primary-color);
            background-color: #c3814c;
        }

        .menu-icon span {
            width: 16px;
            height: 2px;
            background-color: var(--text-color);
            position: absolute;
        }

        .menu-icon span:first-child {
            transform: translateY(-4px);
        }

        .menu-icon span:last-child {
            transform: translateY(4px);
        }

        .menu-icon.active span:first-child {
            transform: rotate(45deg);
        }

        .menu-icon.active span:last-child {
            transform: rotate(-45deg);
        }

        .fullscreen-menu {
            position: fixed;
            inset: 0;
            background-color: var(--background-color);
            display: flex;
            align-items: center;
            justify-content: center;
            visibility: hidden;
            opacity: 0;
            transition: all var(--menu-timing) ease;
            z-index: 90;
        }

        .fullscreen-menu.active {
            visibility: visible;
            opacity: 1;
        }

        .menu-items {
            display: flex;
            flex-direction: column;
            font-family: 'Cairo', sans-serif;
            gap: .4rem;
            text-align: center;

        }

       .menu-item {
    font-size: 3rem;
    font-weight: bold; /* جعل الخط عريضًا */
    color: var(--text-color);
    text-decoration: none;
    transition: color 0.3s ease, transform 0.3s ease;
    transform: translateY(10px);
    opacity: 0;
}


        .menu-item:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .fullscreen-menu.active .menu-item {
            opacity: 1;
            transform: translateY(0);
        }

        .quote-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--primary-color);
            color: var(--background-color);
            padding: 1rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            z-index: 80;
        }

        .quote-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(157, 198, 68, 0.3);
        }

        .menu-overlay {
    position: fixed;
    inset: 0;
    background-color: var(--primary-color);
    transform: translateX(100%);  /* يبدأ من اليمين */
    transition: transform 2s ease;  /* انتقال من اليمين إلى الشمال */
    z-index: 85;
}

.menu-overlay.active {
    transform: translateX(0);  /* يتحرك إلى مكانه الطبيعي */
}


        .menu-item-active {
            transform: translateZ(30px);
            z-index: 10;
        }


        .language-switcher {
    position: relative;
    display: flex;
    align-items: left;
}

.language-btn {
    background: none;
    border: none;
    font-size: 1rem;
    cursor: pointer;
    color: #ffffff;
}

.language-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background: rgba(0, 0, 0, 0.9);
    list-style: none;
    padding: 5px 10px;
    border-radius: 5px;
    display: none;
}

.language-menu li {
    padding: 5px;
}

.language-menu a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
}

.language-menu a img {
    margin-right: 8px;
}

@media (max-width: 1420px) { /* التغيير للأجهزة اللوحية والمحمولة */
    .nav-section {
        background-color: #0000009e !important; /* تغيير لون الخلفية */
        width: 100%;
    }

    .menu-text {
        font-size: 1.2rem;
            display: none;
 /* تقليل حجم النص */
    }

    .menu-icon {
        width: 35px;
        height: 35px;
        margin-right: 20px;
    }

    .menu-item {
        font-size: 2rem; /* تصغير حجم النص داخل القائمة */
    }


     .brand img {

        margin-left: 120px;
    }
.logo-text {

font-size: 1rem;

}

}



    </style>
</head>

<body>

    <section class="nav-section">
        <div class="nav-content">


            <a href="{{ route('home') }}" style="text-decoration: none;">


                <div class="brand">
                    <img src="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" alt="Elserb Logo" class="h-11">
                    <span class="logo-text">Alserb</span>


                </div>
            </a>


            <div class="menu-toggle">
                <span class="menu-text">Menu</span>
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </section>

    <div class="menu-overlay"></div>

    <div class="fullscreen-menu">
        <div class="menu-items">
            <a href="{{ route('home') }}" class="menu-item">Home</a>
            <a href="{{ route('ourservice') }}" class="menu-item">Our Services</a>
            <a href="{{ route('ourclients') }}" class="menu-item">Our Clients</a>
            <a href="{{ route('ourwork') }}" class="menu-item">Portfolio</a>
            <a href="{{ route('quotations') }}" class="menu-item">Get a Quotation</a>
            <a href="{{ route('aboutus') }}" class="menu-item">About Us</a>
            <a href="{{ route('contact') }}" class="menu-item">Contact</a>
            <a href="{{ route('blog') }}" class="menu-item">Blog</a>


        </div>
    </div>


    <main>
        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('.menu-toggle');
            const menuIcon = document.querySelector('.menu-icon');
            const fullscreenMenu = document.querySelector('.fullscreen-menu');
            const menuOverlay = document.querySelector('.menu-overlay');
            const navSection = document.querySelector('.nav-section');
            const menuItems = document.querySelectorAll('.menu-item');
          const audio = new Audio('https://www.fesliyanstudios.com/play-mp3/387');


            let isMenuOpen = false;

            const toggleMenu = () => {
                isMenuOpen = !isMenuOpen;

                menuIcon.classList.toggle('active');
                menuOverlay.classList.toggle('active');

                setTimeout(() => {
                    fullscreenMenu.classList.toggle('active');
                }, isMenuOpen ? 500 : 0);

                if (isMenuOpen) {
                    navSection.classList.add('transparent'); // جعل النيفبار شفافًا عند فتح القائمة
                    gsap.to(menuItems, {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        stagger: 0.1,
                        delay: 0.5,
                        ease: "power4.out"
                    });
                } else {
                    navSection.classList.remove('transparent'); // إعادة النيفبار إلى حالته الأصلية
                    gsap.to(menuItems, {
                        opacity: 0,
                        y: 20,
                        duration: 0.3,
                        ease: "power1.in"
                    });
                }
            };

            menuToggle.addEventListener('click', toggleMenu);

            menuItems.forEach(item => {
                item.addEventListener('mouseover', () => {
                    gsap.to(item, {
                        scale: 1.1,
                        zIndex: 10,
                        duration: 0.3,
                        ease: "back.out(1.7)"
                    });
                    audio.play();
                });

                item.addEventListener('mouseout', () => {
                    gsap.to(item, {
                        scale: 1,
                        zIndex: 1,
                        duration: 0.3,
                        ease: "back.in(1.7)"
                    });
                });
            });

            document.querySelector('.brand').addEventListener('click', () => {
                location.reload();
            });

            // ✅ كود جعل النيفبار شفافًا فوق السليدر ويصبح أسود عند التمرير
            const navbar = document.querySelector('.nav-section');
            const slider = document.querySelector('.slider');

            const checkNavbarState = () => {
                if (window.scrollY > slider.clientHeight - 50 && !isMenuOpen) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            };

            window.addEventListener('scroll', checkNavbarState);
            checkNavbarState(); // استدعاء أولي عند تحميل الصفحة
        });
        </script>


<script>
    function changeLanguage(locale) {
        fetch(`/lang/${locale}`)
            .then(() => location.reload());
    }
</script>


</body>

</html>
