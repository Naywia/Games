<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Games</title>
        <link rel="stylesheet" href="/../style.css">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
            $(document).ready(function () {
                $("form").submit(function () {
                    alert("Submitted");
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