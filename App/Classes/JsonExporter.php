<?php
namespace App\Classes ;

class JsonExporter extends Exporter  
{
    # Properties
    protected $format = ".json" ;

    public function export()
    {
        $fileName = $_POST['newFile']. $this->format ;
        $file_path =__DIR__ . "/../files/$fileName";

        file_put_contents($file_path,json_encode($this->data));
        echo $fileName . " Created ";

    }

}
