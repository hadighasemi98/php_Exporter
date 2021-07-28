<?php
namespace App\Classes ;

class TextExporter extends Exporter  
{
    # Properties
    protected $format = ".txt" ;
    protected $data;

    public function export()
    {
        $fileName = $_POST['newFile']. $this->format ;
        $file_path =__DIR__ . "/../files/$fileName";
        
        file_put_contents($file_path,"{$this->data['title']}\n{$this->data['content']}");
        echo $fileName . " Created ";

    }

}




