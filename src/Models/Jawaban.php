<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use CrudTrait;

    protected $table = 'jawaban';
    
    protected $guarded = ['id'];
}
