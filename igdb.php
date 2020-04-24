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
            <?php
            require 'class.igdb.php';

            // Instantiate the class
            $IGDB = new IGDB('11e397ad4373da726e6ddc5ff1d88c13');

            // Setting up the query parameters
            $options = array(
                'search' => 'sims', // searching for games LIKE uncharted
                'fields' => array(// we want to see these values in the results
                    'id',
                    'name',
                    'cover'
                ),
                'limit' => 10, // we only need maximum 5 results per query (pagination)
                'offset' => 10           // we would like to show the third page; fetch the results from the tenth element (pagination)
            );

            try {
                // Running the query against IGDB; passing the options parameter
                $result = $IGDB->game($options);

                $resCount = count($result);

                // Showing the result
                for ($i = 0; $i < $resCount; $i++) {
                    echo $result[$i]->name;
                    echo "<br>";
                }

                
            } catch (Exception $e) {
                // Catching Exceptions, if there is any
                echo $e->getMessage();
            }
            ?>

        </div>



        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
