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
            <li class="active">Category</li>
        </ol>

   <div class="col-md-6">
      <div class="col-md-12">
          {!! Form::open(array('route' => 'category.store', 'class' => 'box box-primary')) !!}
          <div class="form-group">
              {{ Form::label('category', 'Внеси Име на категорија') }}
              {{ Form::text('category', null, array('class' => 'form-control', 'maxlength' => '255')) }}
          </div>
              {{ Form::submit('Внеси нова категорија', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
          {!! Form::close() !!}
      </div>
   </div>


    </section>
@endsection