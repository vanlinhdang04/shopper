<!DOCTYPE html>
<?php session_start();

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
	<script src="js/dangnhap_dangky.js"></script>
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
<!--		<div class="error-1">Invalid information</div>-->
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
					<a href="#"> <h6>Forgot password?</h6> </a>
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
                  <li><?php
					  if(isset($_SESSION['isLogin'])){
						  if($_SESSION['isLogin']==1){
							  echo '<a id="logout"><span class="icon icon-sign-out" style="cursor: pointer;"></span></a>';
						  }
					  }
					  else{
						  echo '<a id="btsignin"><span class="icon icon-person" style="cursor: pointer;" ></span></a>';
					  }
					  
					  ?></li>
                  <li><a href="#"><?php
					  if(isset($_SESSION['isLogin'])){
						  if($_SESSION['isLogin']==1){
							  echo '<a href="#" id="name"> Hello, '.$_SESSION['nameLogin'].'</a>';
						  }
					  }
					  else{
						  echo"<a href='#'> Hello </a>";
					  }
					  ?></a></li>
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
            <li >
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form id="listcart" class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
					<th class="product-name">Size</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
<!--
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/ao thun/AT01.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Top Up T-Shirt</h2>
                    </td>
                    <td>$49.00</td>
					<td>M</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/ao thun/AT05.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Polo Shirt</h2>
                    </td>
                    <td>$49.00</td>
					<td>L</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
-->
			<?php
	require_once('ketnoi.php');
			$str="";
			$total=0;
			if(isset($_SESSION['cart'])){
				foreach($_SESSION['cart'] as $k=>$v){
					//echo $k;
					if(isset($_SESSION[$k])){
						$sql="SELECT * FROM products WHERE ProductID='$k'";
						foreach($_SESSION[$k] as $sz=>$sl){
							//echo ($k." ".$sz." ".$sl."<br>".$sql);
							//echo $sql;
							$result=mysqli_query($connect,$sql)or die("loi truy van");
							if(mysqli_num_rows($result)<1) die("Loi gio hang");
							$row=mysqli_fetch_assoc($result);
							$str.='<tr><td class="product-thumbnail">';
							$str.='<img src="'.$row["Image"].'" alt="Image" class="img-fluid">';
							$str.='</td>';
							$str.='<td class="product-name">';
							$str.='<h2 class="h5 text-black">'.$row["ProductName"].'</h2>';
							$str.='</td>';
							$str.='<td>$'.$row["Price"].'</td>';
							$str.='<td>'.mb_strtoupper($sz,"utf8").'</td>';
							$str.='<td>';
							$str.='<div class="input-group mb-3" style="max-width: 120px;">';
							$str.='<div class="input-group-prepend">';
							$str.='<button class="btn btn-outline-primary js-btn-minus minuss" type="button" name="'.$k."-".$sz.'">&minus;</button>';
							$str.='</div>';
							$str.='<input type="text" class="form-control text-center" value="'.$sl.'" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" id="'.$k."-".$sz.'">';
							$str.='<div class="input-group-append">';
							$str.='<button class="btn btn-outline-primary js-btn-plus pluss" type="button" name="'.$k."-".$sz.'">&plus;</button>';
							$str.='</div>';
							$str.='</div>';

							$str.='</td>';
							$str.='<strong><td class="totalprice" title="total'.$k."-".$sz.'" style="color:red;">$'.($row["Price"]*$sl).'</td></strong>';
							$str.='<td><a href="cart.php" class="btn btn-primary btn-sm bt-delproduct" name="'.$k."-".$sz.'">X</a></td>';
							$str.='</tr>';
							$total+=($row["Price"]*$sl);
							mysqli_free_result($result);
						}
					}
				}
						  echo $str;
						  mysqli_close($connect);
			}
			?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block" onClick="window.location.reload(true)">Update Cart</button>
              </div>
              <div class="col-md-6">
                <a href="shop.php"><button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black subtotal">$<?php echo($total)  ?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black total">$<?php echo($total)  ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="checkCart()">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
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
  <script src="js/xulycart.js"></script>
	  <script type="text/javascript">
		function checkCart(){
			var total=<?php echo $total ?>;
			//alert(total);
			if(total==0){
				alert("Please purchase. ");
			}
			else{
				window.location="checkout.php";
			}
		}
	</script>
  </body>
</html>