<?php
namespace FacturaScripts\Plugins\miprimerplugin\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\PanelController;


class EditAlumno extends PanelController
{
    protected function createViews()
    {
        $this->addEditListView('ListAlumno','Alumno','Alumno','fas fa-user-friends');
        $this->addListView('ListRecibo','Recibo','Recibos','fas fa-receipt');
    }
    protected function loadData($viewName, $view)
    {
        switch($viewName){
            case 'EditAlumno':
                $code = $this->request->get('code');
                $view->loadData($code);
                break;
            case'ListRecibo':
                $where =[new DataBaseWhere('idalumno',$this->request->get('code'))];
                $view->loadData('',$where);
                break;
        }
    }

    
    public function getModelClassName(): string
    {
        return 'Alumno';
    }
}