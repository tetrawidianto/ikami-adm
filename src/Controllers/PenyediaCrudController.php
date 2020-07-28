<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\PenyediaCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CalonPenyediaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PenyediaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Penyedia');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/penyedia');
        $this->crud->setEntityNameStrings('penyedia', 'penyedia');
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
                'name' => 'nama_panjang',
                'type' => 'text'
            ],
            [
                'name' => 'alamat',
                'type' => 'text'
            ],
            [
                'name' => 'website',
                'type' => 'text'
            ],
            [
                'name' => 'email',
                'type' => 'email'
            ],
            [
                'name' => 'nomor_telepon',
                'type' => 'phone'
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PenyediaCrudRequest::class);

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
                'name' => 'nama',
                'type' => 'text'
            ],
            [
                'name' => 'nama_panjang',
                'type' => 'text'
            ],
            [
                'name' => 'alamat',
                'type' => 'text'
            ],
            [
                'name' => 'website',
                'type' => 'url'
            ],
            [
                'name' => 'email',
                'type' => 'email'
            ],
            [
                'name' => 'nomor_telepon',
                'type' => 'text'
            ]
        ]);
    }
}
