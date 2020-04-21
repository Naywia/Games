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
        <form id="div_login">
            <div id="message"></div>
            <div>    
                <label class="loginLabel">Email :</label>
                <input type="text" name="email" id="email">

                <label class="loginLabel">Password :</label>
                <input type="password" name="password" id="password">

                <input type="button" name="login" id="login" value="Login">
            </div>
            </form>
        </div>
    </nav>';