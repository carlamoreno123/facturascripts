<?php
namespace FacturaScripts\Plugins\miprimerplugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Alumno extends ModelClass{

    use ModelTrait;

    public $idalumno;
    public $nombre;
    public $fechanacimiento; 
    public $dni;
    public $email;
    public $telefono;

    
    public static function primaryColumn(): string
    {
        return 'idalumno';

    }
    public static function tableName(): string
    {
        return 'alumnos';

    }


}



