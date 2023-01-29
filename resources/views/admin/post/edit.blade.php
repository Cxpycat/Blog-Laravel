@extends('Admin.layouts.main')
@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form action="{{ route('admin.post.update', $post->id) }} "method="POST" enctype="multipart/form-data">
                    @method('patch') @csrf

                    <div class="form-group ">
                        <input type="type" class="form-control" name="title" placeholder="Название поста"
                            value="{{ $post->title }}">
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group w-50">
                        <label for="exampleInputFile">Превью</label>
                        <div class="w-50 mb-1 mt-1">
                            <img src=" {{ asset('storage/'.$post->preview_image) }}" alt="preview_image" class="w-50">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                        @error('preview_image')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изображение</label>
                        <div class="w-50 mb-1 mt-1">
                            <img src="{{ asset('storage/'.$post->main_image) }}" alt="main_image" class="w-50">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                        @error('main_image')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                        @error('content')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label>Категория</label>
                        <select class="custom-select" name="category_id">
                            <option selected="true" disabled="disabled">Категории</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label>Теги</label>
                        <select class="select2" multiple="multiple" data-placeholder="Выберите теги" name="tag_ids[]"
                            style="width: 100%">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                    {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                                    {{ $tag->title }}</option>
                            @endforeach
                        </select>
                        @error('tag_ids[]')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="row col-3">
                        <button type="submit" class="btn btn-block btn-primary">Обновить</button>
                    </div>
            </div>
            </form>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
