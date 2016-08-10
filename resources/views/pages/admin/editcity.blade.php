@extends('admin')

@section('title', '| Промени Име на Град')

@section('content')
    <section class="content-header">
        <h1>
            Управувачки Панел - Категории
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="adminds"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Категори</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <hr style="width: 100%; color: black; height: 1px; background-color:#3C8DBC;" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h3><strong>Едитирање на категорија</strong> "{{$city-> cityname}}"</h3>
                </div>
            </div>
            <div class="col-md-12">
                {!! Form::model($city,['route' =>['city.update', $city->id], 'method' => 'put']) !!}
                {{Form::label('cityname', 'Промени Име на Град')}}
                {{ Form::text('cityname', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                {{ Form::submit('Промени Име на Град', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                {!! Form::close() !!}
            </div>
        </div>

    </section>
    @endsection

 