<?php
namespace FacturaScripts\Plugins\miprimerplugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditAlumno extends EditController
{
    public function getModelClassName(): string
    {
        return 'Alumno';
    }
}