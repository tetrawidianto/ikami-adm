<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\AreaCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AreaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AreaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Area');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/area');
        $this->crud->setEntityNameStrings('area', 'area');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(AreaCrudRequest::class);

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
                'name' => 'versi',
                'type' => 'select2_multiple',
                'entity' => 'versi',
                'attribute' => 'kode',
                'model' => 'IkamiAdm\Models\Versi',
                'pivot' => true
            ],
            [
                'name' => 'badge',
                'type' => 'text'
            ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
