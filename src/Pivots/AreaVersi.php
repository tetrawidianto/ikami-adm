<?php

namespace IkamiAdm\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AreaVersi extends Pivot
{

    public function pertanyaan()
    {
    	return $this->hasManyThrough('IkamiAdm\Models\Pertanyaan', 'IkamiAdm\Models\Area');
    }
}
