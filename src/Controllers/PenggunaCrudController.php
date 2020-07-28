<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\PenggunaCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CalonPenggunaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PenggunaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Pengguna');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pengguna');
        $this->crud->setEntityNameStrings('pengguna', 'pengguna');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'user_id',
                'type' => 'select',
                'entity' => 'user',
                'attribute' => 'name',
                'model' => 'IkamiAdm\Models\User'
            ],
            [
                'name' => 'penyedia_id',
                'type' => 'select',
                'entity' => 'penyedia',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Penyedia'
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PenggunaCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
