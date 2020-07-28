<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\VersiCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VersiCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VersiCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Versi');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/versi');
        $this->crud->setEntityNameStrings('versi', 'versi');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'kode',
                'type' => 'text'
            ],
            [
                'name' => 'is_active',
                'type' => 'check'
            ],
            [
                'name' => 'deskripsi',
                'type' => 'markdown'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(VersiCrudRequest::class);

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
                'name' => 'kode',
                'type' => 'text'
            ],
            [
                'name' => 'deskripsi',
                'type' => 'summernote',
                'options' => [
                    'toolbar' => [
                      ['style', ['style']],
                      ['font', ['bold', 'underline', 'clear']],
                      ['fontname', ['fontname']],
                      ['color', ['color']],
                      ['para', ['ul', 'ol', 'paragraph']],
                      ['table', ['table']],
                    ]
                ]
            ],
            [
                'name' => 'is_active',
                'type' => 'checkbox'
            ],
            [   
                'name'      => 'files',
                'label'     => 'Files',
                'type'      => 'upload_multiple',
                'upload'    => true,
                'disk'      => 'public',
            ],
        ]);
    }
}
