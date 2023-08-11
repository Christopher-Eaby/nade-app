<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nade;

class NadesController extends Controller
{
    public function index(){
        $data['types'] = config('types');
        $data['sides'] = config('sides');
        $data['maps'] = config('maps');

        $data['nades'] = Nade::all();
        return view('nades.index', $data);
    }

    public function view($id){
        $data['types'] = config('types');
        $data['sides'] = config('sides');
        $data['maps'] = config('maps');
        
        $data['nade'] = Nade::find($id);
        return view('nades.view', $data);
    }
}
