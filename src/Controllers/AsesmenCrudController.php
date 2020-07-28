<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\AsesmenCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AsesmenCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AsesmenCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Asesmen');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/asesmen');
        $this->crud->setEntityNameStrings('asesmen', 'asesmen');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'sistem_el_id',
                'type' => 'select',
                'entity' => 'sistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\SistemEl'
            ],
            [
                'name' => 'versi_id',
                'type' => 'select',
                'entity' => 'versi',
                'attribute' => 'kode',
                'model' => 'IkamiAdm\Models\Versi'
            ],
            [
                'name' => 'jadwal',
                'type' => 'datetime',
            ],
            [
                'name' => 'tempat',
                'type' => 'text',
            ],
            [
                'name' => 'asesor',
                'type' => 'select_multiple',
                'entity' => 'asesor',
                'attribute' => 'name',
                'model' => 'App\User',
            ],
            [
                'name' => 'kategori_sistem_el_id',
                'type' => 'select',
                'entity' => 'kategoriSistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\KategoriSistemEl',
            ],
            [
                'name' => 'opini_id',
                'type' => 'select',
                'entity' => 'Opini',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Opini',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(AsesmenCrudRequest::class);

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
                'name' => 'sistem_el_id',
                'type' => 'select2',
                'entity' => 'sistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\SistemEl',
                'attributes' => [
                    'disabled' => true
                ]
            ],
            [
                'name' => 'versi_id',
                'type' => 'select2',
                'entity' => 'versi',
                'attribute' => 'kode',
                'model' => 'IkamiAdm\Models\Versi',
                'attributes' => [
                    'disabled' => true
                ]
            ],
            [
                'name' => 'jadwal',
                'type' => 'datetime_picker',
            ],
            [
                'name' => 'tempat',
                'type' => 'text',
            ],
            [
                'name' => 'location',
                'type' => 'text',
            ],
            [
                'name' => 'asesor',
                'type' => 'select2_multiple',
                'entity' => 'asesor',
                'attribute' => 'name',
                'model' => 'App\User',
                'pivot' => true,
                'options'   => (function ($query) {
                     return $query->role('asesor')->get();
                 }),
            ],
            [
                'name' => 'kategori_sistem_el_id',
                'type' => 'select2',
                'entity' => 'kategoriSistemEl',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\KategoriSistemEl',
                'attributes' => [
                    'disabled' => true
                ]
            ],
            [
                'name' => 'opini_id',
                'type' => 'select2',
                'entity' => 'Opini',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Opini',
                'attributes' => [
                    'disabled' => true
                ]
            ],
        ]);
    }
}
