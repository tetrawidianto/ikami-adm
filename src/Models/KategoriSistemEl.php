<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class KategoriSistemEl extends Model
{
    use CrudTrait;

    protected $table = 'kategori_sistem_el';

    protected $guarded = ['id'];

    public function opiniSistemEl()
    {
        return $this->hasMany('IkamiAdm\Models\OpiniSistemEl');
    }
}
