<!DOCTYPE html>
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
	<script src="js/main1.js"></script>
	<script src="js/dangnhap_dangky.js"></script>
    <script type="text/javascript">
		var page=1,category="",color="",price="",key="",sort="";
		$(document).ready(function(){
			
			$(".dropdown-item").click(function(){
				
				sort=$(this).html();
				phantrang(page,category,color,price,key,sort)
				
			});
			$("#search").keyup(function(event){
				key=$('#search').val();
				key = key.toUpperCase();
				phantrang(1,category,color,price,key,sort);
			})
			$("#slider-range").click(function(){
				price=$('#amount').val();
				price=price.substring(1);
				phantrang(1,category,color,price,key,sort);
			})
			function load(){
				phantrang(1,"","","","","");
			}
			function phantrang(page,category,color,price,key,sort){
				$.ajax({
					type:"get",
					url:"phantrang.php",
					data:{page:page,category:category,color:color,price:price,key:key,sort:sort},
					success:function(data){
						$('#products').html(data);
					}
				});
				
            	//return false;
			}
			
	
			load();	
				
			$(document).on("click","ul.phantrang li",function(){
			//alert('123');
			page =$(this).attr('page');
			phantrang(page,category,color,price,key,sort);
			$("html, body").animate({ scrollTop: 300 }, 'slow');
		});
			
			$("input[name='category[]']").click(function(){
				category='';
				$("input[name='category[]']:checked").each(function(){
					
						category+=" "+$(this).val();
				});
				if(category.length>1){
					category=category.substring(1);
				}
				phantrang(1,category,color,price,key,sort);
				//string-=" ";
			});
			
			$('input[name="color[]"]').click(function(){
				color="";
				$('input[name="color[]"]:checked').each(function(){
					color+=" "+$(this).val();
				});
				if(color.length>1){
					color=color.substring(1);
				}
				phantrang(1,category,color,price,key,sort);
			})
			
		
			
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
              <form action="" method="get" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search" id="search">
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
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="about.php">About</a>
              
            </li>
            <li class="active"><a href="shop.php">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
<!--
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
-->
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" style="cursor: pointer">Relevance</a>
                      <a class="dropdown-item" style="cursor: pointer">Name, A to Z</a>
                      <a class="dropdown-item" style="cursor: pointer">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" style="cursor: pointer">Price, low to high</a>
                      <a class="dropdown-item" style="cursor: pointer">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div id="products">  
            	<div class="row mb-5">


            	</div>
			</div>
		  
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
				<label for="all-cate" class="d-flex">
				  <input type="checkbox" id="all-cate" class="mr-2 mt-0"  name="category[]" value="" ><span>ALL</span> <span class="text-black ml-auto"></span>
				</label>
<!--
				<label for="tshirt-cate" class="d-flex">
				  <input type="checkbox" id="tshirt-cate" class="mr-2 mt-0"  name="category[]" value="AT"><span>T-Shirt</span> <span class="text-black ml-auto"></span>
				</label>
                <label for="shirts-cate" class="d-flex">
				  <input type="checkbox" id="shirts-cate" class="mr-2 mt-0" name="category[]" value="SM"><span>Shirts</span> <span class="text-black ml-auto"></span>
				</label>
                <label for="coats-cate" class="d-flex">
				  <input type="checkbox" id="coats-cate" class="mr-2 mt-0" name="category[]" value="AK"><span>Coats</span> <span class="text-black ml-auto"></span>
				</label>
                <label for="jeans-cate" class="d-flex">
				  <input type="checkbox" id="jeans-cate" class="mr-2 mt-0" name="category[]" value="JEAN"><span>Jeans</span> <span class="text-black ml-auto"></span>
				</label>
				<label for="shorts-cate" class="d-flex">
				  <input type="checkbox" id="shorts-cate" class="mr-2 mt-0" name="category[]" value="SH"><span>Shorts</span> <span class="text-black ml-auto"></span>
				</label>
-->
				  <?php
	include_once('ketnoi.php');
						  $result=mysqli_query($connect,"SELECT * FROM catalog");
						  $str="";
						  while($row=mysqli_fetch_assoc($result)){
							  $str.='<label for="'.strtolower($row['CatalogName']).'-cate" class="d-flex">
				  <input type="checkbox" id="'.strtolower($row['CatalogName']).'-cate" class="mr-2 mt-0" name="category[]" value="'.$row['CatalogID'].'"><span>'.$row['CatalogName'].'</span> <span class="text-black ml-auto"></span>
				</label>';
						  }
						  echo $str;
	?>
				
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white"  disabled=""/>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
				<label for="all-color" class="d-flex">
                  <input type="checkbox" id="all-color" class="mr-2 mt-0"  name="color[]" value=""> <span class="text-black">ALL </span>
                </label>
                <label for="white-color" class="d-flex">
                  <input type="checkbox" id="white-color" class="mr-2 mt-0" name="color[]" value="white"> <span class="text-black">WHITE </span>
                </label>
                <label for="black-color" class="d-flex">
                  <input type="checkbox" id="black-color" class="mr-2 mt-0" name="color[]" value="black"> <span class="text-black">BLACK </span>
                </label>
                <label for="blue-color" class="d-flex">
                  <input type="checkbox" id="blue-color" class="mr-2 mt-0" name="color[]" value="blue"> <span class="text-black">BLUE </span>
                </label>
				<label for="brown-color" class="d-flex">
                  <input type="checkbox" id="brown-color" class="mr-2 mt-0" name="color[]" value="brown"> <span class="text-black">BROWN </span>
                </label>
				<label for="gray-color" class="d-flex">
                  <input type="checkbox" id="gray-color" class="mr-2 mt-0" name="color[]" value="gray"> <span class="text-black">GRAY </span>
                </label>
              </div>



            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categories</h2>
                  </div>
                </div>
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>