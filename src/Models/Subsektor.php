<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Subsektor extends Model
{
    use CrudTrait;

    protected $table = 'subsektor';
    
    protected $guarded = ['id'];
}
