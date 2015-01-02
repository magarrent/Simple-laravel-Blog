@extends('blog.master')

@section('content')
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/contact-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <hr class="small">
                        <span class="subheading">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
                @if(isset($alert))
                    <div class="alert alert-success">
                        {{$alert}}
                    </div>
                @endif
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                {{ Form::open(['url' => 'contact', 'method' => 'post'])}}
                
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{Form::label('name', 'Name')}}
                           {{Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Enter your name', 'data-validation-required-message' => 'Please enter a name'))}}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email adress', 'data-validation-required-message' => 'Please enter an email')) }}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            {{Form::textarea('message1', '', array('class' => 'form-control', 'placeholder' => 'Message', 'data-validation-required-message' => 'Please enter a message', 'rows' => '5'))}}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            {{Form::submit('Send', array('class' => 'btn btn-primary'))}}
                        </div>
                    </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection