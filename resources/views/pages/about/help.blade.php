@extends('main')

@section('title', '| Help page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($helper as $help)
                <div class="page-header">
                    <h3>{{$help -> title}}</h3>
                </div>
                <p class="lead mainfont">
                    {{$help -> answer }}
                </p>
            @endforeach
        </div>
    </div>
    @endsection