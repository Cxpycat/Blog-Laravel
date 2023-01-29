@extends('Admin.layouts.main')
@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $post->title }}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">

                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $post->id }}</td>
                                        </tr>


                                        <tr>
                                            <td>Название</td>
                                            <td>{{ $post->title }}</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ route('admin.post.delete', $post->id) }}">
                                                    <a class="text-info"
                                                        href="{{ route('admin.post.edit', $post->id) }}"><i
                                                            class="fas fa-pen ml-1 mr-1"></i></a>


                                                    @method('delete') @csrf
                                                    <button type="submit" class="border-0 bg-transparent text-danger"><i
                                                            class="fas fa-trash ml-1 mr-1" role="button"></i></button>

                                                </form>
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
