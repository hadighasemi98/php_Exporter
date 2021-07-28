<?php
namespace App\Classes ;
interface Exportable
{
    public function export();
}
abstract class Exporter implements Exportable 
{
    # Properties
    protected $format ;
    protected $data ;

    public function __construct($data)
    {
        $this->data = $data ;
    }
    
}