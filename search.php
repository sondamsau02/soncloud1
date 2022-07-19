<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang Chu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/
css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/
jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/
js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/
bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/
bootstrap-slider.min.js"></script>
<script src="js/search.js"></script>
<link rel="stylesheet" href="css/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      

</head>
<body>
	<div class="container">
         <div class="row">
         	<ul class="nav nav-tabs">
         		<li><a href="index.php"> <span class="glyphicon glyphicon-home ">HomePage</span></a></li>
         		<li><a href=""> <span class="glyphicon glyphicon-user">User </span></a></li>
         		<li><a href="contact.php"> <span class="glyphicon glyphicon-earphone">Contact </span></a></li>
                <li><a href="register.php"> <span class="fa fa-registered">Register </span></a></li>
                <li><a href="login.php"> <span class="glyphicon glyphicon-log-in"> Log-in </span></a></li>
            
               
         	</ul>
            <div class="form-search">
                <form method="GET" action="search.php">
                    <input type="text" name="user_query" placeholder="Search" />
                    <input type="submit" name="search" value="Search" />
                </form>
            </div>
      <?php

    // Khởi tạo session PHP nếu chưa khởi tạo
    if (session_id() === '')
    session_start();

    if( isset( $_SESSION['counter'] ) )
    {
        // Đếm mỗi lần truy cập
        $_SESSION['counter'] += 1;
    }
    else
    {
        // Lần đầu truy cập
        $_SESSION['counter'] = 1;
    }

    $msg = "<p>Bạn là vào truy cập ".  $_SESSION['counter'] . ' lần vào trang</p>';
    echo $msg;
?>
        </ul>
           
         

         </div>
	</div>
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse " data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse " id = "  myNavbar">
            <ul class="nav navbar-nav"> 
            	<li><a href=""> <span class="glynphicon glynphicon-home"></span>Personal</a></li>
            	<li><a href=""> <span class="glynphicon glynphicon-user"></span>Introduction</a></li>
            	<li><a href=""> <span class="glynphicon glynphicon-asterisk"></span>Break New</a></li>
            	<li><a href=""> Brand</a></li>
            	<li><a href=""> <span class="glynphicon glynphicon-envelope"></span>Contact</a></li>
                <li><a href=""> <span class="fa fa-shopping-cart"></span>shopping</a></li>
            </ul>
		</div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
   <div class="carousel-inner">
    <div class="item active">
     <img src="img/banner1.jpg" alt="ironman"style="width: 1200px; height: auto;margin: 0 auto;">
    </div>
    <div class="item">
      <img src="img/banner2.jpg" alt="Chicago" style="width: 800px; height: auto;margin: 0 auto;">
    </div>

    <div class="item">
      <img  src="img/banner3.jpg" alt="New York" style="width: 800px; height: auto;margin: 0 auto;">
    </div>
    <div class="item">
      <img  src="img/banner4.jpg" alt="New " style="width: 800px; height: auto;margin: 0 auto;">
    </div>
    <div class="item">
      <img  src="img/banner5.jpg" alt="New " style="width: 800px; height: auto;margin: 0 auto;">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</nav>


</div>
<div class="right">
                <p style="text-align:center;font-size:25px;">Seach Result</p>
                <div class="product">
                    <?php
                        $connect = mysqli_connect("localhost","root","","cloudcomputing");
		                if($connect)
                        {
                            
		                }
		                else
                        {
			                echo "Connect Failed!";
		                }
                        if (isset($_GET['search']))
                        {
                            $search= $_GET['user_query'];
                        }
                    ?>
                     <h3><?php $search ?></h3>
                    <?php 
                        $sql= "select * from product where product_name like '%{$search}%'";
                        $result= mysqli_query($connect, $sql);
                        while($row_product= mysqli_fetch_array($result))
                        {
                            $product_id= $row_product['product_id'];
                            $product_name= $row_product['product_name'];
                            $product_price= $row_product['product_price'];
                            $product_image= $row_product['product_img'];
                    ?>
                                <div class="single-product">
                                    <h3><?php echo $product_name; ?></h3>
                                    <img src="X/<?php echo $product_image; ?>" width="180px" height="180px" />
                                    <p><b>Price: <?php echo $product_price; ?></b></p>
                                    <a href="" style="color:snow; text-decoration:none">Detail</a>
                                </div>
                    <?php
                        }
                    ?>
	
</body>
</html>