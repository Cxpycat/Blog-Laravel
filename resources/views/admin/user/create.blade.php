@extends('Admin.layouts.main')
@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form method="POST" action="{{ route('admin.user.store') }} ">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <input type="type" class="form-control" name="name" placeholder="Имя"
                                    value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                       value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" name="password" placeholder="пароль">--}}
{{--                                @error('password')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

                            <div class="form-group w-50">
                                <select class="custom-select" name="role">
                                    <option selected="true" disabled="disabled">Роль</option>
                                    @foreach ($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ $id == old('role_id') ? 'selected' : '' }}>{{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">{{$message}}</div>
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
