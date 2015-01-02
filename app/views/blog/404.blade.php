@extends("blog.master")

@section("content")
	<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Error 404</h1>
                        <hr class="small">
                        <span class="subheading">Content not found</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


@stop