<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\SistemElCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LayananCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SistemElCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\SistemEl');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/sistem-el');
        $this->crud->setEntityNameStrings('sistem elektronik', 'sistem elektronik');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'penyedia_id',
                'type' => 'select',
                'entity' => 'penyedia',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Penyedia'
            ],
            [
                'name' => 'nama',
                'type' => 'text'
            ],
            [
                'name' => 'deskripsi',
                'type' => 'text'
            ],
            [
                'name' => 'sektor_id',
                'type' => 'select',
                'entity' => 'sektor',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Sektor'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SistemElCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        // $this->setupCreateOperation();
        $this->addFields();
    }

    private function addFields()
    {
        $this->crud->addFields([
            [
                'name' => 'penyedia_id',
                'type' => 'select2',
                'entity' => 'penyedia',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Penyedia'
            ],
            [
                'name' => 'nama',
                'type' => 'text'
            ],
            [
                'name' => 'deskripsi',
                'type' => 'text'
            ],
            [
                'name' => 'sektor_id',
                'type' => 'select2',
                'entity' => 'sektor',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Sektor'
            ],
        ]);
    }
}
