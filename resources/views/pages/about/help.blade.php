@extends('main')

@section('title', '| Help page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($help as $hp)
                <div class="page-header">
                    <h3>{{$hp -> title}}</h3>
                </div>
                <p class="lead mainfont">
                    {{$hp -> answer }}
                </p>
            @endforeach
        </div>
    </div>
    @endsection