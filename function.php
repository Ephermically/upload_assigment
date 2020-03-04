
<?php
    function what_FileType($file){
        $allowed = array('jpeg', 'jpg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }


    function what_fileSize($file){
        return ($file <= 10000000) ? true : false;
    }

    function fileexisted($file){
        return (!file_exists($file)) ? true : false;
    }

    function change_directory($file,$target){
        return move_uploaded_file($file,$target);
    }
   
?>