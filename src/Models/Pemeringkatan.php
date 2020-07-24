<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Pemeringkatan extends Model
{
    use CrudTrait;

    protected $table = 'pemeringkatan';
    
    protected $guarded = ['id'];
    
    protected $casts = ['jawaban' => 'object'];

    public function kematangan()
    {
        return $this->belongsTo('IkamiAdm\Models\Kematangan');
    }

    public function kesiapan()
    {
        return $this->belongsTo('IkamiAdm\Models\Kesiapan');
    }

    public function kematanganBaru()
    {
        return $this->belongsTo('IkamiAdm\Models\KematanganBaru');
    }

}
