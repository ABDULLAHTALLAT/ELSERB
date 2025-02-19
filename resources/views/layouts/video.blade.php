<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشغل الفيديو</title>
    <style>
        .video-section {
            position: relative;
            width: 100%;
            height: 90vh;
            cursor: pointer;
        }

        .video-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .play-button::before {
            content: '\25B6';
            font-size: 50px;
            color: white;
        }

        .popup-video {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .popup-video iframe {
            width: 90%;
            height: 80%;
            border-radius: 10px;
            border: none;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            cursor: pointer;
            color: white;
            z-index: 1001;
        }
    </style>
</head>

<body>
    <div class="video-section" onclick="openVideo()">
        <img src="{{ asset('images/video/elsbvied.webp') }}" alt="عرض الفيديو">
        <div class="play-button"></div>
    </div>

    <div class="popup-video" id="popup-video">
        <span class="close-btn" onclick="closeVideo()">&times;</span>
        <iframe id="youtube-video" src="" allowfullscreen></iframe>
    </div>

    <script>
        function openVideo() {
            var popup = document.getElementById('popup-video');
            var iframe = document.getElementById('youtube-video');

            // تحديد رابط الفيديو (ضع رابط الفيديو من اليوتيوب هنا)
            var videoUrl = "https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1";

            iframe.src = videoUrl;
            popup.style.display = 'flex';
        }

        function closeVideo() {
            var popup = document.getElementById('popup-video');
            var iframe = document.getElementById('youtube-video');

            popup.style.display = 'none';

            // تعطيل الفيديو عن طريق إزالة الـ src
            iframe.src = "";
        }

        // إغلاق الفيديو عند النقر خارج المشغل
        document.getElementById('popup-video').addEventListener('click', function (event) {
            var iframe = document.getElementById('youtube-video');
            if (!iframe.contains(event.target) && !event.target.classList.contains('close-btn')) {
                closeVideo();
            }
        });

        // إغلاق الفيديو عند التمرير لأسفل
        window.addEventListener('scroll', function () {
            closeVideo();
        });
    </script>
</body>

</html>
