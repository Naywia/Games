<?php

$_SESSION['previous_location'] = filter_input(INPUT_SERVER, 'PHP_SELF');

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
            <a class="navLink" href="weather.php">Weather</a>
        </div>
        <form class="loginForm" action="login.php" method="post">';
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo'
            <div class="inputs">
                    <input type="submit" name="logout" id="logout" value="Logout">
            </div>
        </form>
        <div id="logged" class="loggedIn">';
} else {
    echo'
            <div class="inputs">
                <label for="email" class="loginLabel">Email </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="inputs">
                <label for="password" class="loginLabel">Password </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="inputs">
                    <input type="submit" name="login" id="login" value="Login">
            </div>
        </form>
<div class="loggedIn">';
}

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'] . " is logged in";
} else if (!isset($_SESSION['username'])) {
    
}

echo '</div>
    </nav>';
