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

<script type="text/javascript">


  
  function allLetter()
  {
   
   letters = /^[A-Za-z]+$/;
   if(document.fm.productname.value.match(letters))
     {
      document.getElementById("msg1").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg1").style.color="red";
    document.getElementById("msg1").innerHTML="Enter All Character Only";
     return false;
     }
  }

  function cname()
  {
   
   letters = /^[A-Za-z]+$/;
   if(document.fm.companyname.value.match(letters))
     {
     document.getElementById("msg2").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg2").style.color="red";
    document.getElementById("msg2").innerHTML="Enter Company Name";
     return false;
     }
  }

  function c()
  {
   
   letters = /^[A-Za-z]+$/;
   if(document.fm.category.value.match(letters))
     {
   document.getElementById("msg3").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg3").style.color="red";
    document.getElementById("msg3").innerHTML="Enter Category";
     return false;
     }
  }

  function q()
  {
   
   
   if(document.fm.quantity.value != "")
     {
   document.getElementById("msg4").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg4").style.color="red";
    document.getElementById("msg4").innerHTML="Enter Quantity Size";
     return false;
     }
  }

  function prc()
  {
   
   
   if(document.fm.price.value !="")
     {
   document.getElementById("msg5").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg5").style.color="red";
    document.getElementById("msg5").innerHTML="Enter Price of Product";
     return false;
     }
  }

  function validate(){
    
    if(document.fm.fileToUpload.value.length==0){
      alert("you must choose a Picture To Upload");
      return false;
    }
    else
    {
      return true;
    }
  }


function emptyForm(){

  pn=document.fm.productname.value;
  cn=document.fm.companyname.value;
  c=document.fm.category.value;
  prc=document.fm.price.value;
  q=document.fm.quantity.value;
  

  if((pn=="")&&(cn=="")&&(c=="")&&(prc=="")&&(q=="")){
    alert("Filled up All The Forms");
    return false;
  }
     return true;
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

            <div class="col-md-12" style="margin-top: 80px;">
             
                   <h1 class="text-center">Add New Product</h1>

           <form action="upload.php" name="fm" method="post" enctype="multipart/form-data">
                   <div class="col-lg-6 offset-md-3">
                    <p>Product Name:</p>
                    <input class="form-control" type="text" name="productname" onkeyup="return allLetter()" style="width:100%;" >
                    <span id="msg1"></span><br>
                </div>
                
                  <div class="col-lg-6 offset-md-3">

                    <p>Company Name:</p>
                     <input class="form-control" type="text" name="companyname" onkeyup="return cname()" style="width:100%" ><br>
                      <span id="msg2"></span><br>
                </div>

                <div class="col-lg-6 offset-md-3">
                  <p>Category:</p>
                  
                  <input class="form-control" type="text" name="category" onkeyup="return c()" style="width:100%;" >
                  <span id="msg3"></span><br>
                  
                </div>
  
                 <div class="col-lg-6 offset-md-3">
                   <p>Quantity:</p>
                    
                  <input class="form-control" type="number" name="quantity" onkeyup="return q()" style="width:100%" ><br>
                  <span id="msg4"></span><br>
                  
                 </div>
                 <div class="col-lg-6 offset-md-3">
                   <p>Price:</p>
                    
                  <input class="form-control" type="number" name="price" onkeyup="return prc()" style="width:100%" ><br>
                  <span id="msg5"></span><br>
                  </div>

                  </div>
                 <div class="col-lg-6 offset-md-3">

                   Select file to upload : <input type="file" name="fileToUpload">
                  
                  </div>
                       <br>              
                  <div class="col-lg-6 offset-md-3">
                   <input style="color:  #004d00;width:100px;" type="submit" name="submit" onclick="return emptyForm() && validate()"  value="Submit" >
            <input style="color:  #ff0000;width: 100px; margin-bottom: 40px;" type="reset">
                       </div>
                  </form>
                  
              
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