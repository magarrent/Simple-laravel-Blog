<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>www.magarrent.com - Supersecret Administrator</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/trumbowyg.min.css')}}">

</head>
<body>
    @yield('content')

    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
   
    <script src="{{asset('assets/js/trumbowyg.min.js')}}"></script>
    <script type="text/javascript">
      $('#text').trumbowyg();
    </script>

    <script>
      $("#slug").on('input', function() {
        $.ajax({
          url : "{{asset('assets/check/slug.php')}}",
          type : "POST",
          data : {
            slug : $("#slug").val()
          },
          dateType : "json",
          success : function (data, status, jqXHR) {
            if (data == "0") {
              $(".slug_class").removeClass('has-error').addClass('has-success');
            } else {
              $(".slug_class").removeClass('has-success').addClass('has-error');
            }
          }
        });
      });
      $("#btn_add").click(function(e) {
        if ($(".slug_class").hasClass('has-error')) {
           e.preventDefault();
          alert("Slug is already taken");
        } else {
          return true;
        }
      });

      $("#add_category").on('input', function() {
        $.ajax({
          url : "{{asset('assets/check/category.php')}}",
          type : "POST",
          data : {
            category : $("#add_category").val()
          },
          dateType : "json",
          success : function (data, status, jqXHR) {
            if (data == "0") {
              $(".category_class").removeClass('has-error').addClass('has-success');
            } else {
              $(".category_class").removeClass('has-success').addClass('has-error');
            }
          }
        });
      });

      $("#add_category_btn").click(function(e) {
        if ($(".category_class").hasClass('has-error')) {
           e.preventDefault();
          alert("Category is already taken");
        } else {
          return true;
        }
      });




      $("#username").on('input', function() {
        $.ajax({
          url : "{{asset('assets/check/username.php')}}",
          type : "POST",
          data : {
            username : $("#username").val()
          },
          dateType : "json",
          success : function (data, status, jqXHR) {
            if (data == "0") {
              $(".user_class").removeClass('has-error').addClass('has-success');
            } else {
              $(".user_class").removeClass('has-success').addClass('has-error');
            }
          }
        });
      });

      $("#add_user").click(function(e) {
        if ($(".user_class").hasClass('has-error')) {
           e.preventDefault();
          alert("Username is already taken");
        } else {
          return true;
        }
      });
    </script>

</body>
</html>
