<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts: Nippor -->
    <link href="https://fonts.googleapis.com/css2?family=Nippor:wght@400;700&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
             font-family: 'Nippor', sans-serif;
            gap: 90px;

            padding:80px 0% ;
        }


        .form-section {
            flex: 1;
            max-width: 600px;
            margin-top: 60px; /* Ensure form starts below the navbar */
        }

        h1,
        h2 {
            color: #c3814c;
            font-weight: bold;
            font-family: 'Nippor', sans-serif;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 10px;
            text-align: left;
            font-family: 'Nippor', sans-serif;
        }

        h2 {
            font-size:38px;
            margin-bottom: 30px;
            text-align: left;
            font-family: 'Nippor', sans-serif;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        label {
            display: block;
            color: #c3814c;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: normal !important;

        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            font-family: 'Nippor', sans-serif;
            width: 110%;
            padding: 20px;
            border: 2px solid #6e492b;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;

        }

        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="tel"]:hover,
        textarea:hover {
            border-color: #c3814c;
            transform: scale(1.03);
            border-radius: 10px;
        }

        .checkbox-wrapper {
            margin-bottom: 10px;
        }

        .custom-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #6e492b;
            padding-right: 20px;
        }

        .custom-checkbox:hover {
            color: #c3814c;
        }

      /* إخفاء الـ checkbox الافتراضي */
.custom-checkbox input {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 20px;
    height: 20px;
    border: 2px solid #6e492b; /* لون الإطار */
    border-radius: 5px;
    position: relative;
    cursor: pointer;
    margin-left: 10px

}

/* تغيير اللون عند التحديد */
.custom-checkbox input:checked {
    background-color: #c3814c; /* اللون الجديد عند التحديد */
    border-color: #c3814c;
}

/* إضافة علامة ✓ عند التحديد */
.custom-checkbox input:checked::after {
    content: "✔";
    font-size: 14px;
    color: white;
    position: absolute;
    left: 4px;
    top: -1px;
    margin-right: 10px;
}

/* تغيير اللون عند تمرير الماوس */
.custom-checkbox:hover input {
    border-color: #c3814c;
}


        textarea {
            height: 150px;
            resize: vertical;
            margin-bottom: 20px;
        }

        .submit-btn {
            width: 110%;
            background-color: #000;
            color: #c3814c;
            padding: 12px 30px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.2s, color 0.3s;
        }

        .submit-btn:hover {
            background-color: #c3814c;
            color: #fff;
        }

        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;

            margin-top:100px;
            position: relative;
        }

        .circle-wrapper {
            position: absolute;
            width: 400px;
            height: 400px;
            border: 10px solid #c3814c;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-left: 100px;
            top: 150px;
        }

        .circle-image {
            width: 90%;
            height: 90%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
            .image-section {
                order: -1;
            }
            .circle-wrapper {
                width: 200px;
                height: 200px;
            }
        }

        .contact-info {
            background-color: #f8f9fa;
            width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            padding: 60px;
        }

        .contact-wrapper {
            display: flex;
            justify-content: center;
            gap: 200px;
            align-items: center;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
            transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .contact-item img {
            width: 40px;
        }

        .contact-item p {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
        }

        .contact-item small {
            color: rgb(0, 0, 0);
        }

        .contact-item:hover {
            transform: translateY(-10px);
            background-color:#c3814c;
        }




    </style>
</head>

<body>
    <div class="container">
        <div class="form-section">
            <h1>Ready to get started?</h1>
            <h1>Request For a Quotation</h1>
            <br>
            <br>

            {{-- quotations.store --}}
            <form action="{{ route('quotations.store') }}" method="POST" id="quotationForm">
                @csrf
                <div class="form-grid">
                    <div class="form-field">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>


                    <div class="form-field">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>


                    <div class="form-field">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company" placeholder="Enter your company name" required>
                    </div>
                </div>

                <div class="services-section">
                    <label>Pick Services</label>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="video"> Video & Photography
                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="motion"> Motion Graphic
                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="web"> Web Solutions
                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="Packaging"> Packaging

                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="web">  Branding
                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="Branding">  Graphic Design

                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="Mobile">  Mobile Apps

                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="Social Media ">  Social Media & Digital Marketing

                        </label>
                    </div>
                    <div class="checkbox-wrapper">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="services" value="seo"> Search Engine Optimization
                        </label>
                    </div>
                </div>

                <label for="message">YOUR MESSAGE</label>
                <textarea id="message" name="message" placeholder="Write your message here" required></textarea>

                <button type="submit" class="submit-btn">SUBMIT <i class="fas fa-user"></i>  </button>
            </form>
        </div>

        <div class="image-section">
            <div class="circle-wrapper">
                <img src="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" alt="Decorative Circle" class="circle-image">
            </div>
        </div>
    </div>

    <section class="contact-info">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-item">
                    <img src="{{ asset('images/conect/q-contatct.svg') }}" alt="Phone Icon" width="80" height="80">
                    <div>
                        <p>+49 1577 1290379</p>
                        <small>Sat-Thu 9am-5pm</small>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('images/conect/q-email.svg') }}" alt="Email Icon" width="80" height="80">
                    <div>
                        <p>info@elserb.com</p>
                        <small>online support</small>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('images/conect/q-support.svg') }}" alt="Support Icon" width="80" height="80">
                    <div>
                        <p>24/7 Support</p>
                        <small>Honor to serve you</small>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
