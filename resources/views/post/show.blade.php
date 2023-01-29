@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{($date_created_at)}}
                · {{$post->comments->count()}} комм.</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/'. $post->preview_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
                {{--                <div class="row mb-5">--}}
                {{--                    <div class="col-md-4 mb-3" data-aos="fade-right">--}}
                {{--                        <img src="{{asset('assets/images/blog_post_1.jpg ')}}" alt="blog post" class="img-fluid">--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-4 mb-3" data-aos="fade-up">--}}
                {{--                        <img src="{{asset('assets/images/blog_post_2.jpg ')}}" alt="blog post" class="img-fluid">--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-4 mb-3" data-aos="fade-left">--}}
                {{--                        <img src="{{asset('assets/images/blog_post_3.jpg ')}}" alt="blog post" class="img-fluid">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="row">--}}
                {{--                    <div class="col-lg-9 mx-auto">--}}
                {{--                        <p data-aos="fade-up"><a href="#">Lorem ipsum, or lipsum as it is sometimes known,</a> is dummy--}}
                {{--                            text used in laying out printed graphic or web designs. The passage is at attributed to an--}}
                {{--                            unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s--}}
                {{--                            De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out--}}
                {{--                            printed graphic or web designs</p>--}}
                {{--                        <h2 class="mb-4" data-aos="fade-up">Blog single page</h2>--}}
                {{--                        <ul data-aos="fade-up">--}}
                {{--                            <li>What manner of thing was upon me I did not know, but that it was large and heavy and--}}
                {{--                                many-legged I could feel.--}}
                {{--                            </li>--}}
                {{--                            <li>My hands were at its throat before the fangs had a chance to bury themselves in my neck,--}}
                {{--                                and slowly--}}
                {{--                            </li>--}}
                {{--                            <li>I forced the hairy face from me and closed my fingers, vise-like, upon its windpipe.--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}

                {{--                        <blockquote data-aos="fade-up">--}}
                {{--                            <p>You are safe here! I shouted above the sudden noise. She looked away from me downhill.--}}
                {{--                                The people were coming out of their houses, astonished.</p>--}}
                {{--                            <footer class="blockquote-footer">Oluchi Mazi</footer>--}}
                {{--                        </blockquote>--}}
                {{--                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed--}}
                {{--                            graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th--}}
                {{--                            century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it--}}
                {{--                            is sometimes known, is dummy text used in laying out printed graphic or web designs</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </section>

            @if($relatedPosts->count()>0)
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Похожие статьи</h2>
                            <div class="row">
                                @foreach($relatedPosts as $relatedPost)
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <img src="{{asset('storage/'. $relatedPost->preview_image)}}" alt="related post"
                                             class="post-thumbnail">

                                        <p class="post-category">{{$relatedPost->category->title}}</p>
                                        <a href="{{route('post.show', $relatedPost->id)}}" class="blog-post-permalink">
                                            <h5
                                                class="post-title">{{$relatedPost->title}}</h5></a>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                        @endif
                        <section class="comment-section">
                            <div class="d-flex justify-content-between">
                            <h2 class="section-title mb-5" data-aos="fade-up">Комментарии ({{$post->comments->count()}}
                                )</h2>

                                <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="border-0 bg-transparent">
                                        @auth()
                                            @if(auth()->user()->likedPosts->contains($post->id))
                                                <i class="fas fa-heart"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                        @endauth
                                    </button>
                                </form>
                            </div>
                            @if($post->comments->count() != 0 )
                                <div class="card-footer card-comments  mb-5">
                                    <section class="comment-list mb-5">
                                        @foreach($post->comments as $comment)
                                            <div class="comment-text mt-4 mr-2 ml-2">
                                                <div>
                                        <span class="username font-weight-bold">
                                        TODO::$comment->user->name

                                        </span>
                                                </div>
                                                <span
                                                    class="text-muted float-right">{{$comment->DateAsCarbon->diffForHumans()}}</span>
                                                {{$comment->message}}
                                            </div>
                                        @endforeach
                                    </section>
                                </div>
                            @endif
                            @auth()
                                <form action="{{route('post.comment.store', $post->id)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12" data-aos="fade-up">
                                    <textarea name="message" id="comment" class="form-control"
                                              placeholder="Напишите комментарий"
                                              rows="10"></textarea>
                                        </div>
                                    </div>
                                    {{--                            <div class="row">--}}
                                    {{--                                <div class="form-group col-md-4" data-aos="fade-right">--}}
                                    {{--                                    <label for="name" class="sr-only">Name</label>--}}
                                    {{--                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name*">--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="form-group col-md-4" data-aos="fade-up">--}}
                                    {{--                                    <label for="email" class="sr-only">Email</label>--}}
                                    {{--                                    <input type="email" name="email" id="email" class="form-control"--}}
                                    {{--                                           placeholder="Email*" required>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="form-group col-md-4" data-aos="fade-left">--}}
                                    {{--                                    <label for="website" class="sr-only">Website</label>--}}
                                    {{--                                    <input type="url" name="website" id="website" class="form-control"--}}
                                    {{--                                           placeholder="Website*">--}}
                                    {{--                                </div>--}}
                                    {{--                            </div>--}}
                                    {{--                            <input type="hidden" name="post_id" value="{{$post->id}}">--}}
                                    <div class="row">
                                        <div class="col-12" data-aos="fade-up">
                                            <input type="submit" value="Отправить" class="btn btn-warning">
                                        </div>
                                    </div>
                                </form>
                            @endauth
                        </section>
                    </div>
                </div>
        </div>
    </main>
@endsection
