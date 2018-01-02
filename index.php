<?php



?>

<!DOCTYPE html>
<html lang="en" ng-app="bulkApp" ng-controller="bulkCtrl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log File Viewer</title>

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/main.css" rel="stylesheet"> -->
    <!-- <link href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet"> -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 

    <!-- angularjs -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </head>
  <body>
 
  </body>

  <script>
    $(document).ready(function() {
    });

    // Scrolls to the selected menu item on the page
    $(function() {
      $('a[href*=\\#]:not([href=\\#])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top
                  }, 300);
                  return false;
              }
          }
      });
    });
  </script>

  </html>
