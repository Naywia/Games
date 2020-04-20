<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Games</title>
        
         <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">
        
        <link rel="stylesheet" href="/../style.css">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
            $(document).ready(function () {
                $("form").submit(function () {
                    alert("Submitted");
                    $("p").after("<p>Succesfully submitted</p>");
                });
            });
        </script>
    </head>
    <body>
        <h1>Hello There!</h1>
        <p>This site is for a database over games 666</p><br><br>

        <form action="">
            E-mail: <input type="email" name="email" placeholder="e-mail"><br>
            Password: <input type="password" name="password" placeholder="password"><br>
            <input type="submit" value="login">
        </form> 
    </body>
</html>