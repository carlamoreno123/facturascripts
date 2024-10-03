<?php
namespace FacturaScripts\Plugins\miPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListRecibo extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Recibos';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa-regular fa-file-lines';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('ListRecibo', 'Recibo');
        //$this->addSearchFields('ListRecibo', ['nombre', 'dni', 'telefono','email']);
        $this->addOrderBy('ListRecibo', ['fecha'], 'Fecha',2);
        //$this->addOrderBy('ListRecibo', ['nombre'], 'Nombre');
        $this->addFilterPeriod('ListRecibo', 'date', 'period', 'fecha');
    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListRecibo':
                $view->loadData();
                break; 
        }
    }
}