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
            $this->createAlumno();
            $this->createRecibo();
            
        }
        protected function createAlumno($viewName='ListAlumno'){
        
                $this->addView('ListAlumno','Alumno','Alumnos','fas fa-user-friends');
                $this->addSearchFields('ListAlumno', ['nombre', 'dni' , 'telefono' ,'email']);
                $this->addOrderBy('ListAlumno', ['nombre'], 'Nombre');
                $this->addOrderBy('ListAlumno', ['fechanacimiento'], 'fechanacimiento',2);
                $this->addFilterPeriod('ListAlumno', 'date', 'period', 'fechanacimiento');
            }
        protected function createRecibo($viewName='ListRecibo'){
                $this->addView('ListRecibo', 'Recibo' , 'Recibos','fa-solid fa-file-invoice');
                $this->addOrderBy('ListRecibo', ['fecha'], 'Fecha',2);
                $this->addFilterPeriod('ListRecibo', 'date', 'period', 'fecha');

            }

            
        
        
        protected function loadData($viewName, $view)
        {
            switch($viewName){
                case 'ListProfesor':
                case 'ListRecibo':
                case 'ListAlumno':
                    $view ->loadData();
                    break;
            }
            
        }
    }