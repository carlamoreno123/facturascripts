<?php
namespace FacturaScripts\Plugins\miprimerplugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditMatricula extends EditController
{
    public function getModelClassName(): string
    {
        return 'Matricula';
    }
}