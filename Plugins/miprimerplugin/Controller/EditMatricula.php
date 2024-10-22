<?php

namespace FacturaScripts\Plugins\miprimerplugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

use FacturaScripts\Dinamic\Model\Asignatura;


class EditMatricula extends EditController
{
    public function getModelClassName(): string
    {
        return 'Matricula';
    }
    protected function insertAction()
    {
        $asignatura = new Asignatura();
        $idasignatura = $this->request->request->get('idasignatura');
        $asignatura = $asignatura->get($idasignatura);
        if ($asignatura->plazas == 0) {
            return false;
        } else if (parent::insertAction()) {

            $asignatura->plazas--;
            $asignatura->save();
        }
    }
}
