@extends('admin')

@section('title', '| Недвижности')

@section('content')
    <section class="content-header">
        <h1>
            Управувачки Панел - Градови
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="adminds"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">City</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <hr style="width: 100%; color: black; height: 1px; background-color:#3C8DBC;" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
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

                    {!!Form::open(array('route' => 'property.store'))!!}

                    {{ Form::label('name', 'Внеси тип на недвижност:') }}
                    {{ Form::text('name', null, array('class' => 'form-control', 'maxlength' => '255')) }}

                    {{Form::label('property_id', 'Category:')}}
                    <select name="property_id" id="" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>

                    {{ Form::submit('Внеси', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                    {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </div>
            <div class="col-md-12">
                <hr style="width: 100%; color: black; height: 1px; background-color:#3C8DBC;" />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Листа На Градови</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Град</th>
                                <th>Промени</th>
                                <th>Избриши</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($property as $estate)
                                <tr>
                                    <td>{{$estate-> id}}</td>
                                    <td>{{$estate-> name}}</td>
                                    <td>
                                        {{$estate->property_id}}
                                        {{--{{ Form::open(['method' => 'GET', 'route' => ['city.edit', $c->id]]) }}--}}
                                        {{--{{ Form::submit('Edit', ['class' => 'btn btn-info ']) }}--}}
                                        {{--{{ Form::close() }}--}}
                                    </td>
                                    <td>
                                        {{--{{ Form::open(['method' => 'DELETE', 'route' => ['city.destroy', $c->id]]) }}--}}
                                        {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger ']) }}--}}
                                        {{--{{ Form::close() }}--}}
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