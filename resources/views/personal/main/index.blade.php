@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Панель инструментов</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3 >Настройка</h3>
                                <p style="opacity: 0">Настройка</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <a href="{{ route('admin.user.index') }}" class="small-box-footer">Подробнее   <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>123</h3>
                                <p>Понравившиеся посты</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <a href="{{ route('admin.post.index') }}" class="small-box-footer">Подробнее   <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>123</h3>
                                <p>Коментарии</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <a href="{{ route('admin.category.index') }}" class="small-box-footer">Подробнее   <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                </div>

            </div>
        </section>

    </div>
@endsection
