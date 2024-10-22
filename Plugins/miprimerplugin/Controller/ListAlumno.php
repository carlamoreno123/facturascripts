<?php

namespace FacturaScripts\Plugins\miPrimerPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListAlumno extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Alumnos';
        $page['menu'] = 'Academia';
        $page['icon'] = 'fas fa-user-friends';
        //$page['showonmenu'] = false;
        return $page;
    }

    protected function createViews()
    {
        $this->createAlumno();
        $this->createRecibo();
        $this->createMatricula();
        $this->createEvaluacion();
    }


    protected function createAlumno($viewName = 'ListAlumno')
    {
        $this->addView($viewName, 'Alumno', 'Alumnos', 'fas fa-user-friends');
        $this->addSearchFields($viewName, ['nombre', 'dni', 'telefono', 'email']);
        $this->addOrderBy($viewName, ['fechanacimiento'], 'Fecha de nacimiento', 2);
        $this->addOrderBy($viewName, ['nombre'], 'Nombre');
        $this->addFilterPeriod($viewName, 'date', 'period', 'fechanacimiento');
    }

    protected function createRecibo($viewName = 'ListRecibo')
    {
        $this->addView($viewName, 'Recibo', 'Recibos', 'fas fa-receipt');
        $this->addOrderBy($viewName, ['fecha'], 'Fecha', 2);
        $this->addFilterPeriod($viewName, 'date', 'period', 'fecha');
    }

    protected function createMatricula($viewName = 'ListMatricula')
    {
        $this->addView($viewName, 'Matricula', 'Matriculas', 'fas fa-id-card');
        $this->addSearchFields($viewName, ['idalumno', 'idasignatura']);
        $this->addOrderBy($viewName, ['fechaalta'], 'Fecha de alta', 2);
        $this->addFilterAutocomplete($viewName, 'idalumno', 'Alumno', 'idalumno', 'alumnos', 'idalumno', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idasignatura', 'Asignatura', 'idasignatura', 'asignaturas', 'idasignatura', 'nombre');
        $this->addFilterPeriod($viewName, 'date', 'period', 'fechaalta');
    }

    protected function createEvaluacion($viewName = 'ListEvaluacion')
    {
        $this->addView($viewName, 'Evaluacion', 'Evaluaciones', 'fas fa-award');
        $this->addOrderBy($viewName, ['fecha'], 'Fecha', 2);
        $this->addOrderBy($viewName, ['nota'], 'Nota');
        $this->addOrderBy($viewName, ['comportamiento'], 'Comportamiento');
        $this->addFilterPeriod($viewName, 'date', 'period', 'fecha');
        $this->addFilterAutocomplete($viewName, 'idalumno', 'Alumno', 'idalumno', 'alumnos', 'idalumno', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idasignatura', 'Asignatura', 'idasignatura', 'asignaturas', 'idasignatura', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idprofesor', 'Profesor', 'idprofesor', 'profesores', 'idprofesor', 'nombre');
    }

    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListRecibo':
            case 'ListMatricula':
            case 'ListAlumno':
            case 'ListEvaluacion':
                $view->loadData();
                break;
        }
    }
}
