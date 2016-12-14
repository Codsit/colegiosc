@extends('template.app')

@section('main')

    <!-- Main Content -->
    <main class="main-content">
        <div class="tc-padding">
            <div class="container">

                <!-- Main Heading -->
                <div class="container">
                    <div class="main-heading-holder">
                        <div class="main-heading">
                            <h2>Nuestras Publicaciones</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <!-- Main Heading -->
                <!-- Blog Masonry Grid -->
                <div class="simple-masonry row">

        @foreach($posts as $post)
            <!-- Masonry Event Grid -->
                <div class="simple-masonry-grid col-sm-4 col-xs-6 r-full-width">
                    <div class="blog-column tc-hover tranding-post">
                        <img src="images/blog-masonry/img-01.jpg" alt="">
                        <div class="blog-detail">
                            <ul class="meta-post">
                                <li><i class="fa fa-calendar"></i>{!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</li>
                                <li><i class="fa fa-user"></i>{{ $post->user->username }}</li>
                            </ul>
                            <h4>{{ $post->title }}</h4>
                            <p>{!! $post->summary !!}</p>
                            <div class="blog-detail-btm">
                                {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn blue sm']) !!}
                                <ul class="like-nd-comment">
                                    <li><i class="fa fa-heart-o"></i>5</li>
                                    <li><i class="fa fa-commenting-o"></i>2</li>
                                </ul>
                            </div>
                            <a class="circle-btn" href="#"><i class="fa fa-graduation-cap"></i></a>
                        </div>
                    </div>
                </div>
        @endforeach
     


                </div>
                <!-- Blog Masonry Grid -->

                <div class="col-lg-12 text-center">
                    {!! $links !!}
                </div>

            </div>
        </div>
    </main>
    <!-- Main Content -->

@stop

