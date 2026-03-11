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
            margin: 0;
            background-color: #ffffff;
        }

        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        /* Desktop */
        .video-container video {
            width: 45%;
            max-width: 650px;
            height: auto;
            object-fit: contain;
        }

        /* Mobile Optimization */
        @media (max-width: 768px) {
            .video-container video {
                width: 80%;
                /* bigger on small screens */
                max-width: 350px;
                /* keeps it clear */
            }
        }
    </style>
</head>

<body>

    <div class="video-container">
        <video autoplay muted playsinline>
            <source src="IMAGES/Equal offshore limited. Logo alone.mp4" type="video/mp4">
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