<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nade;

class NadesAdminController extends Controller
{

    public function create(){
        $data['nade'] = new Nade;
        $data['types'] = config('types');
        $data['sides'] = config('sides');
        $data['maps'] = config('maps');

        return view('admin.nades.edit', $data);
    }

    public function index(){
        $data['nades'] = Nade::all();
        return view('admin.nades.index', $data);
    }

    public function edit($id){

        $data['types'] = config('types');
        $data['sides'] = config('sides');
        $data['maps'] = config('maps');

        $data['nade'] = Nade::find($id);
        return view('admin.nades.edit', $data);
    }

    public function update($id, Request $request){
        $data = $request->all();
        $nade = Nade::find($id);
        $nade->update($data);
        return redirect()->back();
    }

    public function add(Request $request){
        $data = $request->all();
        $nade = Nade::create($data);
        return redirect()->back();
    }

}
