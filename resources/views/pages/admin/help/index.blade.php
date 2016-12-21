@extends('admin')

@section('title', '| ЧПП - креирање на ново прашање')

@section('content')
    <section class="content-header">
        <h1>
            Управувачки Панел - @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li><a href="adminds"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Категори</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <hr style="width: 100%; color: black; height: 1px; background-color:#3C8DBC;">
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        @if(Session::has('success'))

                            <div class="alert alert-success" role="alert">
                                <strong>Success:</strong> {{ Session::get('success') }}
                            </div>
                        @endif
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Erorrs:</strong>
                                <ul>
                                    @foreach($errors ->all()as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <div class="col-md-12">
                                <h1>Додади ново прашање</h1>

                                {!! Form::open(array('route' => 'help.create.store')) !!}
                                    {{Form::label('title', 'Наслов на прашање')}}
                                    {{Form::text('title', null, array('class' => 'form-control'))}}

                                    {{Form::label('answer', 'Промени опис на прашање')}}
                                    {{Form::textarea('answer', null, array('class' => 'form-control', )) }}
                                    {{ Form::submit('Зачувај', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                                {!! Form::close() !!}

                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr style="width: 100%; color: black; height: 1px; background-color:#3C8DBC;">
                                    </div>
                                </div>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Листа на сите прашања</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        @foreach($helper as $help)
                                        <tbody><tr>
                                            <th>{{$help -> id}}</th>
                                            <th>{{$help -> title}}</th>
                                            <th>
                                                <button type="button" class="btn btn-info pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> Промени</button>
                                                <button type="button" id="showmenu" class="btn btn-danger pull-right"><i class="fa fa-trash" aria-hidden="true"></i> Избриши</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="menu" style="display: none;">
                                                {!! Form::model($helper,['route' =>['help.create.update', $help->id], 'method' => 'put']) !!}
                                                {{Form::label('title', 'Промени наслов на прашање')}}
                                                {{ Form::text('title', $help->title, array('class' => 'form-control', 'value' => $help -> title, 'maxlength' => '255',)) }}
                                                {{Form::label('answer', 'Промени опис на прашање')}}
                                                {{ Form::textarea('answer', $help->answer,  array('class' => 'form-control', )) }}
                                                {{ Form::submit('Промени', array('class' => 'btn btn-success pull-right', 'style' => 'margin-top: 20px;')) }}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection