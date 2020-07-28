<?php

namespace IkamiAdm\Controllers;

use App\Http\Controllers\Controller;
use IkamiAdm\Models\Jawaban;
use IkamiAdm\Models\Pilihan;
use Illuminate\Http\Request;

class JawabanAjaxController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $form = collect($request->input('form'))->pluck('value', 'name');

        if (! $form['pilihan_id']) {
            return [];
        }

        if ($form['pilihan_id']) {
            $options = Pilihan::find($form['pilihan_id'])->jawaban();
        }

        if ($search_term) {
            $results = $options->where('teks', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = $options->paginate(10);
        }

        return $results;
    }

    public function show($id)
    {
        return Jawaban::find($id);
    }
}
