<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class DokumenDa extends Model
{
    use CrudTrait;

    protected $table = 'dokumen_da';

    protected $guarded = ['id'];
}
