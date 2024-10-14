<?php
namespace FacturaScripts\Plugins\miprimerplugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditEvaluacion extends EditController
{
    public function getModelClassName(): string
    {
        return 'Evaluacion';
    }
}