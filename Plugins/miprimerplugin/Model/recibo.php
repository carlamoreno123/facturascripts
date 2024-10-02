<?php
namespace FacturaScripts\Plugins\miprimerplugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Alumno extends ModelClass{

    use ModelTrait;

    public $idrecibo;
    public $idalumno;
    public $fecha; 
    public $fechapago;
    public $importe;
    public $formadepago;
    public $tipo;

    
    public static function primaryColumn(): string
    {
        return 'recibo';

    }
    public static function tableName(): string
    {
        return 'recibos';

    }
}