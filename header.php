<?php
echo "Hello";
if (!isset($_SESSION)) {
    session_start();
    $_SESSION['previous_location'] = $_SERVER['PHP_SELF'];
    $_SESSION["email"];
    print_r($_SESSION);
}
//
//            <p id="message">
//                Hello ' .
//                $_SESSION["email"] . ' 
//            </p>
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
        <form class="loginForm" action="login.php" method="post">
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
        <div class="imageContainer">
        </div>
    </nav>';
