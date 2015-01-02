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
        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
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
                        <h4>Add or edit posts </h4>
						<hr/>
                        <br/>

                        {{HTML::link('supersecret/add', 'Add post', array('class' => 'btn btn-success btn-lg'))}}
                        <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#category">Add category</button>

                        <h3>All posts</h3>
                       	<table class="table table-striped">
                       		<thead>
                       			<tr>
                       				<th>Title</th>
                       				<th>Category</th>
                       				<th>Author</th>
                       				<th>Date created</th>
                       				<th>Actions</th>
                       			</tr>
                       		</thead>
                       		<tbody>
                       			@foreach ($posts as $post)
									<tr>
										<td>{{$post->title}}</td>
										@foreach($categories as $category)
											@if ($category->id == $post->category)
												<td>{{$category->category}}</td>
											@endif
										@endforeach
										<td>{{$post->author}}</td>
										<td>{{$post->created_at}}</td>
										<td>{{HTML::link('supersecret/edit/'.$post->id,"Edit", array('class' => 'btn btn-primary btn-sm'))}}
											{{HTML::link('supersecret/delete/'.$post->id,"Delete", array('class' => 'btn btn-danger btn-sm'))}}
										</td>
									</tr>
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
        <div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
            {{Form::open(array('url' => '/supersecret/category'))}}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
              </div>
              <div class="modal-body">
                <div class="form-group category_class">
                 {{Form::label('category', 'Category', array('class' => 'control-label'))}}
                 {{Form::text('category', '', array('class' => 'form-control', 'id' => 'add_category', 'placeholder' => 'Sports, Technology...'))}}
                </div>
              </div>
              <div class="modal-footer">
                {{Form::submit('Add category', array('class' => 'btn btn-primary', 'id' => 'add_category_btn'))}}
              </div>
            {{Form::close()}}  
            </div>
          </div>  
        </div>
@stop