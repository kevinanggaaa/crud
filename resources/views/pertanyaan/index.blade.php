@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
        <a class="btn btn-primary ml-3 mt-2 mb-2" href="/pertanyaan/create" role="button">Buat Pertanyaan</a>
        <tr>
            <th style="width: 10px;">No</th>
            <th style="width: 150px;">Judul</th>
            <th>Isi</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pertanyaan as $key => $data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->judul}}</td>
                <td>{{$data->isi}}</td>
                <td>
                    <a href="/jawaban/{{$data->id}}" class="btn btn-sm btn-info">Jawaban</a>
                    <a href="/pertanyaan/{{$data->id}}" class="btn btn-sm btn-info">Detail</a>
                    <a href="/pertanyaan/{{$data->id}}/edit" class="btn btn-sm btn-default">Ubah</a>
                    <form action="/pertanyaan/{{$data->id}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection