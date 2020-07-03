@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pertanyaan as $key => $data)
            <tr>
                <th>{{$data->id}}</th>
                <th>{{$data->judul}}</th>
                <th>{{$data->isi}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection