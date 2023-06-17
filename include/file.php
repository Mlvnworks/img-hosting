<?php
    require_once("../config/config.php");
    
    class File{
        public $name, $size, $tmp_name, $path;
        public $err = false;

        public function __construct($file){
            $this-> name = $file["name"];
            $this -> size = $file["size"];
            $this -> tmp_name = $file["tmp_name"];
        }

        // Run to upload file
        public function upload(){
            GLOBAL $connection;

            $fileName = uniqid().$this->name;
            $this->path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER["HTTP_HOST"]."/uploaded/".$fileName;
            $dir = "../uploaded/".$fileName;

            if(move_uploaded_file($this->tmp_name, $dir)){
                try{
                    $connection -> query("
                        insert into img(file_path)
                        values('".$this->path ."')
                    ");
                }catch(Exception $err){
                    $this->err = true;                    
                }
            }
            $connection -> close();
        }
    }
?>