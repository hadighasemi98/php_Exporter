<?php
include "autoLoader.php";


if ( ($_SERVER['REQUEST_METHOD'] == 'POST') ) {

    [$title,$content,$format,$newFile] = [ $_POST['title'],$_POST['content'],$_POST["format"],$_POST["newFile"] ] ;

    # Call the Classes dynamically
    $class = "App\Classes\\".$format . "Exporter" ;

    $export_obj = new $class (['title'=>$title,'content'=>$content]);
    # Validation
    echo empty($title) || empty($content)  ? "Please Fill the inputs " : (empty($newFile)  ? "Please write your file name" : $export_obj->export());
    
}


