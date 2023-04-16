<!DOCTYPE html>

<html style="height: 100%">
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



              
          <?php
          require("functions.php");
          $data=array();
          loadFromMySQL("select * from medicine order by Pname asc");
          ?>


<script>
          function showMedicine(str) {
            var xhttp;    
            if (str == "") {
              document.getElementById("medicinelist2").innerHTML = "";
              return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("medicinelist2").innerHTML = this.responseText;
              }
            };
            var url = "delete.php?Pname="+str;
            xhttp.open("GET", url , true);
          
            xhttp.send();
}
</script>
</head>

<?php

session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){
  
}
else{
  
  header("Location:login.html?error=invalid user");
}
?>


  <body style="height: 100%" class="admin">
    
    <div class="container-fluid display_table">
       <div class="row display_table_row">
         <div class="col-md-2 side_menu display_table_cell" style="width: 17%!important">
             <h1 style="color: aquamarine;">Admin Panel</h1>
             <ul>
                <li class="link">
                  <a href="Admin.php">
                    <span>Manage Admin</span>
                  </a>
                </li>
             
               <li class="link">
			   	  
					  <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="active">
					    Manage product
					  </a>
					
					<div class="collapse" id="collapseExample">
					  <div class="card card-body">
					     <a href="addProduct.php">Add Product</a>
						 <a href="updateProduct.php">Update Product</a>
						 <a href="deleteProduct.php">Delete Product</a>
						 <a href="confirm.php">Confirm order</a>
						 
					  </div>
					</div>
					</li>
					 <li class="link">
                  <a href="Contactrequest.php">
                    <span>Contact</span>
                  </a>
                </li>
        </ul>
         </div>

         <div class="col-md-10 display_table_cell">
          <div class="row" id="nav-header">
            <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo" alt="Logo"></a>
              <div class="col-md-7 offset-md-2">
                <ul >

                  <li><h4 style="color: aquamarine;">Welcome To Administator Area</h4></li>
                  <li style="margin-left: 145px;">
                    <a href="logout.php"><img src="images/logout.png" style="width: 25px;" alt="Logout Icon">
                      Log out
                    </a>
                  </li>
                </ul>
              </div>
            
          </div>

            <div class="col-md-12" style="margin-top: 80px;" >
             
                   <h1 style="color: red;" class="text-center">Delete Product</h1>

                  <hr>

                    <select style="margin-left: 480px;" name="medicine" onchange="showMedicine(this.value)">
                      <option>Select a name</option>
                      <?php
                      foreach($data as $r){?>
                        <option value="<?php echo $r["Pname"];?>">
                        <?php echo $r["Pname"];?>
                        </option> <?php
                      }?>
                    </select>
                    <br><br>
                    <p id="medicinelist2">
                      
                    </p>
              
            </div>

           


         </div>
         
       </div>
      
    </div>




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