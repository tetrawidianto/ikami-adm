<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use CrudTrait;

    protected $table = 'pertanyaan';
    
    protected $guarded = ['id'];

    public function pilihan()
    {
        return $this->belongsTo('IkamiAdm\Models\Pilihan');
    }

    public function informasi() {
        return $this->hasOne('IkamiAdm\Models\Informasi');
    }

    public function jawaban0() {
        return $this->belongsTo('IkamiAdm\Models\Jawaban', 'jawaban_0');
    }

    public function kesiapan()
    {
        return $this->belongsTo('IkamiAdm\Models\Kesiapan');
    }

    public function kematangan()
    {
        return $this->belongsTo('IkamiAdm\Models\Kematangan');
    }

    public function getNilaiJawabanAttribute() {
        if(is_null($this->informasi)) {
            return $this->jawaban0->nilai;
        }

        if(is_null($this->informasi->jawaban_2)) {
            return $this->informasi->jawaban1->nilai;
        }

        return $this->informasi->jawaban2->nilai;
    }

    public function getSkorJawabanAttribute() {
        if(is_null($this->kesiapan_id))
        {
            return $this->nilai_jawaban;
        }

        return $this->nilai_jawaban * $this->kesiapan_id;
    }
}
