<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index($id_pertanyaan){
        $jawaban = JawabanModel::get_all($id_pertanyaan);
        return view('jawaban.index', compact('jawaban'));
    }

    public function create(){
        return view('jawaban.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data);
        if($jawaban){
            return "<h1>Jawaban berhasil diinput</h1>";
        }
    }
}
