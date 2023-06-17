<?php
    $redi = isset($_GET["c"]) ? $_GET["c"] : null;
    $content;

    switch($redi){
        case "home":
            $content = "home.php";
            break;

        case "result":
            $content = "result.php";
            break;

        default: 
            $content = "home.php";
            break;
    }

    // Require navigation.php
    require("./navigator.php");
?>