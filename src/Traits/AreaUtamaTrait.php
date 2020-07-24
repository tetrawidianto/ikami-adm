<?php

namespace IkamiAdm\Traits;

trait AreaUtamaTrait {

	public static function bootAreaUtamaTrait()
      {
            static::updated(function($obj) {
                  $obj->sumUp();
            });
      }

      public function sumUp() {

            $area_utama = $this->asesmen->areaUtama;

            $skor_utama = $area_utama->sum('skor');
            $terjawab_utama = $area_utama->sum('terjawab');
            $terjawab_utama_baru = $area_utama->sum('terjawab_baru');

            $opini_sistem_el = $this->asesmen->kategoriSistemEl->opiniSistemEl()->where('nilai_min', '<=', $skor_utama)->where('nilai_mak', '>=', $skor_utama)->first();

            $this->asesmen->update([
            	'opini_id' => $opini_sistem_el->opini_id, 
            	'skor_utama' => $skor_utama,
            	'terjawab_utama' => $terjawab_utama,
                  'terjawab_utama_baru' => $terjawab_utama_baru,
            ]);
  	}
}