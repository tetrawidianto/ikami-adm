<?php

namespace IkamiAdm\Traits;

use IkamiAdm\Models\Area;
use IkamiAdm\Models\KategoriSistemEl;
use IkamiAdm\Models\KematanganBaru;
use IkamiAdm\Models\Penyaringan;

trait InformasiTrait {

	public static function bootInformasiTrait()
  {
    static::created(function($obj) {
      $obj->calculate();
    });

    static::updated(function($obj) {
      $obj->calculate();
    });
  }

  public function calculate()
  {
    if($this->area->aspek->isEmpty())
    {
      if($this->area->nama == Area::KATEGORI)
      {
        $this->kategorisasi();
      }
      else
      {
        $this->compute();
      }
    }
    else
    {
      $this->sumAspek();
    }
  }

  public function compute() {
      
    $pertanyaan = $this->asesmen->getPertanyaan()->where('pertanyaan.area_id', $this->area_id)->get();

    $terjawab = $pertanyaan->whereNotNull('informasi')->count();

    $terjawab_baru = $pertanyaan->filter(function($p) {
      return $p->informasi && $p->informasi->jawaban_2;
    })->count();

    // penyaringan

    $daftar_penyaringan = Penyaringan::with('jawaban')->get();

    $threshold = 0;

    foreach($daftar_penyaringan as $penyaringan) {
    	
    	$threshold += $pertanyaan->where('kesiapan_id', $penyaringan->kesiapan_id)->filter(function($pertanyaan) use ($penyaringan) {
    		
        return $pertanyaan->nilai_jawaban < $penyaringan->jawaban->nilai;

    	})->count();

    	if($threshold > 0) {

    		$pertanyaan = $pertanyaan->whereIn('kesiapan_id', $daftar_penyaringan->pluck('kesiapan_id'));

    		break;
    	}
    }

    $skor = $pertanyaan->sum('skor_jawaban');

    // kematangan baru

	  $daftar_kematangan_baru = KematanganBaru::with('pemeringkatan')->get();

    $ekstra = array();

    $kematangan_baru_id = 1;

	  foreach($daftar_kematangan_baru as $kematangan_baru) {

      $pemeringkatan = $kematangan_baru->pemeringkatan->load(['kematangan', 'kesiapan']);

      $passed = true;

      $passing_grade = 0;

	  	foreach($pemeringkatan as $peringkat) {

	  		$threshold = 0;

	  		$kuantitas = $pertanyaan->where('kematangan_id', $peringkat->kematangan_id)->where('kesiapan_id', $peringkat->kesiapan_id)->count();

	  		$sisa = $kuantitas;

	  		foreach($peringkat->jawaban as $jawaban) {
	  			if(isset($jawaban->jumlah)) {
	  				
	  				$jumlah = $jawaban->jumlah;

            if($jumlah > $sisa) {
              $jumlah = $sisa;
            }

            $threshold += $jawaban->nilai * $jumlah;

	  				$sisa -= $jumlah;
	  			}

	  			if(!isset($jawaban->jumlah) && $sisa == $kuantitas) {
	  				
            $threshold += $jawaban->nilai * $kuantitas;

            $sisa -= $kuantitas;
	  			}

          if(!isset($jawaban->jumlah) && $sisa > 0) {
            
            $threshold += $jawaban->nilai * $sisa;

            $sisa -= $sisa;
          }
	  		}

	  		$passing_grade = $threshold * $peringkat->proporsi;

	  		$angka_kredit = $pertanyaan->where('kematangan_id', $peringkat->kematangan_id)->where('kesiapan_id', $peringkat->kesiapan_id)->sum('nilai_jawaban');

        if($angka_kredit < $passing_grade) {

	  			$passed = false;

	  		}

        $ekstra[] = [
          'kematangan_baru' => $kematangan_baru->nama,
          'kematangan' => $peringkat->kematangan->nama,
          'kesiapan' => $peringkat->kesiapan->nama,
          'kredit' => $angka_kredit,
          'passing_grade' => $passing_grade,
        ];

        if(!$passed)
        {
          break;
        }
	  	}

	  	if(!$passed) {

	  		break;
	  	}

      if($passing_grade > 0)
      {
        $kematangan_baru_id = $kematangan_baru->id;
      }

	  }

	  $this->asesmen->areaUtama()->where('area_id', $this->area_id)->first()->update([
	  	'kematangan_baru_id' => $kematangan_baru_id,
	  	'skor' => $skor,
	  	'terjawab' => $terjawab,
      'terjawab_baru' => $terjawab_baru,
      'ekstra' => $ekstra
	  ]);
  }

	public function kategorisasi()
	{
		$pertanyaan = $this->asesmen->getPertanyaan()->where('pertanyaan.area_id', $this->area_id)->get();

		$skor = $pertanyaan->sum('skor_jawaban');
		$terjawab = $pertanyaan->whereNotNull('informasi')->count();

    $terjawab_baru = $pertanyaan->filter(function($p) {
      return $p->informasi && $p->informasi->jawaban_2;
    })->count();

		$kategori_sistem_el = KategoriSistemEl::where('nilai_min', '<=', $skor)->where('nilai_mak', '>=', $skor)->first();

		$this->asesmen->update([
			'kategori_sistem_el_id' => $kategori_sistem_el->id, 
			'skor' => $skor,
			'terjawab' => $terjawab,
      'terjawab_baru' => $terjawab_baru
		]);
	}

	public function sumAspek()
	{
		$pertanyaan = $this->asesmen->getPertanyaan()->where('pertanyaan.area_id', $this->area_id)->get();

		foreach($this->area->aspek as $aspek) {

			$subpertanyaan = $pertanyaan->where('aspek_id', $aspek->id);
			
			$skor = $subpertanyaan->sum('skor_jawaban');
			$terjawab = $subpertanyaan->whereNotNull('informasi')->count();

      $terjawab_baru = $subpertanyaan->filter(function($p) {
        return $p->informasi && $p->informasi->jawaban_2;
      })->count();

			$this->asesmen->aspekSuplemen()->where('aspek_id', $aspek->id)->first()->update([
				'skor' => $skor,
				'terjawab' => $terjawab,
        'terjawab_baru' => $terjawab_baru
			]);
		}
	}
}