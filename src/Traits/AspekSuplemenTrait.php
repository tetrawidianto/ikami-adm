<?php

namespace IkamiAdm\Traits;

trait AspekSuplemenTrait {

	public static function bootAspekSuplemenTrait()
      {
            static::updated(function($obj) {
                  $obj->sumUp();
            });
      }

      public function sumUp() {

            $suplemen = $this->asesmen->aspekSuplemen;

            $terjawab_suplemen = $suplemen->sum('terjawab');
            $terjawab_suplemen_baru = $suplemen->sum('terjawab_baru');

            $this->asesmen->update([
            	'terjawab_suplemen' => $terjawab_suplemen,
                  'terjawab_suplemen_baru' => $terjawab_suplemen_baru,
            ]);
  	}
}