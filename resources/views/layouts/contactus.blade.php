
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
        background: url({{ asset('images/About/contact.jpg') }}) center/cover no-repeat;
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
    font-size:7em;
    font-weight: bold;
    color: #f5f5f5;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: moveBlur 2s infinite ease-in-out;
}


    .welcome-text {
        position: absolute;
        right: 15px;
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
    right: 40px;
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
    transform: translateY(-5px) scale(1.6); /* تحريك الأيقونة للأمام قليلاً وتكبيرها */
    border-color: #754d2e; /* تغيير لون الحواف عند الـ hover */
}




        .contact-section {
            max-width: 1300px;
            margin: 50px auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .contact-header {
            margin-bottom: 40px;
        }

        .contact-header h1 {
            color: #c3814c;
            font-size: 3em;
            margin: 0;
        }

        .contact-header p {
            color: #c3814c;
            font-size: 3em;
            margin: 5px 0;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .info-item h2 {
            color: #c3814c;
            margin-bottom: 10px;
        }

        .info-item p {
            color: #333;
            margin: 0;
        }

        .contact-form {
            display: grid;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .form-group label {
            color: #c3814c;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:hover,
        .form-group textarea:hover {
            border-color: #c3814c;
            box-shadow: 0 5px 20px #873e23;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #c3814c;
            transform: translateY(-2px) translateZ(0);
            box-shadow: 0 4px 12px #c88354;
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #873e23;
            color: #000000;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            width: 10%;
            transition: all 0.3s ease;

        }

        .submit-btn:hover {
            background-color: #ea9755;
            color: #e2e2e2;
            transform: translateY(-2px);
            border-radius: 10px;
            box-shadow: 0 8px 30px #ea9755;
        }

        @media (max-width: 768px) {
            .contact-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>


    <section class="slider">
        <div class="overlay"></div>
        <h1 class="animated-text">
             Talk to us <i class="fa fa-phone"></i>
        </h1>
        <div class="welcome-text">WELCOMYOU</div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-header">
            <h1>We'd love to hear from you.</h1>
            <h1>Let's talk about it!</h1>
        </div>

        <div class="contact-info">
            <div class="info-item">
                <h2>Phone</h2>
                <p>+201200829644</p>
            </div>
            <div class="info-item">
                <h2>Email</h2>
                <p>info@Elserb.com</p>
            </div>
            <div class="info-item">
                <h2>Address</h2>
                <p>6 Saudi Buildings, 2nd Floor, In Front of Air Defense House, Nasr City, Cairo</p>

            </div>
        </div>

        <form class="contact-form" id="contactForm">
            <div class="form-group">
                <label for="full-name"><h2>Full Name</h2></label>
                <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="phone-number"><h2>Phone Number</h2></label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="email"><h2>Email</h2>
                </label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="subject"><h2>Subject</h2></label>
                <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>
            </div>
            <div class="form-group">
                <label for="message"><h2>Message</h2></label>
                <textarea id="message" name="message" placeholder="Write your message" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('Form submitted');
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
</body>


