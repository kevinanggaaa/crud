@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
        <a class="btn btn-primary ml-3 mt-2 mb-2" href="/pertanyaan/create" role="button">Buat Pertanyaan</a>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pertanyaan as $key => $data)
            <tr>
                <th>{{$key+1}}</th>
                <th><a href="/jawaban/{{$data->id}}">{{$data->judul}}</a></th>
                <th>{{$data->isi}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection