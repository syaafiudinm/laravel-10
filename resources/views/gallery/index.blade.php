@extends('layouts.app-front')

@section('content')
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))  
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Gallery Lists
                            <a href="{{ url('gallery/upload') }}" class="btn btn-primary float-end"> Upload Images
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($gallery as $galImg)
                                <div class="col-md-2">
                                    <div class="card border shadow p-4">
                                        <img src="{{ asset($galImg->image) }}" style="width: 70px; height: 70px;" alt="Img">
                                        <br>
                                        <a href="{{ url('gallery/'.$galImg->id.'/delete') }}" class="btn btn-danger" onclick="return confirm('Are ou sure want to delete image?');">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection