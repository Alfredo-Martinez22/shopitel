<!DOCTYPE html>
<html>
<head>
    <title>Juego de recolección de objetos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        #game-container {
            width: 100%;
            height: 80vh;
            background-color: #f0f0f0;
            position: relative;
        }
        .object {
            position: absolute;
        }
        #player {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        #score {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
        }
        #message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            display: none;
            color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Juego de recolección de objetos</h1>
    <p style="text-align: center;">Haga clic o toque en el jugador para moverlo. También puede arrastrarlo con el mouse o el dedo.</p>
    <div id="game-container">
        <img id="player" src="canasta.png" width="50" height="150">
    </div>
    <div id="message">Perdiste. Tu puntaje fue: <span id="final-score"></span></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const player = document.getElementById("player");
            const gameContainer = document.getElementById("game-container");
            const messageBox = document.getElementById("message");
            const finalScore = document.getElementById("final-score");

            let score = 0;
            let objectSpeed = 5;
            let objectInterval = 1000;
            let badObjectProbability = 0.2; // Inicialmente, el 20% de los objetos son malos

            function createObject(isGood) {
                const object = document.createElement("img");
                object.classList.add("object");
                object.src = isGood ? "logo.png" : "llanta.png";
                object.style.width = "30px";
                object.style.height = "30px";
                object.style.position = "absolute";
                object.style.left = Math.random() * (gameContainer.offsetWidth - 20) + "px";
                object.style.top = "-20px";
                gameContainer.appendChild(object);

                const fallInterval = setInterval(function() {
                    const currentTop = parseInt(object.style.top);
                    if (currentTop >= gameContainer.offsetHeight) {
                        clearInterval(fallInterval);
                        object.remove();
                    } else {
                        object.style.top = currentTop + objectSpeed + "px";
                        if (checkCollision(object, player)) {
                            if (isGood) {
                                score++;
                            } else {
                                score = Math.max(-1, score - 5); // Restar cinco puntos por objeto malo
                            }
                            object.remove();
                            document.getElementById("score").innerText = "Score: " + score;
                            if (score < 0) {
                                endGame();
                            }
                        }
                    }
                }, 50);
            }

            function checkCollision(obj1, obj2) {
                const rect1 = obj1.getBoundingClientRect();
                const rect2 = obj2.getBoundingClientRect();
                return !(rect1.right < rect2.left || 
                        rect1.left > rect2.right || 
                        rect1.bottom < rect2.top || 
                        rect1.top > rect2.bottom);
            }

            let isDragging = false;
            let offsetX, offsetY;

            function startDragging(e) {
                isDragging = true;
                const rect = player.getBoundingClientRect();
                offsetX = e.clientX - rect.left;
                offsetY = e.clientY - rect.top;
            }

            function stopDragging() {
                isDragging = false;
            }

            function movePlayer(e) {
                if (isDragging) {
                    const x = e.clientX - offsetX;
                    const y = e.clientY - offsetY;
                    const maxX = gameContainer.offsetWidth - player.offsetWidth;
                    const maxY = gameContainer.offsetHeight - player.offsetHeight;
                    player.style.left = Math.max(0, Math.min(x, maxX)) + "px";
                    player.style.top = Math.max(0, Math.min(y, maxY)) + "px";
                }
            }

            function increaseDifficulty() {
                if (score >= 20 && score % 100 === 0) {
                    objectSpeed += 5;
                    objectInterval -= 100;
                    badObjectProbability += 0.05; // Aumentar la probabilidad de objetos malos
                }
            }

            function endGame() {
                clearInterval(gameLoop);
                messageBox.style.display = "block";
                finalScore.textContent = score;
            }

            gameContainer.addEventListener("mousedown", startDragging);
            gameContainer.addEventListener("touchstart", startDragging);
            document.addEventListener("mouseup", stopDragging);
            document.addEventListener("touchend", stopDragging);
            document.addEventListener("mousemove", movePlayer);
            document.addEventListener("touchmove", function(e) {
                e.preventDefault(); // Evita el desplazamiento de la página mientras se arrastra el jugador
                movePlayer(e.touches[0]);
            });

            const gameLoop = setInterval(function() {
                increaseDifficulty();
                createObject(Math.random() > badObjectProbability); // Probabilidad inversa para los objetos malos
            }, objectInterval);
        });
    </script>
    <p id="score" style="text-align: center;">Score: 0</p>
</body>
</html>
