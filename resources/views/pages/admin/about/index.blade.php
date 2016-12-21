@extends('admin')

@section('title', '| За нас')
@section('content')
    <section class="content-header">
        <h1>
            Управувачки Панел - За Нас
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="adminds"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Категори</li>
        </ol>
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
                            @foreach($aboutus as $about)
                                <div class="page-header">

                                </div>
                                <p class="lead mainfont">
                                </p>
                        </div>
                        <div class="col-md-12">
                            <form method="POST" action="{{ action('AboutController@update', ['id' => $about->id]) }}"
                                  accept-charset="UTF-8">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Наслов</label>
                                    <input type="text" name="title" class="form-control"
                                           value="  {{$about -> title}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Опис</label>
                                  <textarea  name="description" rows="20" id="summernote"  class="form-control">{{$about ->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Зачувај" class="btn btn-success">
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('page-script')
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });
    </script>
@stop
@endsection