<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  	<meta charset="utf-8">
<title>Shop - Sauce Site</title> 
</head>
<?php include '../config/sessionN.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: ../Shop/index.php');
  }

?>

</br></br></br></br></br></br></br></br>
<body style="background-color:rgba(255,0,0,0.5);" class="hold-transition register-page">
<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
            <p>".$_SESSION['error']."</p> 
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
            <p>".$_SESSION['success']."</p> 
        ";
        unset($_SESSION['success']);
      }
    ?>
  <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Souscrivez à une inscription <small>It's free today maybe not tomorrow!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="registerP.php" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lastname" id="last_name" class="form-control input-sm" placeholder="Last Name" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="repassword" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="address" id="address" class="form-control input-sm" placeholder="Your Address">
			    					</div>
			    				</div>
								
			    			</div>
			    			
			    			<input type="submit" name="signup" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
                        <br>
                         <a href="../Shop/index.php">I already have a membership</a><br>
                          <a href="../Shop/index.php"><i class="fa fa-home"></i> Home</a>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
   
	

</body>
</html>

