@extends('main')
@section('title', '| About page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($terms as $term)
                <div class="page-header">
                    <h3>{{$term -> title}}</h3>
                </div>
                <p class="lead mainfont">
                    {{$term -> description }}
                </p>
            @endforeach
        </div>
    </div>
    @endsection