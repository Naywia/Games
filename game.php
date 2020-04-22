<?php
// Start a session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Games</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleII.css">
    </head>
    <body>
        <!-- Include header -->
        <?php
        include_once 'connection.php';
        include_once 'header.php';

        $game = $_GET['game'];

        $sql = "
            SELECT gdb_games.gameID, gameName, description, releaseDate, gameImage, genre FROM gdb_gameGenre 
            INNER JOIN gdb_games ON gdb_gameGenre.gameID = gdb_games.gameID 
            INNER JOIN gdb_genres ON gdb_gameGenre.genreID = gdb_genres.genreID
            WHERE gdb_games.gameID = " . $game;

        $result = $conn->query($sql);


        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $gameName = $row['gameName'];
                $description = $row['description'];
                $releaseDate = $row['releaseDate'];
                $genre = $row["genre"];
                $imageName = $row["gameImage"];
            }
        } else {
            
        }

        echo
        "<div id='game'>
            <div>
                <h1>" . $gameName . "</h1><br>
            </div>   
            <div id='gameInfo'>
                <div>
                    <img class='gameImage' src='/../images/games/" . $imageName . ".png'><br>
                </div>" 
                
                . $description ."
            </div>
        </div>";
        ?>


    </body>
</html>