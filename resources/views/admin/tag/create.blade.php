@extends('Admin.layouts.main')
@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление тега</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form method="POST" action="{{ route('admin.tag.store') }} ">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <input type="type" class="form-control" name="title"placeholder="Название тега"
                                    value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">Это поле обязательное для заполнения</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Добавить</button>
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
