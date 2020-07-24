<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\PemeringkatanCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PemeringkatanCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PemeringkatanCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Pemeringkatan');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pemeringkatan');
        $this->crud->setEntityNameStrings('pemeringkatan', 'pemeringkatan');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PemeringkatanCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addFields([
            [
               'type' => 'select2',
               'name' => 'kematangan_baru_id',
               'entity' => 'kematanganBaru',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\KematanganBaru',
            ],
            [
               'type' => 'select2',
               'name' => 'kematangan_id',
               'entity' => 'kematangan',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\Kematangan',
            ],
            [
               'type' => 'select2',
               'name' => 'kesiapan_id',
               'entity' => 'kesiapan',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\Kesiapan',
            ],
            [
              'name' => 'jawaban',
              'type' => 'table',
              'entity_singular' => 'jawaban',
              'columns' => [
                'jumlah' => 'Jumlah',
                'nilai' => 'Nilai',
              ]
            ],
            [
                'name' => 'proporsi',
                'type' => 'number',
                'attributes' => ["step" => "0.1"],
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
