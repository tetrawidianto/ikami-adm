<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\AsesmenCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AsesmenCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AsesmenCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Asesmen');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/asesmen');
        $this->crud->setEntityNameStrings('asesmen', 'asesmen');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(AsesmenCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addFields([
            [
                'name' => 'sistem_el_id',
                'type' => 'select2',
                'entity' => 'sistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\SistemEl'
            ],
            [
                'name' => 'versi_id',
                'type' => 'select2',
                'entity' => 'versi',
                'attribute' => 'kode',
                'model' => 'IkamiAdm\Models\Versi'
            ],
            [
                'name' => 'jadwal',
                'type' => 'datetime_picker',
            ],
            // [
            //     'name' => 'asesor',
            //     'type' => 'select2_multiple',
            //     'entity' => 'asesor',
            //     'attribute' => 'name',
            //     'model' => 'App\User',
            //     'pivot' => true,
            //     'options'   => (function ($query) {
            //          return $query->role('Asesor')->get();
            //      }),
            // ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
