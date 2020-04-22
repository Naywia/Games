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

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="search.js"></script>
    </head>
    <body>
        <!-- Include header -->
        <?php
        include_once 'connection.php';
        include_once 'header.php';
        $sql = "
            SELECT gameID, gameName, description, releaseDate, gameImage FROM gdb_games
            ORDER BY releaseDate DESC LIMIT 5";

        $result = $conn->query($sql);

        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        ?>

        <section id="games" class="gameSection">
            <div class="container">
                <h1 class="titles">Most recent games</h1>
                <input id="search" type="text" placeholder="Search.."><br>

                <div id="gallery">
                    <div class="gameGallery">
                        <?php
                        foreach ($data as $row) {
                            $gameID = $row['gameID'];
                            $gameName = $row['gameName'];
                            $description = $row['description'];
                            $releaseDate = $row['releaseDate'];
                            $imageName = $row["gameImage"];

                            echo "
                            <a class='' href='game.php?game=" . $gameID . "'>
                                <div class='gameImages'>
                                    <img class='gamePicture' src='/../images/games/" . $imageName . ".png' class='' alt='gameImage'>
                                </div>
                            </a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>


    </body>
</html>