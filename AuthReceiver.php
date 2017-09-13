<?php




?>

POST /oauth2/v4/token HTTP/1.1
Host: www.googleapis.com
Content-Type: application/x-www-form-urlencoded

code=4/P7q7W91a-oMsCeLvIaQm6bTrgtp7&
client_id=your_client_id&
client_secret=your_client_secret&
redirect_uri=https://oauth2.example.com/code&
grant_type=authorization_code






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <title>Google Calendar</title>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '816413675196416',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="index.html">Google Calendar</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
           <li>
                        <a href="index.html" >Home</a>
                    </li>

                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-color: #707070">
        <div class="container">
               <h3></h3>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Google Calendar</h1>
                          

                        <hr class="small">
                        <span class="subheading">Google API</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                	<form action="https://oauth2.example.com/code" method="post" enctype ="application/x-www-form-urlencoded">

                		code : <input type="text" name = "code" value="<?=$_GET['code']?>"><br>
                		ID : <input type="text" name = "di" value="846111269274-s02sa9ji82ketruuee6h1vdatn5oq1q6.apps.googleusercontent.com"><br>
                		Secret : <input type="text" name = "secret" value="8KuuUWKLr3n7hnuMUmR9MkWJ"><br>
                		Redirect_URL : <input type="text" name = "redirect_url" value="http://http://myprogramapi.epizy.com/AuthReceiver.php"><br>
                		Grant_Type : <input type="text" name = "grant_type" value=""><br>
                		<input type = "submit">

                	</form>
                      <h2 class="post-title" style="color:green;" > API  <fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>  </h2>
                     
                                    <div>
    &emsp; 

                        </div>
                       
                    </a>
              </div>
               
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://github.com/yeopdodo86">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/seung-yeop-lee-511492113/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="malito:yeopdodo86@gmail.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                                       <p class="copyright text-muted">Copyright &copy;  2017</p>

                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>


  <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.intro-header', {
          duration: 1500,
          origin:'top',
          distance:'300px'
        });
        sr.reveal('.container', {
          duration: 2000,
          origin:'bottom',
          distance:'300px'
        });

    </script>




</body>

</html>
