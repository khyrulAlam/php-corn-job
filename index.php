<?php
    include 'App/init.php';
    $db = new Database();
    Session::init();
    $username = Session::get('username');

    if(!empty($username)){
      header('location:/home.php');
    };


    $data = [];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $user = trim($_POST['username']);
      $pass = trim($_POST['password']);
      if(!empty($user) && !empty($pass)){
        $check = array(
          'where' => array('username' => $user,'password'=> md5($pass))
        );
        $result = $db->isLogin('admin_login',$check);
        if (!$result) {
          $data['error'] = "User Or Password doesn't match";
        }else{
          $username = $result[0]['admin_name'];
          Session::set('username',$username);
          header('location:/home.php');
        }
      }else{
        $data['error'] = "Please Input Your User Name And Password";
      }
    }


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="assets/viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1 class="text-center"><a href="index.html">Tech World Subscription</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
      <?php if(isset($data['error'])){?>
        <div class="col-md-6 col-md-offset-3">
          <div class="alert alert-danger" role="alert">
            <span style="font-size:13px"><?= $data['error'];?></span>
          </div>
        </div>
      <?php } ?>
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
                      <form action="" method="post">
                        <input class="form-control" type="text" placeholder="E-mail address" name="username">
  			                <input class="form-control" type="password" placeholder="Password" name="password">
  			                <div class="action">
  			                    <button class="btn btn-primary signup" type="submit">Login</button>
  			                </div>
                      </form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
