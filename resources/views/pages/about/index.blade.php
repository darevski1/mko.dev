@extends('main')
@section('title', '| За нас')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($aboutus as $about)
                <div class="page-header">
                    {{$about -> title}}
                </div>
                <p class="lead mainfont">
                    {{$about -> description}}
                </p>
            @endforeach
        </div>
    </div>
@endsection