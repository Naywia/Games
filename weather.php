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
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://api.openweathermap.org/data/2.5/weather?q=fredericia,dk&appid=69187b1a3be7430370c6e6fdd5d0c496');
        $result = curl_exec($curl);

        curl_close($curl);
        ?>
    </body>
</html>
