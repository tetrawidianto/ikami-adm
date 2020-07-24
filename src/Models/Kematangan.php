<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Kematangan extends Model
{
    use CrudTrait;

    protected $table = 'kematangan';
    
    protected $guarded = ['id'];
    
}
