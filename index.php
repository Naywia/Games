<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        
        <title>Games</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="hover-min.css">

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
        <!-- Include header and connection to database -->
        <?php
        include_once 'connection.php';
        include_once 'header.php';
        
        // SQL Query.
        $sql = "
            SELECT gameID, gameName, description, releaseDate, gameImage FROM gdb_games
            ORDER BY releaseDate DESC LIMIT 6";

        // Execute query.
        $result = $conn->query($sql);

        // While there's a row.
        while ($row = mysqli_fetch_array($result)) {
            // Fill an array with the rows.
            $data[] = $row;
        }
        ?>

        <!-- Print the data -->
        <div class="container">
            <h1 class="titles">Most recent games</h1>
            <section id="games" class="gameSection">

                <div id="gameGallery">
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
                                    <img class='gamePicture hvr-grow' src='/../images/games/" . $imageName . ".png' class='' alt='gameImage'>
                                </div>
                            </a>";
                    }
                    ?>
                </div>
            </section>
        </div>
        
        <!-- Include footer -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>