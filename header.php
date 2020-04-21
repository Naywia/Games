<?php

echo '
  <nav class="navbar">
        <div class="imageContainer">
            <img class="logoImage" src="/../images/controller.png"/>
        </div>
        <div class="title">
            <h1>Games Database</h1>
        </div>
        <div class="navLinks">
            <div class="nav">
                <a class="navLink" href="index.php">Home</a>
            </div>
            <div class="nav">
                <a class="navLink" href="games.php">All Games</a>
            </div>
        </div>
        <div id="loginDiv">
        <form id="div_login" action="login.php" method="post">
            <div id="message">
                "Hello "' .
                $_SESSION["email"] . ' 
            </div>
                <label class="loginLabel">Email :</label>
                <input type="text" name="email" id="email">

                <label class="loginLabel">Password :</label>
                <input type="password" name="password" id="password">

                <input type="submit" name="login" id="login" value="Login">
            </form>
        </div>
    </nav>';