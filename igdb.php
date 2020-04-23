<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>IGDB API</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
        <?php
        include_once 'header.php';
        ?>
        <div class="container">
            <div id="displayWeather">
                <script>
                    axios({
                        url: "https://api-v3.igdb.com/games",
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'user-key': '11e397ad4373da726e6ddc5ff1d88c13'
                        },
                        data: "fields age_ratings,aggregated_rating,aggregated_rating_count,alternative_names,artworks,bundles,category,collection,cover,created_at,dlcs,expansions,external_games,first_release_date,follows,franchise,franchises,game_engines,game_modes,genres,hypes,involved_companies,keywords,multiplayer_modes,name,parent_game,platforms,player_perspectives,popularity,pulse_count,rating,rating_count,release_dates,screenshots,similar_games,slug,standalone_expansions,status,storyline,summary,tags,themes,time_to_beat,total_rating,total_rating_count,updated_at,url,version_parent,version_title,videos,websites;"
                    })
                            .then(response => {
                                console.log(response.data);
                            })
                            .catch(err => {
                                console.error(err);
                            });
                    fields * ; where id = 1942;
                </script>
            </div>
        </div>
        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
