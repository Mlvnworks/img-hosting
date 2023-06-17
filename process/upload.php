<?php
    session_start();
    require("../config/config.php");

    if(isset($_FILES["file"])){
        $fileName = uniqid(). $_FILES["file"]["name"];
        $path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER["HTTP_HOST"]."/uploaded/".$fileName;
        $dir = "../uploaded/".$fileName;
        $temp_name = $_FILES["file"]["tmp_name"];
        
        if(move_uploaded_file($temp_name, "../uploaded/".$fileName)){
            try{
                $connection -> query("
                    INSERT INTO img(file_path)
                    VALUES('".$path."')
                ");
                $connection -> close();
                $_SESSION["current_upload"] = $path;
                
            }catch(Exception $err){
                print_r($err);
            }
        }

    }

    header("Location:../index.php?c=result");
?>