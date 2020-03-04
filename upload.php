<?php
    include_once("function.php");
    $file= $_FILES['files'];
    //echo"<pre>",print_r($file),"</pre>";
    $fileName= $file['name'];
    $fileType= $file['type'];
    $fileTmpname= $file['tmp_name'];
    $fileSize= $file['size'];
    $dir = "uploads/";

    foreach($fileName as $index => $name){
        if(what_FileType($fileType[$index])){
           if(what_fileSize($fileSize[$index])){
               $targetDir = $dir.basename($fileName[$index]);
                if(fileexisted($targetDir)){
                    if(change_directory($fileTmpname[$index],$targetDir)){
                        //echo "File successfully uploaded",$fileName[$index],"<br>";
                        //echo "<img scr='uploads/".$file['name'][$index]."'>";
                    }
                }else{
                    echo "The file was not uploaded";
                }

           }else{
                echo "File too large";
           }
        }else{
            echo "File format error";
        }
    }

    

    //scan "uploads" folder and display them accordingly
    $folder = "uploads";
    $results = scandir('uploads');
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_file($folder . '/' . $result)) {
            echo '
                <div class="col-md-3">
                    <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
                </div>';
        }
    }

?>

