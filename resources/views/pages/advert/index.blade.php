@extends('main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Внесување на нов оглас
                <small>Item Subheading</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Portfolio Item Row -->
    <div class="row">
        <!-- New Advert-->
        <div class="col-md-8 col-lg-offset-2">
            <form action="">
                <div class="form-group">
                    <label for="category">Категорија:</label>
                    <select class="form-control js-example-basic-single" name="category">
                        <option value="">--- Избери Категорија ---</option>
                        @foreach($getcategory as $key => $value)
                         <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="pi"></div>
                <div class="form-group">
                    <label for="category">Категорија:</label>
                    <select class="form-control js-example-basic-single" name="subcategory">

                    </select>
                </div>
                       <div class="form-group">
                    <span>
                        <input type="checkbox">
                        <label>Продавам</label>
                        </span>
                    <span>
                        <input type="checkbox" checked>
                        <label>Купувам</label>
                        </span>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-block btn-info">Следен Чекор</button>
                </div>
            </form>
        </div>
    </div>
    <script>

        $(document).ready(function() {
            $('select[name="category"]').on('change', function() {
                var catID = $(this).val();
                if(catID) {
                    $.ajax({
                        url: '/advert/'+ catID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('select[name="subcategory"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="subcategory"]').empty();
                }
            });
        });

        $(document).ready(function(){
           $('select[name="subcategory"]').on('change', function(){

       document.getElementById('pi').innerHTML = "pUNK";
        });
        });


    </script>
@endsection