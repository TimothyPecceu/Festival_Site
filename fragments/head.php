<?php
    spl_autoload_register(function ($className){
        include "./classes/" . $className . ".php";
    });
?>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/default.css">
        <script src="scripts/jquery-1.12.3.js"></script>
        <title>Muziekfestival</title>
    </head>

