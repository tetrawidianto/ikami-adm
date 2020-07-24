<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Opini extends Model
{
    use CrudTrait;

    protected $table = 'opini';
    
    protected $guarded = ['id'];
    
}
