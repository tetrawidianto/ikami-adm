<?php

namespace IkamiAdm\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use IkamiAdm\Requests\PilihanGandaCrudRequest;

/**
 * Class PilihanCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PilihanCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Pilihan');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pilihan');
        $this->crud->setEntityNameStrings('pilihan', 'pilihan');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PilihanGandaCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addFields([
            [
                'name' => 'nama',
                'type' => 'text'
            ],
            [
                'name' => 'jawaban',
                'type' => 'select2_multiple',
                'entity' => 'jawaban',
                'attribute' => 'teks',
                'model' => 'IkamiAdm\Models\Jawaban'
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
