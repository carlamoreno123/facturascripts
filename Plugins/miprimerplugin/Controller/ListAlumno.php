<?php 
    namespace FacturaScripts\Plugins\miprimerplugin\Controller;

    use FacturaScripts\Core\Lib\ExtendedController\ListController;
    
    class ListAlumno extends ListController {
        public function getPageData(): array
        {
            $page = parent :: getPageData();
            $page ['title'] ='Alumnos';
            $page ['menu'] ='Academia';
            $page ['icon'] ='fas fa-user-friends';
            return $page;
        }

        protected function  createViews()
        {
            $this ->addView('ListAlumno','Alumno');
        $this->addSearchFields('ListAlumno', ['nombre', 'dni' , 'telefono' ,'email']);
        $this->addOrderBy('ListAlumno', ['nombre'], 'Nombre');
        $this->addOrderBy('ListAlumno', ['fechanacimiento'], 'fechanacimiento',2);
        $this->addFilterPeriod('ListAlumno', 'date', 'period', 'fechanacimiento');

       
        }
        protected function loadData($viewName, $view)
        {
            switch($viewName){
                case 'ListAlumno':
                    $view ->loadData();
                    break;
            }
            
        }
    }