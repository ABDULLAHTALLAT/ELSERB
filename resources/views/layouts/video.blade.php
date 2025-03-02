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
            max-width: 1530px;
            height: auto;
            cursor: pointer;
            overflow: hidden;
            margin: auto;
        }

        .video-section img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            display: block;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .play-button::before {
            content: '\25B6';
            font-size: 40px;
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
            max-width: 800px;
            aspect-ratio: 16 / 9;
            border-radius: 10px;
            border: none;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 30px;
            cursor: pointer;
            color: white;
            z-index: 1001;
        }

        /* تحسين الاستجابة للشاشات الصغيرة */
        @media (max-width: 600px) {
            .play-button {
                width: 60px;
                height: 60px;
            }

            .play-button::before {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="video-section" onclick="openVideo()">
        <img src="{{ asset('images/video/123.webp') }}" alt="عرض الفيديو">
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
            var videoUrl = "https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1";

            iframe.src = videoUrl;
            popup.style.display = 'flex';
        }

        function closeVideo() {
            var popup = document.getElementById('popup-video');
            var iframe = document.getElementById('youtube-video');

            popup.style.display = 'none';
            iframe.src = "";
        }

        document.getElementById('popup-video').addEventListener('click', function (event) {
            var iframe = document.getElementById('youtube-video');
            if (!iframe.contains(event.target) && !event.target.classList.contains('close-btn')) {
                closeVideo();
            }
        });

        window.addEventListener('scroll', function () {
            closeVideo();
        });
    </script>
</body>

</html>
