
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Dan Fulcher | Web Developer</title>

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  </head>

  <body>
  
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <img class="logo" src="images/logo.png"/>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="header-text center">Thank you for getting in touch<br/>
            <span>I will reply as soon as possible</span></p>
          </div>
        </div>
        <div class="row">
          <a class="header-button" href="index.php">Back home</a>
        </div>
      </div>    
    </div>

    

    <script>
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                }, 2000);
                return false;
            }
        }
    });
    </script>
    
  </body>
</html>
