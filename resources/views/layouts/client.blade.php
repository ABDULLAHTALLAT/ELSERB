
    <style>
        section {
            margin: 0; /* إزالة المسافات حول القسم */

            padding: 0; /* إزالة الحشو الداخلي */
        }

        .partners {
            background-color: #ffffff;
            color: black;
            padding-left: 25px;
            padding-bottom: 50px;
            padding-right: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            opacity: 0; /* يتم إخفاء المحتوى في البداية */
            transform: translateY(50px); /* نقل المحتوى للأسفل */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
            margin-bottom: 0; /* إزالة الفاصل أسفل هذا القسم */
        }

        .partners h2 {
            color: #c3814c;
            font-size: 40px;
            opacity: 0; /* إخفاء النص في البداية */
            transform: translateY(-50px); /* نقل النص للأعلى */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
        }

        .partners p {
            color: #000000;
            font-size: 20px;
            font-weight: bold;
            opacity: 0; /* إخفاء النص في البداية */
            transform: translateY(-50px); /* نقل النص للأعلى */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
        }

        .logos {
            padding-left: 60px;
            padding-top: 40px;
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
            opacity: 0; /* إخفاء الشعارات في البداية */
            transform: translateY(50px); /* نقل الشعارات للأسفل */
            transition: opacity 1s ease-out, transform 1s ease-out; /* التأثيرات */
        }

        .logos img {
            width: 90px;
            height: auto;
            filter: grayscale(100%) opacity(0.6);
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .logos img:hover {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.1);
        }

        /* تأكد من إزالة أي فواصل بين الأقسام */
        section + section {
            margin-top: 0; /* إزالة المسافة بين الأقسام */
        }
    </style>
</head>
<body>

    <section>
        <div class="partners" id="partners">
            <h2>Our Partners of Success</h2>
            <p></p>
            <div class="logos">
                <img src="{{ asset('images/clients/1.png') }}" alt="Partner 1">
                <img src="{{ asset('images/clients/2.png') }}" alt="Partner 2">
                <img src="{{ asset('images/clients/3.png') }}" alt="Partner 3">
                <img src="{{ asset('images/clients/4.png') }}" alt="Partner 4">
                <img src="{{ asset('images/clients/5.png') }}" alt=" Partner 5 ">
                <img src="{{ asset('images/clients/6.png') }}" alt="Partner 6">
                <img src="{{ asset('images/clients/7.png') }}" alt="Partner 7">
                <img src="{{ asset('images/clients/8.png') }}" alt="Partner 8">
                <img src="{{ asset('images/clients/9.png') }}" alt="Partner 9">
                <img src="{{ asset('images/clients/10.png') }}" alt=" Partner 10 ">
                <img src="{{ asset('images/clients/11.png') }}" alt="Partner 11">
                <img src="{{ asset('images/clients/12.png') }}" alt="Partner 12">
                <img src="{{ asset('images/clients/13.png') }}" alt="Partner 13">
                <img src="{{ asset('images/clients/14.png') }}" alt="Partner 14">
                <img src="{{ asset('images/clients/15.png') }}" alt=" Partner 15 ">
            </div>
        </div>
    </section>


    <script>
        // وظيفة لمراقبة ظهور العنصر
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const partners = entry.target;
                    partners.style.opacity = '1';
                    partners.style.transform = 'translateY(0)';

                    // تأثير النص
                    const h2 = partners.querySelector('h2');
                    const p = partners.querySelector('p');
                    const logos = partners.querySelector('.logos');

                    h2.style.opacity = '1';
                    h2.style.transform = 'translateY(0)';
                    p.style.opacity = '1';
                    p.style.transform = 'translateY(0)';
                    logos.style.opacity = '1';
                    logos.style.transform = 'translateY(0)';

                    observer.unobserve(partners); // إيقاف المراقبة بعد ظهور العنصر
                }
            });
        }, { threshold: 0.5 }); // عند ظهور 50% من العنصر

        observer.observe(document.getElementById('partners'));
    </script>
</body>

