<?php
namespace FacturaScripts\Plugins\miPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListAsignatura extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Asignaturas';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa-solid fa-book-open-reader';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('ListAsignatura', 'Asignatura');
        

    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListAsignatura':
                $view->loadData();
                break; 
        }
    }
    
    
}