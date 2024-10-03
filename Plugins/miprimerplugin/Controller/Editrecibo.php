<?php
namespace FacturaScripts\Plugins\miPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditRecibo extends EditController
{
    public function getModelClassName(): string
    {
        return 'Recibo';
    }
}