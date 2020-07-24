<?php

namespace IkamiAdm\Traits;

use IkamiAdm\Models\Area;
use IkamiAdm\Models\Badge;
use IkamiAdm\Models\Status;

trait AsesmenTrait {
	public static function bootAsesmenTrait()
    {
        static::created(function($obj) {
            $obj->deploy();
        });
    }

    public function deploy() {

        $pertanyaan = $this->versi->pertanyaan;

        $total_utama = 0;
        $total_suplemen = 0;
        
        foreach($this->versi->area()->with('aspek')->get() as $area) {
            if($area->aspek->isEmpty())
            {
                if($area->nama == Area::KATEGORI)
                {
                    $this->update(['total' => $pertanyaan->where('area_id', $area->id)->count()]);
                }
                else
                {
                    $total = $pertanyaan->where('area_id', $area->id)->count();
                    
                    $this->areaUtama()->create([
                        'area_id' => $area->id,
                        'total' => $total
                    ]);
                    
                    $total_utama += $total;
                }
            }
            else 
            {
                foreach($area->aspek as $aspek)
                {
                    $total = $pertanyaan->where('aspek_id', $aspek->id)->count();

                    $this->aspekSuplemen()->create([
                        'aspek_id' => $aspek->id,
                        'total' => $total
                    ]);

                    $total_suplemen += $total;
                }
            }
        }

        $this->update([
            'total_utama' => $total_utama,
            'total_suplemen' => $total_suplemen
        ]);

        $this->setStatus(Status::SA, Badge::SA);
  	}
}