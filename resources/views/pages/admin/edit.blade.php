﻿@extends('admin')
@section('title', '| Управувачки Панел - Category')
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
                <h3><strong>Едитирање на категорија</strong> "{{$category -> title}}"</h3>
            </div>
        </div>
        </div>

        {!! Form::open(['route' => ['category.update', $category->id], 'method' => 'delete']) !!}
        {{ Form::label('title', 'Промени го името на категоријата')}}
        {{ Form::text('title', null, array('class' => 'form-control', 'maxlength' => '255')) }}

        {{ Form::submit('Промени Категорија', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
        {!! Form::close() !!}
    </section>
@endsection