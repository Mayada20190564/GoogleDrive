@extends('layouts.app')
@section('content')

    <div class="container col-md-6">
        <h1 class="text-center text-info">Upload File</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('files.update' , $file->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>File Tittle</label>
                        <input type="text" name="tittle" value="{{$file->tittle}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>File Description</label>
                        <input type="text" name="description" value="{{$file->description}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
