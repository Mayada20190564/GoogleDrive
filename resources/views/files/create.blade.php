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
                <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>File Tittle</label>
                        <input type="text" name="tittle" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>File Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>File </label>
                        <input type="file" name="inputFile" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
