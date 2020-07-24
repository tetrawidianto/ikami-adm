<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Kesiapan extends Model
{
    use CrudTrait;

    protected $table = 'kesiapan';
    
    protected $guarded = ['id'];
    
}
