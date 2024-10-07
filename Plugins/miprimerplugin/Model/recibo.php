<?php
namespace FacturaScripts\Plugins\miPrimerPlugin\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
class Recibo extends ModelClass //Singular y mayuscula siempre que sea una clase 
{
    use ModelTrait;

    public $idrecibo;
    public $idalumno;
    public $fecha;
    public $fechadepago;
    public $formadepago;
    public $importe;
    public $tipo;

    public static function primaryColumn(): string
    {
        return 'idrecibo';
    }

    public static function tableName(): string 
    {
        return 'recibos';
    }
}
