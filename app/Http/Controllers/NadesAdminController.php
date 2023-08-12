<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
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

    public function index(Request $request){
        $data['types'] = config('types');
        $data['sides'] = config('sides');
        $data['maps'] = config('maps');

        if($request->has('query')){
            $query = $request->get('query');
        }

        if(isset($query)){
            $data['nades'] = Nade::where('title', 'LIKE', '%' . $query . '%')
                                 ->orWhere('type', 'LIKE', '%' . $query . '%')
                                 ->orWhere('map', 'LIKE', '%' . $query . '%')
                                 ->orWhere('side', 'LIKE', '%' . $query . '%')
                                 ->orWhere('description', 'LIKE', '%' . $query . '%')
                                ->get();
        } else {
            $data['nades'] = Nade::get();
        }
        
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
        $nade->enable = true;
        $nade->save();
        return redirect()->back();
    }

    public function enable($id){
        $nade = Nade::find($id);

        if($nade->enable){
            $nade->enable = false;
        } else {
            $nade->enable = true;
        }
        $nade->save();

        Session::flash($nade->title . ' Updated.');
        return redirect()->back();
    }

    public function delete($id){
        $nade = Nade::find($id);

        $nade->delete();

        Session::flash($nade->title . ' Deleted.');
        return redirect()->back();
    }
}
