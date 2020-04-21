<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Games</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleII.css">
    </head>
    <body>
        <!-- Include header -->
        <?php 
        include_once 'connection.php';
        include_once 'header.php'; 
        $sql = "
            SELECT gameID, gameName, description, releaseDate, gameImage FROM gdb_games
            ORDER BY releaseDate DESC";

        $result = $conn->query($sql);

        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        ?>

        <section id="games" class="gameSection">
            <div class="container">
                <h1>All games</h1><br>

                <div class="galleryRow">
                    <?php
                    foreach ($data as $row) {
                        $gameID = $row['gdb_games.gameID'];
                        $gameName = $row['gameName'];
                        $description = $row['description'];
                        $releaseDate = $row['releaseDate'];
                        $imageName = $row["gameImage"];

                        echo "
                            <a class='' href='game.php?game=" . $gameID . "'>
                                <div class='gameImages'>
                                    <img class='gamePicture' src='/../images/games/" . $imageName . ".png' class='' alt='gameImage'>
                                    <div class='gameName'> 
                                        <h2> " . $gameName . " </h2>
                                    </div>
                                </div>
                            </a>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>