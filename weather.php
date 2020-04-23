<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
        <?php
        // Initialize a curl resource. The URL can also be specified here
        $curl = curl_init();

        // Set the curl options to be the curl resource, the setting and the value
        // CURLOPT_URL simply specifies that the URL is being changed.
        curl_setopt($curl, CURLOPT_URL, 'https://api.openweathermap.org/data/2.5/weather?q=fredericia,dk&appid=69187b1a3be7430370c6e6fdd5d0c496');
        
        // Execute the curl
        $result = curl_exec($curl);

        // Close the curl object
        curl_close($curl);
        ?>
    </body>
</html>
