<?php
namespace FacturaScripts\Plugins\miPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListMatricula extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Matriculas';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa-solid fa-handshake';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('ListMatricula', 'Matricula');
        

    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListMatricula':
                $view->loadData();
                break; 
        }
    }
    
    
}