<?php
// Start a session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Games</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="animate.js"></script>
    </head>
    <body>
        <!-- Include header  and connection to database -->
        <?php
        include_once 'connection.php';
        include_once 'header.php';
        ?>


        <?php
        // Create Array.
        $genre = array();
        // Get ID for game.
        $game = filter_input(INPUT_GET, game);

        // Set session variable for game so that'll remember when you reload page.
        if (!isset($_SESSION['game'])) {
            $_SESSION['game'] = $game;
        } else if (isset($_SESSION['game'])) {
            if ($game == "" || $game == null) {
                
            } else {
                $_SESSION['game'] = $game;
            }
        }

        // SQL Query.
        $sql = "
            SELECT gdb_games.gameID, gameName, description, releaseDate, gameImage, genre FROM gdb_gameGenre 
            INNER JOIN gdb_games ON gdb_gameGenre.gameID = gdb_games.gameID 
            INNER JOIN gdb_genres ON gdb_gameGenre.genreID = gdb_genres.genreID
            WHERE gdb_games.gameID = " . $_SESSION['game'];

        // Run query.
        $result = $conn->query($sql);

        // If there's more than 0 results.
        if (mysqli_num_rows($result) > 0) {
            // While there's a row.
            while ($row = mysqli_fetch_array($result)) {
                // Make the variables for showing the game.
                $gameName = $row['gameName'];
                $description = $row['description'];
                $releaseDate = $row['releaseDate'];
                array_push($genre, $row["genre"]);
                $imageName = $row["gameImage"];
            }
        } else {
            
        }

        // Count the array.
        $genreCount = count($genre);


        // Print the data
        echo
        "<div id='game'>
            <div id='heading'>
                <h1>" . $gameName . "</h1>";
        ?>
        <!-- Go back button -->
        <a class="goBack" href="javascript:history.go(-1)"><span>Go back </span></a>
        <?php
        // Continue to print the data.
        echo "
            </div>   
            <div id='gameInfo'>
                <div class='indentGame'>
                    <img class='gameImage' src='/../images/games/" . $imageName . ".png'><br>
                </div>
                <p>" . $description . "</p>
               <p> Genres: ";
        for ($i = 0; $i < $genreCount; $i++) {
            if ($genreCount > 1) {
                if ($i == 0) {
                    echo $genre[$i] . ", ";
                } else if ($i == 1) {
                    echo $genre[$i];
                }
            } else {
                echo $genre[$i];
            }
        }
        echo "
            </p>
                <p> Release date: " . $releaseDate . " </p>   
            </div>
        </div>";
        ?>

        <!-- Include the footer -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>