<?php
namespace App\Classes ;
include "Exporter.php" ;
class ExcelExporter extends Exporter  
{
    # Properties
    protected $format = ".csv" ;
    protected $data;

    public function export()
    {
        $new_file = $_POST['newFile'];
        $file_name = __DIR__ . "/../files/".$new_file.$this->format;

        $list = [ $_POST['title'],$_POST['content'] ];

        $file = fopen($file_name,'a');  // 'a' for append to file - created if doesn't exit
        fputcsv($file,$list);
        echo " Excel file Created ";

    }

}

