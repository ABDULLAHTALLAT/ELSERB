<style>
    /* إعدادات أساسية */
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
        height: 85vh;
        background: url({{ asset('images/clients/clints.jpg') }}) center/cover no-repeat;
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

    @keyframes moveBlur {
    0% {
        transform: translateX(0);
        filter: blur(2px);
    }
    25% {
        transform: translateX(-2px);
        filter: blur(1.5px);
    }
    50% {
        transform: translateX(2px);
        filter: blur(1px);
    }
    75% {
        transform: translateX(-2px);
        filter: blur(1.5px);
    }
    100% {
        transform: translateX(0);
        filter: blur(2px);
    }
}

.animated-text {
    font-size:9em;
    font-weight: bold;
    color: #f5f5f5;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: moveBlur 1s infinite ease-in-out;
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
        background: #556B2F;
    }

    .section {
        padding: 50px 20px;
    }

    .clients-section {
        background-color: #000;
        color: white;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out;
    }

    .clients-section.active {
        opacity: 1;
        transform: translateY(0);
    }

    .container {
        width: 70%;
        margin: auto;
        text-align: center;
        padding: 50px 0;
    }

    .container h2 {
        color: #c3814c;
        font-size: 100px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 10px;
        text-align: left;
        opacity: 0;
        transform: translateY(-50px);
        transition: all .5s ease-in-out;
    }

    .clients-section.active h2 {
        opacity: 1;
        font-size: 50px;
        transform: translateY(0);

    }

    .clients {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        text-align: left;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out 0.3s;
    }

    .clients-section.active .clients {
        opacity: 1;
        font-size: 30px;
        transform: translateY(0);
    }

    .partners {
        background-color: white;
        color: black;
        padding: 50px;
        text-align: center;
        margin-top: 50px;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out 0.5s;
    }

    .partners.active {
        opacity: 1;
        transform: translateY(0);
    }

    .partners h2 {
        color: #c3814c;
        font-size: 40px;
        opacity: 0;
        transform: translateY(-50px);
        transition: all 1s ease-in-out;
    }

    .partners.active h2 {
        opacity: 1;
        transform: translateY(0);
    }

    .partners p,
    .logos {
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-in-out 0.3s;
    }

    .partners.active p,
    .partners.active .logos {
        opacity: 1;
        transform: translateY(0);
    }

    .logos {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        width: 100%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .logos img {
        width: 90px;
        filter: grayscale(100%) opacity(0.6);
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .logos img:hover {
        filter: grayscale(0%) opacity(1);
        transform: scale(1.1);
    }

    /* إضافة مسافة فارغة تحت السيكشن الثاني */
    .partners::after {
        content: "";
        display: block;
        height: 80px;
    }
</style>

<body>
    <section class="slider">
        <div class="overlay"></div>
        <h1 class="animated-text">Our Clients</h1>
        <div class="welcome-text">Alserb...</div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </section>

    <div class="container clients-section">
        <h2>Our Clients</h2>
        <div class="clients">
            <div class="left">
                <p>Our customers are success partners that we are proud to deal with</p>
                <p>More than 100 customers around the world</p>
            </div>
            <div class="right">
                <p>We constantly strive to obtain high satisfaction rates from our customers.</p>
                <p>Our clients represent a distinguished selection of worldwide brands.</p>
            </div>
        </div>
    </div>

    <div class="partners">
        <h2>Our Partners of Success</h2>
        <p>Over 100+ Clients Over The World</p>
        <div class="logos">
            <img src="images/clients/1.png" alt="Partner 1">
            <img src="images/clients/2.png" alt="Partner 2">
            <img src="images/clients/3.png" alt="Partner 3">
            <img src="images/clients/4.png" alt="Partner 4">
            <img src="images/clients/5.png" alt="Partner 5">
            <img src="images/clients/6.png" alt="Partner 1">
            <img src="images/clients/7.png" alt="Partner 2">
            <img src="images/clients/8.png" alt="Partner 3">
            <img src="images/clients/9.png" alt="Partner 4">
            <img src="images/clients/10.png" alt="Partner 5">
            <img src="images/clients/11.png" alt="Partner 1">
            <img src="images/clients/12.png" alt="Partner 2">
            <img src="images/clients/13.png" alt="Partner 3">
            <img src="images/clients/14.png" alt="Partner 4">
            <img src="images/clients/15.png" alt="Partner 5">
            <img src="images/clients/1.png" alt="Partner 1">
            <img src="images/clients/2.png" alt="Partner 2">
            <img src="images/clients/3.png" alt="Partner 3">
            <img src="images/clients/4.png" alt="Partner 4">
            <img src="images/clients/5.png" alt="Partner 5">
        </div>
    </div>

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
</body>
