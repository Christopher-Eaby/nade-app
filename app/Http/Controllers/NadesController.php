<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nade;

class NadesController extends Controller
{
    public function index(Request $request){
        $data['types'] = config('types');
        $data['sides'] = config('sides');
        $data['maps'] = config('maps');

        if($request->has('query')){
            $query = $request->get('query');
        }

        $nades = Nade::where('enable', true);

        if(isset($query)){
            $data['nades'] = $nades->where('title', 'LIKE', '%' . $query . '%')
                                   ->orWhere('type', 'LIKE', '%' . $query . '%')
                                   ->orWhere('map', 'LIKE', '%' . $query . '%')
                                   ->orWhere('side', 'LIKE', '%' . $query . '%')
                                   ->orWhere('description', 'LIKE', '%' . $query . '%')
                                   ->get();
        } else {
            $data['nades'] = $nades->get();
        }

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
