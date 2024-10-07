<?php
namespace FacturaScripts\Plugins\miPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListProfesor extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Profesores';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fa-solid fa-chalkboard-user';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('ListProfesor', 'Profesor');
        


    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListProfesor':
                $view->loadData();
                break; 
        }
    }
    
    
}