@extends('main')

@section('title', '| Help page')

@section('content')
    <div class="row">
        <div class="col-md-12">
           @foreach ($privacy as $pr)
            <div class="page-header">
                <h3>{{$pr -> title}}</h3>
            </div>
            <p class="lead mainfont">
                {{$pr-> description}}
            </p>

            @endforeach
        </div>
    </div>
@endsection