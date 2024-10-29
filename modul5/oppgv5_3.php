<!DOCTYPE html>
<html>
<head>
    <title>Video om programmerinskikk</title>
    <meta charset="UTF-8">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .video-container {
            position: relative;
            width: 80%;
            max-width: 800px;
        }
        .video-container iframe {
            width: 100%;
            height: 450px;
        }
    </style>
</head>
<body>
<div class="video-container">
        <video controls>
            <source src="path/to/your/local/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</body>
</html>