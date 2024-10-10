<?php
namespace FacturaScripts\Plugins\miprimerplugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Matricula extends ModelClass{

    use ModelTrait;

    public $idmatricula;
    public $idalumno;
    public $idasignatura; 
    public $fechaalta;
    public $fechabaja;
    public $cuota;
    
    public static function primaryColumn(): string
    {
        return 'idmatricula';

    }
    public static function tableName(): string
    {
        return 'matriculas';

    }
    public function url (string $type ='auto', string $list='ListAlumno?activetab=List'): string {
        return parent :: url ($type,$list);
    }



}