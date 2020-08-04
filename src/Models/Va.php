<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Va extends Model
{
    use CrudTrait;

    protected $table = 'va';
    
    protected $guarded = ['id'];
}
