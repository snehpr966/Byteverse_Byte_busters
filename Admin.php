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
   if(document.fm.firstname.value.match(letters))
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
   if(document.fm.lastname.value.match(letters))
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
   
  
   if(document.fm.house.value != "")
     {
   document.getElementById("msg3").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg3").style.color="red";
      document.getElementById("msg3").innerHTML="Enter Address";
     return false;
     }
  }


  function phoneValid()
  {
   
      v=document.fm.phone.value;
    
   number = /^[0-9]+$/;
   if(v.match(number))
     {  
       if(v.length==11)
         {
       document.getElementById("msg4").innerHTML="";
          return true;
         }
       else
         {
            document.getElementById("msg4").style.color="red";
          document.getElementById("msg4").innerHTML="Invalid Phone Number";
           return false;
         }
        
   }
   else
   {
    document.getElementById("msg4").style.color="red";
    document.getElementById("msg4").innerHTML="Invalid Phone Number";
     return false;

   }
 }

 function passValid()
  {
   
     pass=document.fm.password.value;
    
   
       if(pass.length>=4)
         {
           document.getElementById("msg6").innerHTML="";
          return true;
         }
       else
         {
            document.getElementById("msg6").style.color="red";
          document.getElementById("msg6").innerHTML="Password Length Must Be More Than 3";
           return false;
         }

  }

  function conValid()
  {
   
     pass=document.fm.password.value;
     con=document.fm.confirmpassword.value
   
       if(pass == con)
         {
           document.getElementById("msg7").innerHTML="";
          return true;
         }
       else
         {
            document.getElementById("msg7").style.color="red";
          document.getElementById("msg7").innerHTML="Password And confirmpassword Doesn't Match";
           return false;
         }

  }
  
  function emailvalid(){

     v=document.fm.email.value;
     pos = v.search("@");
     pos1 = v.search(".com");
  if(pos != -1 && pos1 != -1){
    
  
    document.getElementById("msg5").innerHTML="";
    return true;
  }
  else{
  
    document.getElementById("msg5").style.color="red";
    document.getElementById("msg5").innerHTML="Email Not Valid";
    
    return false;
  }
}

function emptyForm(){

  pn=document.fm.firstname.value;
  ln=document.fm.lastname.value;
  h=document.fm.house.value;
  p=document.fm.phone.value;
  e=document.fm.email.value;
  pas=document.fm.password.value;
  con=document.fm.confirmpassword.value;

  if(pn==""||ln==""||h==""||p==""||e==""||pas==""||con==""){
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
						 <a href="Confirm.php">Confirm order</a>
						 
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
             
                   <h1 class="text-center">Add New Admin</h1>

           <form action="addadmin.php" name="fm" method="post">
                   <div class="col-lg-6 offset-md-3">
                    <p>First Name:</p>
                    <input class="form-control" type="text" name="firstname" onkeyup="return allLetter()" style="width:100%;">
                    <span id="msg1"></span><br>
                </div>
                <br>
                  <div class="col-lg-6 offset-md-3">

                    <p>Last Name:</p>
                     <input class="form-control" type="text" name="lastname" onkeyup="return cname()" style="width:100%">
                     <span id="msg2"></span><br>
                     
                </div>

                <div class="col-lg-6 offset-md-3">
                  <p>Address:</p>
                  
                  <input class="form-control" type="text" name="house" placeholder="HouseNumber & StreetName" onkeyup="return c()" style="width:100%;">
                  <span id="msg3"></span><br>
                </div>
  
                 <div class="col-lg-6 offset-md-3">
                   <p>Phone:</p>
                    
                  <input class="form-control" type="text" name="phone" onkeyup="return phoneValid()" style="width:100%" >
                  <span id="msg4"></span><br>
                 </div>
                 <div class="col-lg-6 offset-md-3">
                   <p>Email:</p>
                    
                  <input class="form-control" type="email" name="email" onkeyup="return emailvalid()" style="width:100%" >
                  <span id="msg5"></span><br>
                  </div>
                  <div class="col-lg-6 offset-md-3">
                   <p>Password:</p>
                    
                  <input class="form-control" type="password" name="password" onkeyup="return passValid()" style="width:100%">
                  <span id="msg6"></span><br>
                 </div>
                 <div class="col-lg-6 offset-md-3">
                   <p>Confirm Password:</p>
                    
                  <input class="form-control" type="password" onkeyup="return conValid()" name="confirmpassword" style="width:100%">
                  <span id="msg7"></span><br>
                  </div>  
                   
                    <div class="col-lg-6 offset-md-3">
                   <input style="color:  #004d00;width:100px;" type="submit" name="submit" onclick="return emptyForm()" value="Submit" >
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