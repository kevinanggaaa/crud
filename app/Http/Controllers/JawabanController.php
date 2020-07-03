<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index($pertanyaan_id){
        $jawaban = DB::table('jawaban')
        ->where('pertanyaan_id',$pertanyaan_id)
        ->get(); 
        return view('jawaban.index', compact('jawaban','pertanyaan_id'));
    }

    public function store(Request $request,$pertanyaan_id){
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data);
        if($jawaban){
            return redirect('jawaban/'.$pertanyaan_id);
        }
    }
}
