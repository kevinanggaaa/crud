@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Id Pertanyaan</th>
            <th>Isi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jawaban as $key => $data)
            <tr>
                <th>{{$data->id}}</th>
                <th>{{$data->id_pertanyaan}}</th>
                <th>{{$data->isi}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection