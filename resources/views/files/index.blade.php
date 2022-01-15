@extends('layouts.app')
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-info">
            {{ Session::get('msg') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($allFiles as $data)
                <div class="col-md-3 item">
                    <img src="https://www.pngall.com/wp-content/uploads/2018/05/Files-PNG-File.png" class="image-fluid file">
                    <a href="{{route('files.show' , $data->id)}}" class="d-block"> {{$data->tittle}} </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
