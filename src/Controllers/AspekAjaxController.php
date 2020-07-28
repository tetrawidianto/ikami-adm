<?php

namespace IkamiAdm\Controllers;

use App\Http\Controllers\Controller;
use IkamiAdm\Models\Aspek;
use Illuminate\Http\Request;

class AspekAjaxController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $form = collect($request->input('form'))->pluck('value', 'name');

        if (! $form['area_id']) {
            return [];
        }

        if ($form['area_id']) {
            $options = Aspek::where('area_id', $form['area_id']);
        }

        if ($search_term) {
            $results = $options->where('nama', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = $options->paginate(10);
        }

        return $results;
    }

    public function show($id)
    {
        return Aspek::find($id);
    }
}
