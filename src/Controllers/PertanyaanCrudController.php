<?php

namespace IkamiAdm\Controllers;

use IkamiAdm\Requests\PertanyaanCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PertanyaanCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PertanyaanCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('IkamiAdm\Models\Pertanyaan');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pertanyaan');
        $this->crud->setEntityNameStrings('pertanyaan', 'pertanyaan');
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
                'name' => 'pengantar',
                'type' => 'text'
            ],
            [
                'name' => 'teks',
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
                'name' => 'aspek_id',
                'type' => 'select',
                'entity' => 'aspek',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Aspek'
            ],
            [
                'name' => 'kesiapan_id',
                'type' => 'select',
                'entity' => 'kesiapan',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Kesiapan'
            ],
            [
                'name' => 'kematangan_id',
                'type' => 'select',
                'entity' => 'kematangan',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Kematangan'
            ],
            [
                'name' => 'pilihan_id',
                'type' => 'select',
                'entity' => 'pilihan',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Pilihan'
            ],
            [
                'name' => 'jawaban_0',
                'type' => 'select',
                'entity' => 'jawaban0',
                'attribute' => 'teks',
                'model' => 'IkamiAdm\Models\Jawaban'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PertanyaanCrudRequest::class);

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
                'name' => 'pengantar',
                'type' => 'textarea'
            ],
            [
                'name' => 'teks',
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
                'name' => 'aspek_id',
                'type' => 'select2',
                'entity' => 'aspek',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Aspek'
            ],
            [
                'name' => 'kesiapan_id',
                'type' => 'select2',
                'entity' => 'kesiapan',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Kesiapan'
            ],
            [
                'name' => 'kematangan_id',
                'type' => 'select2',
                'entity' => 'kematangan',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Kematangan'
            ],
            [
                'name' => 'pilihan_id',
                'type' => 'select2',
                'entity' => 'pilihan',
                'attribute' => 'nama',
                'model' => 'IkamiAdm\Models\Pilihan'
            ],
            [
                'name' => 'jawaban_0',
                'type' => 'select2',
                'entity' => 'jawaban0',
                'attribute' => 'teks',
                'model' => 'IkamiAdm\Models\Jawaban'
            ],
        ]);
    }
}
