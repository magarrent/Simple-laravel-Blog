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
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> {{$name}} &nbsp; <a href="/supersecret/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <h4>Add or edit users </h4>
						<hr/>
                        <br/>
                       	{{Form::open(array('url' => 'supersecret/users/add'))}}
                          <div class="col-md-2">
                            <div class="form-group user_class">
                              {{Form::label('username', 'Username', array('class' => 'control-label'))}}
                              {{Form::text('username', '', array('class' => 'form-control'))}}
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              {{Form::label('password', 'Password')}}
                              {{Form::password('password', array('class' => 'form-control'))}}
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              {{Form::label('name', 'Name')}}
                              {{Form::text('name', '', array('class' => 'form-control'))}}
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              {{Form::label('email', 'Email')}}
                              {{Form::email('email', '', array('class' => 'form-control'))}}
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              {{Form::label('submit', 'Submit')}}
                              {{Form::submit('Add user', array('class' => 'btn btn-primary form-control', 'id' => 'add_user'))}}
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