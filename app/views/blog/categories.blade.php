@extends("blog.master")

@section("content")
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>All posts with category: {{$category}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1 col-md-10">

                @foreach($posts as $post)

                <div class="post-preview">
                    <a href="/post/{{$post->slug}}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                           {{substr($post->text, 0, 100)}}...
                        </h3>
                    </a>
                    <p class="post-meta">Posted by {{$post->author}} {{Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans()}}
                </div>

                @endforeach

                <!--<hr>
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>
@stop