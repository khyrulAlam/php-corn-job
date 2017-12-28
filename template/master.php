<!DOCTYPE html>
<html>
  <head>
    <title>Tech World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="home.php">Tech World Subscription</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="">Profile</a></li>
	                          <li><a href="">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	  </div>

    <div class="page-content">
    	<div class="row">
  		  <div class="col-md-2">
  		  	<div class="sidebar content-box" style="display: block;">
                  <ul class="nav">
                      <!-- Main menu -->
                      <li class="current"><a href="home.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                      <li><a href=""><i class="glyphicon glyphicon-stats"></i> Subscription Growth</a></li>
                      <li><a href="addSubs.php"><i class="glyphicon glyphicon-list"></i> Add New Subscriber</a></li>
                      <li><a href="subsList.php"><i class="glyphicon glyphicon-record"></i> Subscriber List</a></li>
                      <li class="submenu">
                           <a href="#">
                              <i class="glyphicon glyphicon-list"></i> Admin
                              <span class="caret pull-right"></span>
                           </a>
                           <!-- Sub menu -->
                           <ul>
                              <li><a href="index.php">Log Out</a></li>
                          </ul>
                      </li>
                  </ul>
               </div>
  		  </div>

  		  <div class="col-md-10">
  		  	<div class="row">

  		  		<?php include($path);?>

  		  	</div>
  		  </div>

		  </div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2017 <a href='#'>Tech World</a>
            </div>

         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/tables.js"></script>
  </body>
</html>
