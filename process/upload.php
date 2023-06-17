<?php
    session_start();
    require("../include/file.php");

    if(isset($_FILES["file"])){
        $file = $_FILES["file"];
        $holder = new File($file);
        $holder->upload();
        $_SESSION["current_upload"] = $holder->path;

        if($holder -> err){
            header("Location:../index.php");
            exit();
        }
    }

    header("Location:../index.php?c=result");
?>