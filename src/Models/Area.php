<?php 

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Area extends Model 
{
	use CrudTrait;

	protected $table = 'area';

	protected $guarded = ['id'];

    const KATEGORI = 'Kategori Sistem Elektronik';

	public function versi()
    {
        return $this->belongsToMany('IkamiAdm\Models\Versi')->withTimestamps();
    }

    public function aspek()
    {
        return $this->hasMany('IkamiAdm\Models\Aspek');
    }

    public function pertanyaan()
    {
        return $this->hasMany('IkamiAdm\Models\Pertanyaan');
    }

    public function informasi()
    {
        return $this->hasMany('IkamiAdm\Models\Informasi');
    }

    public function areaUtama()
    {
        return $this->hasOne('IkamiAdm\Models\AreaUtama');
    }
}