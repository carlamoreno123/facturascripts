<?php 
    namespace FacturaScripts\Plugins\miprimerplugin\Controller;

    use FacturaScripts\Core\Lib\ExtendedController\ListController;
    
    class ListAlumno extends ListController {
        public function getPageData(): array
        {
            $page = parent :: getPageData();
            $page ['title'] ='recibos';
            $page ['menu'] ='Academia';
            $page ['icon'] ='fa-solid fa-folder';
            return $page;
        }

        protected function  createViews()
        {
            $this ->addView('Listrecibos','recibo');
        $this->addSearchFields('Listrecibos', ['fecha', 'fechapago' , 'importe' ,'formadepago']);
        $this->addOrderBy('Listrecibos', ['fecha'], 'fecha');
        $this->addOrderBy('Listrecibos', ['fechapago'], 'fechapago');
        $this->addFilterPeriod('Lisrecibos', 'date', 'period', 'fecha');

       
        }
        protected function loadData($viewName, $view)
        {
            switch($viewName){
                case 'Listrecibos':
                    $view ->loadData();
                    break;
            }
            
        }
    }