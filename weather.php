<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>Weather API</title>

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
                <?php
                // Initialize a curl resource. The URL can also be specified here
                $curl = curl_init();

                // Set the curl options to be the curl resource, the setting and the value
                // CURLOPT_URL simply specifies that the URL is being changed.
                // After the city name, mode can be added to change how the data is displayed.
                curl_setopt($curl, CURLOPT_URL, 'https://api.openweathermap.org/data/2.5/weather?q=fredericia,dk&mode=html&appid=69187b1a3be7430370c6e6fdd5d0c496');

                // Execute the curl
                $result = curl_exec($curl);

                // Close the curl object
                curl_close($curl);
                ?>
            </div>
        </div>
        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
