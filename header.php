<?php
if(!isset($_SESSION)){
    session_start();
}

echo '
  <nav class="navbar">
        <div class="imageContainer">
            <img class="logoImage" src="/../images/controller.png"/>
        </div>
        <div class="title">
            <h1>Games Database</h1>
        </div>
        <div class="navLinks">
            <a class="navLink" href="index.php">Home</a>
            <a class="navLink" href="games.php">All Games</a>
        </div>
        <div id="loginDiv">
            <p id="message">
                "Hello "' .
                $_SESSION["email"] . ' 
            </p>
            <form class="loginForm" action="login.php" method="post">
                <div class="labels">
                    <label for="email" class="loginLabel">Email :</label>
                    <label for="password" class="loginLabel">Password :</label>
                </div>
                <div class="inputs">
                    <input type="email" name="email" id="email">
                    <input type="password" name="password" id="password">
                </div>
                <input type="submit" name="login" id="login" value="Login">
            </form>
        </div>
    </nav>';