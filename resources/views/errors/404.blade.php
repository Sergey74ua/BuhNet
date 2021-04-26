<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            width: 100%;
            height: 100%;
        }
        canvas {
            display: block;
            background-color: #000;
        }
        label {
            position: absolute;
            width: 100%;
            top: 40%;
            text-align: center;
        }
        a {
            text-decoration: none;
            font-size: 2.5em;
            font-family: 'Microsoft Sans Serif';
            color: #cd4606;

            animation: burning 1s ease-in-out infinite alternate;
        }
        @keyframes burning {
            0% {
                text-shadow: 
                0 0 40px #ffef95,
                0 0px 30px #ec760c, 
                -10px -20px 40px #cd4606, 
                0 -40px 50px #973716, 
                10px -50px 60px #451b0e
            }
            100% {
                text-shadow:
                0 2px 30px #ffef95bd,
                2px -2px 30px #ffae34,
                -12px -22px 40px #ec760c,
                0 -42px 50px #cd4606,
                10px -50px 60px  #973716;
            }
        }
    </style>
</head>
<body>
    <canvas id="404""></canvas>
    <label>
        <a href="{{ url('/') }}">
            <h2>ОШИБКА 404</h2>
            <h4>страница не найдена</h4>
        </a>
        <br>
        <h5>404 ERROR</h5>
        <h6>page not found</h6>
    </label>

    <script type="text/javascript">
        const TWO_PI = Math.PI*2;
        var canvas = document.getElementById('404'), ctx = canvas.getContext('2d'),
            img = new Image(), innerWidth, innerHeight, centerX, centerY,
            stars = [], i, starsIndex = 0, numStars = 2000,
            starX = null, starY = null, focalLength = 500,
            starRadius = null, radius = 1;

            img.src = "img/black-holes.jpg";
            sizeWindow();

        canvas.addEventListener('mousewheel', function(e) {
            if (e.deltaY < 0) {
                focalLength *= 1.1;
            } else {
                focalLength /= 1.1;
            }
            if (focalLength >= innerWidth) {
                focalLength = innerWidth - 20;
            } else if (focalLength < 100) {
                focalLength = 100;
            }
        }, false)

        window.onresize = function() {
            sizeWindow();
        }

        function sizeWindow() {
            innerWidth = document.documentElement.clientWidth;
            innerHeight = document.documentElement.clientHeight;
            centerX = innerWidth / 2;
            centerY = innerHeight / 2;
            canvas.width = innerWidth;
            canvas.height = innerHeight;
        }

        /** Class star */
        function star(x, y, z) {
            starsIndex++;
            stars[starsIndex] = this;
            this.id = starsIndex;
            this.x = x;
            this.y = y;
            this.z = z;
            this.radius = radius;
            this.color = getRandColor();

            this.update = function() {
                starX = (this.x - centerX) * (focalLength / this.z);
                starX += centerX;    
                starY = (this.y - centerY) * (focalLength / this.z);
                starY += centerY;
                starRadius = radius * (focalLength / this.z);
                this.z += -10;
                if (this.z <= 0) {
                    this.z = parseInt(innerWidth);
                }
            }
                
            this.draw = function() {
                ctx.beginPath();
                ctx.arc(starX, starY, starRadius, TWO_PI, false);
                ctx.fillStyle = this.color;
                ctx.fill();
                ctx.closePath();
            }

            function getRandColor() {
                let r, g, b;
                r = Math.floor(Math.random() * 127) + 128;
                g = Math.floor(Math.random() * 127) + 128;
                b = Math.floor(Math.random() * 127) + 128;

                return "rgb("+r+","+g+"," +b+")";
            }
        }

        for (i = 0; i < numStars; i++) {
            x = Math.random() * innerWidth;
            y = Math.random() * innerHeight;
            z = Math.random() * innerWidth;
            new star(x, y, z);
        }

        function animate() {
            requestAnimationFrame(animate);

            ctx.drawImage(img, 0, 0, innerWidth, innerHeight);

            for(i in stars){
                stars[i].update();
                stars[i].draw();
            }
        }
        
        animate();
    </script>
</body>
</html>
