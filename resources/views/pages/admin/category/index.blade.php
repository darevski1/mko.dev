﻿﻿@extends('admin')
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
        <div class="col-md-6">
        {{--alert--}}
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success:</strong> {{ Session::get('success') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(array('route' => 'category.store')) !!}
            {{ Form::label('title', 'Внеси Име на Категорија') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'maxlength' => '255')) }}
            {{ Form::submit('Внеси нова Категорија', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {{Form::close()}}
        </div>
        <div class="col-md-6">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </div>
        <div class="col-md-12">
            <hr style="width: 100%; color: black; height: 1px; background-color:#3C8DBC;" />
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-tag" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Вкупени Број на Категории</span>
                        <span class="info-box-number">{{$category->count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Листа На Категории</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Категорија</th>
                                <th>Дата на Внесување</th>
                                <th>Дата на Промена</th>
                                <th>Промени</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $cat)
                                <tr>
                                    <td>{{$cat -> id}}</td>
                                    <td>{{$cat -> title}}</td>
                                    <td>{{date("h:i d-m-Y", strtotime($cat->created_at))}}</td>
                                    <td>{{date("h:i d-m-Y", strtotime($cat->updated_at))}}</td>
                                    <td>
                                        {{ Form::open(['method' => 'GET', 'route' => ['category.edit', $cat->id]]) }}
                                        {{ Form::submit('Edit', ['class' => 'btn btn-info ']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
         </section>
@endsection