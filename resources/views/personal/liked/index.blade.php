@extends('Personal.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Понравившиеся посты</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Дата добавления</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->pivot->updated_at }}</td>
                                    <td>
                                        <form method="POST"
                                              action="{{ route('personal.liked.delete', $post->id) }}"><a
                                                class="text-muted"
                                                href="{{ route('admin.post.show', $post->id) }}"><i
                                                    class="fas fa-eye ml-1 mr-1"></i></a>
                                            @method('delete') @csrf
                                            <button type="submit"
                                                    class="border-0 bg-transparent text-danger"><i
                                                    class="fas fa-trash ml-1 mr-1" role="button"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
