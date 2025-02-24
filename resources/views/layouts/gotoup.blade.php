<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>زر الرجوع للأعلى</title>
    <style>
        /* تنسيق الزر */
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 9999;
            border: 2px solid #dfa571;
            background: transparent;
            color: #b77847;
            font-size: 20px;
            border-radius: 8px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease-in-out;
        }

        /* تأثير Hover */
        #scrollToTopBtn:hover {
            background: #b77847;
            color: white;
        }

        /* عند ظهور الزر */
        #scrollToTopBtn.show {
            opacity: 1;
            pointer-events: auto;
        }

        /* أيقونة السهم */
        #scrollToTopBtn::before {
            content: "▲";
        }

        /* نص "السرب" */
        #scrollText {
            position: fixed;
            bottom: 80px;
            left: 20px;
            font-size: 14px;
            color: #c88354;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        /* عند ظهور النص */
        #scrollText.show {
            opacity: 1;
        }
    </style>
</head>

<body>

    <div id="scrollText">Alserb</div>
    <div id="scrollToTopBtn"></div>

    <script>
        let scrollToTopBtn = document.getElementById("scrollToTopBtn");
        let scrollText = document.getElementById("scrollText");

        let lastScrollY = window.scrollY;

        window.addEventListener("scroll", function () {
            let currentScrollY = window.scrollY;

            if (currentScrollY > 500) {
                scrollToTopBtn.classList.add("show");

                if (currentScrollY < lastScrollY) {
                    // يظهر النص عند الصعود فقط
                    scrollText.classList.add("show");
                } else {
                    // يختفي النص عند النزول
                    scrollText.classList.remove("show");
                }
            } else {
                scrollToTopBtn.classList.remove("show");
                scrollText.classList.remove("show");
            }

            lastScrollY = currentScrollY;
        });

        // عند النقر على الزر، ارجع لأعلى الصفحة بسرعة طبيعية
        scrollToTopBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" }); // سرعة طبيعية وتأثير سلس
        });
    </script>

</body>

</html>