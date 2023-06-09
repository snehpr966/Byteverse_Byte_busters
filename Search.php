
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicine Store</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

     <!-- Title Icon -->
    <link rel="icon" href="images\icon.ico" alt="Logo">

</head>
<body id="page-top">


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

      <div class="col-lg-3 text-center">
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo" alt="Logo"></a>
      </div>

      <div class="col-lg-6 text-center">
     <form class="form-inline" action="Search.php" method="POST">
          <input class="form-control mr-sm-2" type="Search" placeholder="Search Product" autocomplete="off" onkeyup="showHint(this)" name="search" id="mytext" style="width: 450px">
          <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
          
       </form>   
      </div>


      <div class="col-lg-3 collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="home.php"><img src="images/home.png" class="size2"></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="Cart.html"><img src="images/cart.png" class="size"></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="login.html"><img src="images/user.png" class="size2"></a>
          </li>
        </ul>
       
      </div>

    </nav>

  
   
    
        <!--Banner Section Starts-->
    <section class="banner">
       
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/first.jpg" alt="First slide">
                </div>
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/second.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/third.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
       
          <div class="collapse navbar-collapse" id="navbarResponsive" style="padding-left: 70px">
          <ul class="navbar-nav mr-auto nav">
            <li class="nav-item dropdown">
              
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Health
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="home.php">MEDICINE & HEALTH</a>
                  <a class="dropdown-item" href="babyfood.php">BABY CARE</a>
                  <a class="dropdown-item" href="orthopaedic.php">ORTHOPAEDIC ITEMS</a>
                </div>
             
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Personal Care
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="women.php">WOMEN</a>
                  <a class="dropdown-item" href="dental.php">DENTAL & ORAL CARE</a>
                 
              
              </div>
            </li>
            <li class="nav-item dropdown">
              
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    OCT Drugs
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="iv.php">IV INJECTION</a>
                  <a class="dropdown-item" href="power.php">POWER</a>
                 
                </div>
              
            
            <li class="nav-item">
              <a class="nav-link" href="Contact.html">Contact</a>
            </li>
            
          </ul>
        </div>
       </nav>
     </section>

    <section>
       <div class="container">
         <div class="col-md-12">
           <h1>Search Result</h1>
           <hr>
		   
	  <?php
               global $data;
               $conn = mysqli_connect("localhost", "root", "","medicinestore");
               
               if(isset($_POST["search"]))
               {
                $s=strtolower($_POST["search"]);
               $sql="select * from medicine where Pname='".$s."'";
                $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
            $data=array();
               while($row = $result->fetch_assoc()) {
				 $data[]=$row;
				if(file_exists($row["Picture"]))
		{
	        $a="<img alt='not found' src='".$row["Picture"]."' width='300px' height='200px'/>";
			$b= $row["Pname"];
			$c= $row["Company"];
			$d= $row["Quantity"];
			$e= $row["Price"];
		}
			 ?>
			
			 <div class="col-md-4 text-center" style="float: left;">
                  <form action="Cart.php" method="post">
                    <div class="design">
					   <h4 style="text-align: center;"> <?php  echo "$a";?></h4>
                       <h4 style="text-align: center;">Product Name: <?php  echo "$b";?></h4>
                       <h4 style="text-align: center;">Comapny Name: <?php  echo "$c";?></h4>
                       <h4 style="text-align: center;">Quantity: <?php  echo "$d";?></h4>
					   <h4 style="text-align: center;">Price: <?php  echo "$e";?></h4>
					   <input type="hidden" name="Pname" value="<?php  echo "$b";?>">
                       <input type="hidden" name="Price" value="<?php  echo "$e";?>">
                       <input type="hidden" name="Quantity" value="<?php  echo "$d";?>">
                       <input style="color:  #004d00;width:100px;" type="submit" name="submit"  value="Buy Now" >
                    </div>
                  </form>
                </div>
                <div style="float: left;"></div>

				
             <?php
				}
			   }
				?>
              

				
			 
				
         </div>
       </div>
     </section>
				
				
  
  
       

     <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

    <!--Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
