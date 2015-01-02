@extends('supersecret.master')

@section('content')
<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Supersecret : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                            @if (isset($alert))
                                <div class="alert alert-danger">{{$alert}}</div>
                            @endif
                                {{Form::open(array('url' => 'supersecret'))}}
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            {{Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Enter your username'))}}
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            {{Form::password('password', array('class' => 'form-control', 'placeholder' => 'Enter your password'))}}
                                        </div>
                                     
                                     {{Form::submit('Login', array('class' => 'btn btn-primary form-control'))}}
                                    <hr />
                                    {{HTML::link('https://magarrent.com', 'Marc Garcia Torrent')}}
                                    {{Form::close()}}
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
@stop