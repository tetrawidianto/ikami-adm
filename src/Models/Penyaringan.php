<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Penyaringan extends Model
{
    use CrudTrait;

    protected $table = 'penyaringan_awal';
    
    protected $guarded = ['id'];
    
    public function kesiapan()
    {
        return $this->belongsTo('IkamiAdm\Models\Kesiapan');
    }

    public function jawaban()
    {
        return $this->belongsTo('IkamiAdm\Models\Jawaban');
    }

    public function pilihan()
    {
        return $this->belongsTo('IkamiAdm\Models\Pilihan');
    }

}
