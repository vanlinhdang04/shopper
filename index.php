<!DOCTYPE html><!DOCTYPE html><!DOCTYPE html>
<?php
	session_start();

?>
<html lang="en">
  <head>
    <title>Shoppers &mdash; E-Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
	  
	<link rel="stylesheet" href="css/Form.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function checkLogin(){
			//alert("ok");
			var tk=$("#dn_username").val();
			var mk=$("#dn_password").val();
			var flag=true;
			$("#log-in-form input.form-control").each(function(){
				if($(this).val()==""){
					$(this).addClass('ui-state-error');
					flag=false;
				}
			});
			if(flag==false){
				return flag;
			}
			$.ajax({
				url:"xulydangnhap.php",
				type:"post",
				data:{username:$("#dn_username").val(),password:$("#dn_password").val()},
				success:function(data){
					//alert(data);
					if(data==0){	
						$(".error-1").html("Username or password Invalid. Please try again.");
						$(".error-1").fadeIn(300);
						return false;
					}
					if(data==3){
						//alert(data);
						window.location.reload();
						
					}else{
						alert("Connect Admin page");
						window.location.href="admin/index.php";			}
				}
			});
			return false;
		}
		function checkSignup(){
			var flag=true;
			$("form#registration-form input").each(function(){
				if($(this).val()==""){
					$(this).addClass("ui-state-error");
				}
			});
			var testemail=/^[0-9A-Za-z]+[0-9A-Za-z_.-]*@[\w\d.]+\.\w{2,4}$/;
			var testphone=/^(08|09|03|07|05)\d{8}$/;
			var testmk=/([a-z,0-9,A-Z]){5,}$/;
			if(!testemail.test($("#dk_email").val())){
				$("#dk_email").addClass("ui-state-error");
				$("#dk_err_email").html("Email Invalid. ");
				$("#dk_err_email").fadeIn(300);
				flag=false;
			}
			if(!testphone.test($("#dk_phone").val())){
				$("#dk_phone").addClass("ui-state-error");
				$("#dk_err_phone").html("Phone Invalid");
				$("#dk_err_phone").fadeIn(300);
				flag=false;
			}
			if(!testmk.test($("#dk_password").val())){
				$("#dk_password").addClass("ui-state-error");
				$("#dk_err_password").html("Password more than 5 characters and not special characters");
				$("#dk_err_password").fadeIn(300);
				flag=false;
			}
			if($("#dk_password").val()!=$("#dk_repassword").val()){
				$("#dk_repassword").addClass("ui-state-error");
				$("#dk_err_repassword").html("Password does not match");
				$("#dk_err_repassword").fadeIn(300);
				flag=false;
			}
			if(flag==false) return flag;
			
			$.ajax({
				type:"post",
				url:"xulydangky.php",
				data:{fname:$("#dk_fname").val(),lname:$("#dk_lname").val(),email:$("#dk_email").val(),phone:$("#dk_phone").val(),
					 username:$("#dk_username").val(),password:$("#dk_password").val()},
				success:function(data){
					//alert(data);
					if(data==0){
						var tk=$("#dk_username").val(),mk=$("#dk_password").val();
						$("#registration-form").fadeOut(300);
						$("html body").append('<div id="popup_login" style="border: double 2px;width: 350px;height: 200px;position: fixed;top: 30%;left: 38%;z-index:15001;background: white;"><img src="images/success.jpg" alt="" width="50px" height="50px" style="border-radius: 50%; opacity: 1;margin-left: 150px;margin-top: 20px"><h2><p style="margin-left: 40px;margin-top: 20px">Registration success.</p></h2><input id="bt_loginnow" type="button" style="background: #FF0004;color: white;width: 120px;height: 40px;margin-left: 110px;" value="Login now"></input></div>');
						
					}else{
						if(data.indexOf("1")!=-1){
							$("#dk_err_email").html("Email already exists");
							$("#dk_err_email").fadeIn(300);
						}
						if(data.indexOf("2")!=-1){
							$("#dk_err_phone").html("Phone numbers already exists");
							$("#dk_err_phone").fadeIn(300);
						}
						if(data.indexOf("3")!=-1){
							$("#dk_err_username").html("Username already exists");
							$("#dk_err_username").fadeIn(300);
						}
					}
				}
			});
			
			
			return false;
		}
		function checkinfo()
		{
			"use strict";
			var testemail=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+\.\w{2,4}$/;
			var testphone=/^(08|09|03|07|05)\d{8}$/;
			var flag=true;
			$("form#info input").each(function(){
				if($(this).val()==""){
					$(this).addClass("ui-state-error");
					$(this).focus();
					return false;
				}
			});
			if(!testemail.test($("#infoemail").val())){
				$("#infoemail").addClass("ui-state-error");
				$("#info_err_email").html("Email Invalid. ");
				$("#info_err_email").fadeIn(300);
				flag=false;
			}
			if(!testphone.test($("#infophone").val())){
				$("#infophone").addClass("ui-state-error");
				$("#info_err_phone").html("Phone Invalid");
				$("#info_err_phone").fadeIn(300);
				flag=false;
			}
			if(flag==true){
				flag=confirm("Do you Edit User ?");
			}
			else{
				return false;
			}
			if(flag==false){
				return flag;
			}
			
			$.ajax({
				type:"post",
				url:"admin/edituser.php",
				data:{user:0,firstname:$("#infofirstname").val(),lastname:$("#infolastname").val(),
				  email:$("#infoemail").val(),phone:$("#infophone").val()},
				success:function(data){
					//alert(data);
					if(data.indexOf("1")!=-1)
						{
							alert("ERROR:Phone already exists");
							$("#infophone").addClass("ui-state-error");
							$("#infophone").focus();
							$("#info_err_phone").html("Phone Invalid");
							$("#info_err_phone").fadeIn(300);
							
						}
					if(data.indexOf("2")!=-1)
						{
							alert("ERROR:Email already exists");
							$("#infoemail").addClass("ui-state-error");
							$("#infoemail").focus();
							$("#info_err_email").html("Email Invalid. ");
							$("#info_err_email").fadeIn(300);
							
						}
					if(data==0)
						{
							alert("UPLOAD SUCCESSFULLY");
							window.location.reload();
						}
				}
			});
			
			return false;
			
		}
		$(document).ready(function(){
			$("form input").mousedown(function(){
				$(".error-1").fadeOut(300);
				
			});
			$("form input").keyup(function(){
				$(this).removeClass("ui-state-error");
			});
			$("form input").change(function(){
				$(this).removeClass("ui-state-error");
			});
			$("#dk_repassword").keyup(function(){
				$("#dk_err_repassword").fadeIn(300);
				$("#dk_err_repassword").removeClass("text-success");
				if($("#dk_password").val()!=$("#dk_repassword").val()){
					$("#dk_repassword").addClass("ui-state-error");
					$("#dk_err_repassword").html("Password does not match");
				}
				else{
					$("#dk_repassword").removeClass("ui-state-error");
					$("#dk_err_repassword").addClass("text-success");
					$("#dk_err_repassword").html("Password matches");
				}
			});
			$(document).on("click","#bt_loginnow",function(){
				$.ajax({
					type:"post",
					url:"xulydangnhap.php",
					data:{username:$("#dk_username").val(),password:$("#dk_password").val()},
					success:function(){
						window.location.reload();
					}
				});
			});
		});
	  </script>

  </head>
  <body>
	  <form class="form-info" action="" onSubmit="return checkinfo();"  id="info" name="info" method="post" >
					<h1 align="center">USER INFO</h1>
					
					<hr>
		 			 <div class="form-group row">
							<div class="col-md-6">
								<label for="infofirstname"> <b>First Name</b> </label>
								<input id="infofirstname" type="text" placeholder="Last Name" name="firstname" class="form-control" value="<?php 
					  		if(isset($_SESSION['isLogin'])){
								if($_SESSION['isLogin']==1){
									echo $_SESSION['firstname'];
								}  
						}
					  ?>">
								<div class="error">Invalid information</div>
							</div>
							<div class="col-md-6">
								<label for="infolname"> <b>Last Name</b> </label>
								<input id="infolastname" type="text" placeholder="Name" name="lastname" class="form-control" value="<?php 
					  		if(isset($_SESSION['isLogin'])){
								if($_SESSION['isLogin']==1){
									echo $_SESSION['lastname'];
								}  
						}
					  ?>">
								<div class="error">Invalid information</div>
							</div>
						</div>
						
						
					<div class="form-group">
						<div class="col-md-11">
							<label for="infousername"><b> Username</b></label>
							<input id="infousername" type="text" placeholder="Username" name="username" class="form-control" value="<?php 
					  		if(isset($_SESSION['isLogin'])){
								if($_SESSION['isLogin']==1){
									echo $_SESSION['username'];
								}  
						}
					  ?>" readonly disabled>

						</div>
					</div>
					<div class="form-group">
						<div class="col-md-11">
							<label for="infopassword"><b> Password </b></label>
							<input id="infopassword" type="password" placeholder="Password" name="password" class="form-control" value="password" readonly disabled>
								<div class="error-1">Invalid information</div>
						</div>
					</div>
		  		<div class="form-group row">
							<div class="col-md-6">
								<label for="infoemail" > <b> Email </b></label>
								<input id="infoemail" type="text" placeholder="Email" name="email" class="form-control" value="<?php 
					  		if(isset($_SESSION['isLogin'])){
								if($_SESSION['isLogin']==1){
									echo $_SESSION['Email'];
								}  
						}
					  ?>">
								<div class="error-1" id="info_err_email">Invalid information</div>
							</div>
							<div class="col-md-6">
								<label for="infophone"><b>Phone number </b></label>
								<input id="infophone" type="text" placeholder="Phone number" name="phone" class="form-control" value="<?php 
					  		if(isset($_SESSION['isLogin'])){
								if($_SESSION['isLogin']==1){
									echo $_SESSION['phone'];
								}  
						}
					  ?>">
								<div class="error-1" id="info_err_phone">Invalid information</div>
							</div>
						</div>
						<div align="center" class="selection-box">
							<input type="submit" id="submitupload" name="submitUpload" value="UPLOAD">
						</div>
	</form>
	  
	  
				<form class="form-dangnhap " action="" onSubmit="return checkLogin();"  id="log-in-form" name="log-in-form" method="post">
					<h1>Sign in</h1>
					<p>Enter your account and password to make a purchase</p>
					<hr>
					<div class="form-group">
						<div class="col-md-11">
							<label for="dn_username"><b> Username</b></label>
							<input id="dn_username" type="text" placeholder="Username" name="username" class="form-control">
<!--								<div class="error-1">Invalid information</div>-->
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-11">
							<label for="dn_password"><b> Password </b></label>
							<input id="dn_password" type="password" placeholder="Password" name="password" class="form-control">
								<div class="error-1">Invalid information</div>
						</div>
					</div>
						<div class="selection-box">
							<input type="button" class="cancel-btn" id="cancel-log-in" value="Cancel">
							<input type="submit" id="a" name="log-in-submit" value="Sign in">
							<div class="no-hope">
								
								<a href="#"> <h6 id="noacc"> No account? registration</h6> </a>
							</div>
						</div>
				</form>
	  
			
					<form class="form-dangnhap" onSubmit="return checkSignup()" id="registration-form" name="registration-form" method="post">
						<h1>Register an account</h1>
						<p>Please enter the required information below</p>
						<hr>
						
						<div class="form-group row">
							<div class="col-md-6">
								<label for="dk_fname"> <b>First Name</b><span class="text-danger">*</span> </label>
								<input id="dk_fname" type="text" placeholder="Last Name" name="firstname" class="form-control">
								<div class="error">Invalid information</div>
							</div>
							<div class="col-md-6">
								<label for="dk_lname"> <b>Last Name</b><span class="text-danger">*</span> </label>
								<input id="dk_lname" type="text" placeholder="Name" name="lastname" class="form-control">
								<div class="error">Invalid information</div>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-md-6">
								<label for="dk_email" > <b> Email </b><span class="text-danger">*</span></label>
								<input id="dk_email" type="text" placeholder="Email" name="email" class="form-control">
								<div class="error-1" id="dk_err_email">Invalid information</div>
							</div>
							<div class="col-md-6">
								<label for="dk_phone"><b>Phone number </b><span class="text-danger">*</span></label>
								<input id="dk_phone" type="text" placeholder="Phone number" name="phone" class="form-control">
								<div class="error-1" id="dk_err_phone">Invalid information</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="dk_username"> <b> Username </b><span class="text-danger">*</span>
									<i style="font-size: 14px; padding-left:5px"></i> </label>
								<input id="dk_username" type="text" placeholder="Username" name="username" class="form-control">
								<div class="error-1" id="dk_err_username">Invalid information</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="dk_password"> <b>Password</b><span class="text-danger">*</span> 
								<i style="font-size: 14px; padding-left:5px">(Minimum 5 characters)</i> </label>
								<input id="dk_password" type="password" placeholder="Password" name="password" class="form-control">
								<div class="error-1" id="dk_err_password">Invalid information</div>
							</div>
							<div class="col-md-6">
								<label for="dk_repassword"> <b>Retype password</b><span class="text-danger">*</span> </label>
								<input id="dk_repassword" type="password" placeholder="Retype password" name="psw-repeat" class="form-control">
								<div class="error-1" id="dk_err_repassword">Invalid information</div>
							</div>
						</div>
						
						<div class="selection-box">
							<input type="submit" name="log-in-submit" value="Register">
							<input type="button" class="cancel-btn" id="cancel-log-in" value="Cancel">
							
						</div>
						<div class="no-hope">
								<a href="#"> <h6 id="haveacc"> Have a account? Login</h6> </a>
					  	</div>
					</form>
			
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li>
					  <?php
					  if(isset($_SESSION['isLogin'])){
						  if($_SESSION['isLogin']==1){
							  echo '<a id="logout"><span class="icon icon-sign-out" style="cursor: pointer;"></span>';
						  }
					  }
					  else{
						  echo '<a id="btsignin"><span class="icon icon-person" style="cursor: pointer;" ></span>';
					  }
					  
					  ?>
					  </a></li>
                  <li><a href="#">
					  <?php
					  if(isset($_SESSION['isLogin'])){
						  if($_SESSION['isLogin']==1){
							  echo '<a href="#" id="name"> Hello, '.$_SESSION['nameLogin'].'</a>';
						  }
					  }
					  else{
						  echo"<a href='#'> Hello </a>";
					  }
					  ?>
					  </a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"><?php $count=0; if(isset($_SESSION['cart'])){foreach($_SESSION['cart'] as $k=>$v)$count+=$v;}; echo ($count) ?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
              <a href="index.php">Home</a>
              
            </li>
            <li >
              <a href="about.php">About</a>
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="site-blocks-cover" id="site-blocks-cover1" style="background-image: url();" data-aos="fade">
		<img name="slide" style="z-index: 1; width: 100%; padding:0px 40px 0px 40px" >
	  </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/women.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Women</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/children.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Children</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/men.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Men</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <?php
	include_once("ketnoi.php");
	$sql="SELECT * FROM products WHERE Status=1 ORDER BY ID DESC LIMIT 5";
	$query=mysqli_query($connect,$sql);
	$result=mysqli_fetch_assoc($query);
	
	$s="";
	while($result=mysqli_fetch_array($query))
	{
		$s.='<div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="'.$result['Image'].'" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">'.$result['ProductName'].'</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">'.$result['Price'].'$</p>
                  </div>
                </div>
              </div>';	
	}
	echo $s;
	mysqli_close($connect);
?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Big Sale!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class=  "col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">50% less in all items</a></h2>
            <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
            <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">273 An Duong Vuong street, District 5, Ho Chi Minh city</li>
                <li class="phone"><a href="#">039 548 2136</a></li>
                <li class="email">shoppers@gmail.com</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank" class="text-primary">Team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    <!---------------------SLIDESHOW--------------------->
  
	  <script>
		  
		var i =0;
		var images =[];
		var time = 4000;
		
		//listImages
		images[0]='images/slideshow/image1.jpg';
		images[1]='images/slideshow/image7.jpg';
		images[2]='images/slideshow/image3.jpg';
		
		function changeImage(){

    		document.slide.src=images[i];

			if(i <images.length - 1){
			  i++;
			} else {
			  i = 0;
			}
			setTimeout("changeImage()", time);
		 }
		 window.onload = changeImage();
	</script>
  </body>
</html>