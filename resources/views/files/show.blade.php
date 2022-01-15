@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7 list">
                        <h4>Name:</h4> <span>{{ $file->file }}</span>
                        <h4>Tittle:</h4> <span>{{ $file->tittle }}</span>
                        <h4>Description:</h4> <span>{{ $file->description }}</span>
                        <div class="row">
                            <a href="{{route('files.destroy' , $file->id)}}" class="btn btn-danger d-block mt-5 w-25 mr-4">Delete</a>
                            <a href="{{route('files.edit' , $file->id)}}" class="btn btn-success d-block mt-5 w-25">Edit</a>
                        </div>
                       
                    </div>
                    <div class="col-md-2 showImg">
                        <img src="https://www.pngall.com/wp-content/uploads/2018/05/Files-PNG-File.png"
                            class="img-fluid">
                        <div class="m-auto text-center pt-2">
                            <a href="{{route('files.download' , $file->id)}}"> <span>Download</span> <i class="fas fa-download"></i></a>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
