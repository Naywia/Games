<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>Vue</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="hover-min.css">

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
       
    </head>
    <body>
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
        <div class="container">
            <h1 class="titles">Most recent games</h1>
            <section id="games" class="gameSection">

                <div id="app">
                    <div class="search-wrapper">
                        <input type="text" v-model="search" placeholder="Search title.."/>
                    </div>
                    <div class="wrapper">
                        <div v-for="post in filteredList">
                            <a v-bind:href="post.link">
                                <img class="gamePicture hvr-grow" v-bind:src="post.img"/>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script>
            class Game {
                constructor(title, link, img) {
                    this.title = title;
                    this.link = link;
                    this.img = img;
                }
            }

            const app = new Vue({
                el: '#app',
                data: {
                    search: '',
                    postList: [
<?php
foreach ($data as $row) {
    $gameID = $row['gameID'];
    $gameName = $row['gameName'];
    $description = $row['description'];
    $releaseDate = $row['releaseDate'];
    $imageName = $row["gameImage"];

    echo"
        new Game(
                '$gameName',
                'game.php?game=$gameID',
                '/../images/games/$imageName.png'
                ),";
}
?>
                    ]
                },
                computed: {
                    filteredList() {
                        return this.postList.filter(post => {
                            return post.title.toLowerCase().includes(this.search.toLowerCase());
                        });
                    }
                }
            });
        </script>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
