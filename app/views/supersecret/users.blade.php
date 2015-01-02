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

                        {{HTML::link('supersecret/users/add', 'Add user', array('class' => 'btn btn-success btn-lg'))}}

                        <h3>All users</h3>
                       	<table class="table table-striped">
                       		<thead>
                       			<tr>
                       				<th>Name</th>
                       				<th>Username</th>
                       				<th>Email</th>
                       				<th>Actions</th>
                       			</tr>
                       		</thead>
                       		<tbody>
                       			@foreach ($users as $user)
                              @if ($user->name != $name)
                                <tr>
                                  <td>{{$user->username}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{HTML::link('supersecret/users/delete/'.$user->id,"Delete", array('class' => 'btn btn-danger btn-sm'))}}
                                  </td>
                                </tr>
                              @endif
                       			@endforeach
                       		</tbody>
                       	</table>
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