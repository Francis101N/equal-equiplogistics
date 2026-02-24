<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome | Equip & Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMAGES/equal-icon.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            overflow: hidden;
            background: #000;
        }

        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }

        video {
            width: 60%;
            height: auto;
            max-height: 80%;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>

    <div class="video-container">
        <video autoplay muted playsinline>
            <source src="IMAGES/Equal-intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <script>

        setTimeout(function () {
            window.location.href = "home";
        }, 8000);
    </script>

</body>

</html>