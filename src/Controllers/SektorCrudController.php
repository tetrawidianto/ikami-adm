<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\SektorCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AreaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SektorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Sektor');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/sektor');
        $this->crud->setEntityNameStrings('sektor', 'sektor');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'nama',
                'type' => 'text'
            ],
            [
                'name' => 'deskripsi',
                'type' => 'text'
            ],
            [
                'name' => 'users',
                'label' => 'Admin',
                'type' => 'select_multiple',
                'entity' => 'users',
                'attribute' => 'name',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SektorCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addFields([
            [
                'name' => 'nama',
                'type' => 'text'
            ],
            [
                'name' => 'deskripsi',
                'type' => 'textarea'
            ],
            [
                'name' => 'users',
                'label' => 'Admin',
                'type' => 'select2_multiple',
                'entity' => 'users',
                'attribute' => 'name',
                'model' => 'App\User',
                'pivot' => true,
                'options'   => (function ($query) {
                    return $query->role('admin')->get();
                }),
            ],
            [
                'name' => 'badge',
                'type' => 'text'
            ],
            [
                'name' => 'badge',
                'type' => 'text',
                // 'options' => ['primary' => 'primary', 'secondary' => 'secondary', 'success' => 'success', 'warning' => 'warning', 'danger' => 'danger', 'info' => 'info']
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
