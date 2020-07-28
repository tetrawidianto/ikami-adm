<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\AspekCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AspekCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AspekCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Aspek');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/aspek');
        $this->crud->setEntityNameStrings('aspek', 'aspek');
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
                'name' => 'area_id',
                'type' => 'select',
                'entity' => 'area',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Area'
            ],
            [
                'name' => 'badge',
                'type' => 'text'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(AspekCrudRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->addFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    private function addFields()
    {
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
                'name' => 'area_id',
                'type' => 'select2',
                'entity' => 'area',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Area'
            ],
            [
                'name' => 'badge',
                'type' => 'text'
            ],
        ]);
    }
}
