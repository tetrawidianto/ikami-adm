<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\OpiniSistemElCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OpiniSistemElCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OpiniSistemElCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\OpiniSistemEl');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/opini-sistem-el');
        $this->crud->setEntityNameStrings('opini sistem el', 'opini sistem el');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'kategori_sistem_el_id',
                'type' => 'select',
                'entity' => 'kategoriSistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\KategoriSistemEl'
            ],
            [
                'name' => 'opini_id',
                'type' => 'select',
                'entity' => 'opini',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Opini'
            ],
            [
                'name' => 'nilai_min',
                'type' => 'number',
            ],
            [
                'name' => 'nilai_mak',
                'type' => 'number',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(OpiniSistemElCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addFields([
            [
                'name' => 'kategori_sistem_el_id',
                'type' => 'select2',
                'entity' => 'kategoriSistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\KategoriSistemEl'
            ],
            [
                'name' => 'opini_id',
                'type' => 'select2',
                'entity' => 'opini',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Opini'
            ],
            [
                'name' => 'nilai_min',
                'type' => 'number',
            ],
            [
                'name' => 'nilai_mak',
                'type' => 'number',
            ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
