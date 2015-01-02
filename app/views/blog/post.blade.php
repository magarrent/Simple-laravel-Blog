@extends('blog.master')

@section('content')
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <!--<h2 class="subheading">Problems look mighty small from 150 miles up</h2>-->
                        <span class="meta">Posted by {{$post->author}} in: {{HTML::link('category/'.$category->category,$category->category)}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="addthis_native_toolbox"></div>
                    <p>{{$post->text}}</p>
                </div>
            </div>
        </div>
    </article>
@stop