<?php
namespace FacturaScripts\Plugins\miprimerplugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditProfesor extends EditController
{
    public function getModelClassName(): string
    {
        return 'Profesor';
    }
}