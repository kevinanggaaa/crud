<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all($id_pertanyaan){
        $jawaban = DB::table('jawaban')->where('id_pertanyaan',$id_pertanyaan)->get();
    return $jawaban;
    }

    public static function save($data){
        $new_jawaban = DB::table('jawaban')->insert($data);
    return $new_jawaban;
    }
}

?>