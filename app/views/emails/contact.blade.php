<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
		<div class="col-md-12">
		<div class="page-header">
		  <h1>New web message <small>www.magarrent.com</small></h1>
		</div>
		<div class="panel panel-primary">
		  <div class="panel-heading">
		  	<h3 class="panel-title">Message details</h3>
		  </div>
		  <div class="panel-body">
		    <table class="table table-striped">
				<tbody>
					<tr>
						<td>Name:</td>
						<td>{{$name}}</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>{{$email}}</td>
					</tr>
					<tr>
						<td>Message:</td>
						<td>{{$message1}}</td>
					</tr>
				</tbody>
			</table>
		  </div>
		</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>