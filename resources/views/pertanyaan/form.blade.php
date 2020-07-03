@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Pertanyaan:</label>
                <input type="text" class="form-control" placeholder="Input judul" name="judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi Pertanyaan:</label>
                <textarea class="form-control" placeholder="Input isi" name="isi" id="isi" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection