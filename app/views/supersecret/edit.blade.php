@extends('supersecret.master')

@section('content')
		<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Supersecret</a> 
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> {{$user}} &nbsp; <a href="/supersecret/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center">
        <img src="{{asset('assets/img/find_user.png')}}" class="user-image img-responsive"/>
          </li>
             <li>
                <a  href="/supersecret"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
              </li>    
              <li>
                <a  href="/supersecret/users"><i class="fa fa-user fa-3x"></i> Users</a>
              </li>
            </ul>
            <br/><br/>

            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blog administrator</h2>

                          {{Form::open(array('url' => 'supersecret/edit/'.$post->id, 'method' => 'post'))}}
                        <h3>Edit post: <strong>{{$post->title}}</strong></h3>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4">
                              {{Form::label('title', 'Title')}}
                              {{Form::text('title', $post->title, array('class' => 'form-control', 'placeholder' => 'Insert a post title...'))}}
                            </div>
                            <div class="col-md-4">
                              {{Form::label('category', 'Category')}}
                              {{Form::select('category', $categories, NULL, array('class' => 'form-control'))}}
                            </div>
                            <div class="col-md-2">
                              <div class="form-group slug_class">
                                {{Form::label('slug', 'Slug', array('class' => 'control-label'))}}
                                {{Form::text('slug', $post->slug, array('class' => 'form-control', 'placeholder' => 'lorem-ipsum'))}}
                              </div>  
                            </div>
                            <div class="col-md-2">
                              {{Form::label('author', 'Author')}}
                              {{Form::text('author', $user, array('class' => 'form-control', 'readonly' => 'true'))}}
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            {{Form::textarea('text', $post->text, array('id' => 'text'))}}
                            {{Form::submit('Edit post', array('class' => 'btn btn-success', 'id' => 'btn_edit'))}}
                          </div>
                        </div>

                        {{Form::close()}}
                       	
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
@stop