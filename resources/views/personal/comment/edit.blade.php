@extends('Personal.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение комментария</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <form action="{{ route('personal.comment.update', $comment->id) }} " method="POST" class="w-50">
                        @method('patch') @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea type="type" class="form-control" name="message" placeholder="Текст комментария">{{ $comment->message }}</textarea>
                                    @error('message')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Обновить</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

    </div>
    </section>

    </div>
@endsection
