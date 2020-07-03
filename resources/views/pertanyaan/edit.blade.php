@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul Pertanyaan:</label>
                <input type="text" class="form-control" value="{{$pertanyaan->judul}}" placeholder="Input judul" name="judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi Pertanyaan:</label>
                <textarea class="form-control" placeholder="Input isi" name="isi" id="isi" rows="4" cols="50">{{$pertanyaan->isi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection