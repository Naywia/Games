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
        <link rel="stylesheet" href="styleII.css">

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <style>
            #app div{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .search-wrapper {
                position: relative;
            }
            label {
                position: absolute;
                font-size: 12px;
                color: rgba(0,0,0,.50);
                top: 8px;
                left: 12px;
                z-index: -1;
                transition: .15s all ease-in-out;
            }
            input {
                padding: 4px 12px;
                color: rgba(0,0,0,.70);
                border: 1px solid rgba(0,0,0,.12);
                transition: .15s all ease-in-out;
                background: white;
            }


            .wrapper {
                display: flex;
                max-width: 444px;
                flex-wrap: wrap;
                padding-top: 12px;
            }

            .card {
                box-shadow: rgba(0, 0, 0, 0.117647) 0px 1px 6px, rgba(0, 0, 0, 0.117647) 0px 1px 4px;
                max-width: 124px;
                margin: 12px;
                transition: .15s all ease-in-out;
            }
            a {
                text-decoration: none;
                padding: 12px;
                color: #03A9F4;
                font-size: 24px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            img {
                width: 600px;
            }

            .box {
                width: 100px;
                height: 100px;
                border: 1px solid rgba(0,0,0,.12);
            }

        </style>
    </head>
    <body>
        <div id="app">
            <div class="search-wrapper">
                <input type="text" v-model="search" placeholder="Search title.."/>
                <label>Search title:</label>
            </div>
            <div class="wrapper">
                <div class="card" v-for="post in filteredList">
                    <a v-bind:href="post.link" target="_blank">
                        <img v-bind:src="post.img"/>
                    </a>
                </div>
            </div>
        </div>
        <script>
class Post {
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
            new Post(
                    'Black Mesa',
                    'game.php?game=8',
                    '/../images/games/blackMesa.png'
                    ),
            new Post(
                    'Cyber Warrior',
                    'game.php?game=7',
                    '/../images/games/cyberWarr.png'
                    ),
            new Post(
                    'Destiny 2',
                    'game.php?game=5',
                    '/../images/games/destiny-2.png'
                    ),
            new Post(
                    'DOOM Eternal',
                    'game.php?game=3',
                    '/../images/games/DOOM-Eternal.png'
                    ),
            new Post(
                    'GNOG',
                    'game.php?game=4',
                    '/../images/games/GNOG.png'
                    ),
            new Post(
                    'Mount And Blade II',
                    'game.php?game=2',
                    '/../images/games/mountAndBladeII.png'
                    ),
            new Post(
                    'The Sims 4',
                    'game.php?game=9',
                    '/../images/games/sims4.png'
                    ),
            new Post(
                    'Spyro',
                    'game.php?game=1',
                    '/../images/games/spyro.png'
                    ),
            new Post(
                    'Stardew',
                    'game.php?game=6',
                    '/../images/games/stardew.png'
                    ),
            new Post(
                    'Yooka-Laylee',
                    'game.php?game=10',
                    '/../images/games/yooka.png'
                    )
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
    </body>
</html>
