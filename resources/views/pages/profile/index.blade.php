@extends('main')

@section('title', '| Help page')

@section('content')
    <div class="row">
        <!-- Begin page content -->
        <div class="container">
            <div class="page-header">
                <h2>Username</h2>
                <h3>Кориснички профил</h3>
            </div>
            <ul class="nav nav-tabs">
                <p>Комплетна листа на сите ваши огласи</p>
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Мој Огласи</a></li>
                <li><a data-toggle="tab" href="#menu1"><i class="fa fa-user" aria-hidden="true"></i> Профил</a></li>
                <li><a data-toggle="tab" href="#menu2"><i class="fa fa-envelope-o" aria-hidden="true"></i>  Пораки</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id.</th>
                            <th>Слика</th>
                            <th>Наслов</th>
                            <th>Цена</th>
                            <th>Дата</th>
                            <th>Категорија</th>
                            <th>Рубрика</th>
                            <th>Обнови</th>
                            <th>Измени</th>
                            <th>Избриши</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Слика</td>
                            <td>Продавам Муда за бубрези</td>
                            <td>1230 евра</td>
                            <td>12.12.12</td>
                            <td>Автомобили</td>
                            <td>Коли</td>
                            <td><a href="#" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i>  Обнови Оглас</a></td>
                            <td><a href="#" class="btn btn-success"><i class="fa fa-pencil-square"></i>  Измени Оглас</a></td>
                            <td><a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>  Избриши Оглас</a></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Слика</td>
                            <td>Продавам Муда за бубрези</td>
                            <td>1230 евра</td>
                            <td>12.12.12</td>
                            <td>Автомобили</td>
                            <td>Коли</td>
                            <td><a href="#" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i>  Обнови Оглас</a></td>
                            <td><a href="#" class="btn btn-success"><i class="fa fa-pencil-square"></i>  Измени Оглас</a></td>
                            <td><a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>  Избриши Оглас</a></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="page-header">Кориснички Профил</div>
                                <p>Промена на податоците за корисникот</p>
                                <form action="">
                                    <div class="form-group">
                                        <label for="mail">Маил:</label>
                                        <input type="email" name="mail" id="mail" placeholder="Внеси нова маил адреса" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="btn btn-default" type="submit">Промени Маил Адреса</a>
                                    </div>
                                </form>
                            </div>
                            <!-- ./col-md-7-->
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <div class="page-header">Кориснички Профил</div>
                                <form action="">
                                    <div class="form-group">
                                        <label for="password">Стара:</label>
                                        <input type="password" name="password" id="password" placeholder="Внеси стара лозинка" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Нова Лозинка:</label>
                                        <input type="password" name="password1" id="password1" placeholder="Внеси Нова лозинка" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Повторно внеси нова лозинка:</label>
                                        <input type="password" name="password2" id="password2" placeholder="Повторно внеси нова лозинка" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="btn btn-default" type="submit">Промени Лозинка</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col-md-7-->
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="container">
                        <div class="row">
                            <div class="page-header">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection