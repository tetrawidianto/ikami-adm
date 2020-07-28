<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\PenyaringanCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PenyaringanAwalCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PenyaringanCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Penyaringan');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/penyaringan');
        $this->crud->setEntityNameStrings('penyaringan', 'penyaringan');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->setColumns([
            [
               'type' => 'select',
               'name' => 'kesiapan_id',
               'entity' => 'kesiapan',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\Kesiapan',
            ],
            [
               'type' => 'select',
               'name' => 'pilihan_id',
               'entity' => 'pilihan',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\Pilihan',
            ],
            [
               'type' => 'select',
               'name' => 'jawaban_id',
               'entity' => 'jawaban',
               'attribute' => 'teks',
               'model' => 'IkamiAdm\Models\Jawaban',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PenyaringanCrudRequest::class);

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
               'type' => 'select2',
               'name' => 'kesiapan_id',
               'entity' => 'kesiapan',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\Kesiapan',
            ],
            [
               'type' => 'select2',
               'name' => 'pilihan_id',
               'entity' => 'pilihan',
               'attribute' => 'nama',
               'model' => 'IkamiAdm\Models\Pilihan',
            ],
            [
               'type' => 'select2',
               'name' => 'jawaban_id',
               'entity' => 'jawaban',
               'attribute' => 'teks',
               'model' => 'IkamiAdm\Models\Jawaban',
            ],
        ]);
    }
}
