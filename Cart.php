<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
  

    <title>Medicine Store</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

     <!-- Title Icon -->
    <link rel="icon" href="images\icon.ico" alt="Logo">

   <script>

   
        
  function fname()
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
    document.getElementById("msg1").innerHTML="Enter First Name";
     return false;
     }
  }

  function lname()
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
    document.getElementById("msg2").innerHTML="Enter Last Name";
     return false;
     }
  }

  function h()
  {
   
   house = /^[A-Za-z]+$/;
   if(document.fm.house.value.match(house))
     {
   document.getElementById("msg3").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg3").style.color="red";
    document.getElementById("msg3").innerHTML="Enter HouseNumber & StreetName";
     return false;
     }
  }

  function apt()
  {
   
   letters = /^[0-9a-z]+$/;
   if(document.fm.apartment.value.match(letters))
     {
   document.getElementById("msg4").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg4").style.color="red";
    document.getElementById("msg4").innerHTML="Enter Apartment no.";
     return false;
     }
  }

  function t()
  {
   
   letters = /^[A-Za-z]+$/;
   if(document.fm.town.value.match(letters))
     {
   document.getElementById("msg5").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg5").style.color="red";
    document.getElementById("msg5").innerHTML="Enter City/Town";
     return false;
     }
  }

  function pc()
  {
   
   letters = /^[0-9a-z]+$/;
   if(document.fm.postcode.value.match(letters))
     {
   document.getElementById("msg6").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg6").style.color="red";
    document.getElementById("msg6").innerHTML="Enter ZIP/PostCode";
     return false;
     }
  }

  function phoneValid()
  {
   
      v=document.fm.phone.value;
    
    
   if(v.length==11)
     {
   document.getElementById("msg7").innerHTML="";
      return true;
     }
   else
     {
      document.getElementById("msg7").style.color="red";
    document.getElementById("msg7").innerHTML="Invalid Phone Number";
     return false;
     }
  }
  
  function emailvalid(){
     v=document.fm.email.value;
     pos = v.search("@");
     pos1 = v.search(".com");
  if(pos != -1 && pos1 != -1){
    
  
    document.getElementById("msg8").innerHTML="";
    return true;
  }
  else{
  
    document.getElementById("msg8").style.color="red";
    document.getElementById("msg8").innerHTML="Email Not Valid";
    
    return false;
  }
}

function emptyForm(){

  fn=document.fm.firstname.value;
  ln=document.fm.lastname.value;
  t=document.fm.town.value;
  a=document.fm.apartment.value;
  h=document.fm.house.value;
  z=document.fm.postcode.value;
  ph=document.fm.phone.value;
  em=document.fm.email.value;
  q=document.fm.qun.value;
  

  if((fn=="")||(ln=="")||(t=="")||(ph=="")||(em=="")||(a=="")||(h=="")||(z=="")||(q=="")){
    alert("Form is not Filled up");
    return false;
  }

  }



        function cal()
        {
            var p= document.fm.Price.value;
            var q= document.fm.Quantity.value;
           
            var n=document.getElementById("qun").value;
            
              if(n != 0 )
              {
                if(n <= 30)
                {
                 var res=parseFloat(p)*parseFloat(n);
                
                 document.getElementById("tx").innerHTML="Total Price: "+res;
                 document.fm.txt.value=res;
                 return true;
               }
               else
               {
                document.getElementById("tx").innerHTML="Quantity Can't Buy More Then 30";
                 return false;
               }
              }
              else
              {
                  document.getElementById("tx").innerHTML="Quantity Can't Be 0";
                 return false;
              }

        }

   </script>
</head>
<body id="page-top">


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

      <div class="col-lg-3 text-center">
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo" alt="Responsive image"></a>
      </div>

      <div class="col-lg-6 text-center">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>


      <div class="col-lg-3 collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="home.php"><img src="images/home.png" class="size2"></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-top"><img src="images/cart.png" class="size"></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="login.html"><img src="images/user.png" class="size2"></a>
          </li>
        </ul>
       
      </div>

    </nav>


  
   
    
   <!--Banner Section Starts-->
    <section class="banner">
            
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
                  <a class="dropdown-item" href="#">IV INJECTION</a>
                  <a class="dropdown-item" href="#">POWER</a>
                 
                </div>
              
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="Contact.html">Contact</a>
            </li>
          </ul>
        </div>
       </nav>
     </section>

      <!--cart-->
      <section class="cart">
         <div class="container">
          <div class="row">
          <div class="col-lg-12">
          <form name="fm" action="productConfirm.php" method="POST">
             <div class="col-lg-6" style="float: left;">
              

              <h2>Customer Details</h2>
              <hr>
              <br><br>
              
               
                <div class="col-lg-6 left" style="float: right;">
                  
                    <p>First Name:</p>
                    <input class="form-control" type="text" name="firstname" onkeyup="return fname()" style="width:100%;">
                    <p id="msg1"></p>
                </div>
                  <div class="col-lg-6">

                    <p>Last Name:</p>
                     <input class="form-control" type="text" name="lastname" onkeyup="return lname()" style="width:100%">
                     <p id="msg2"></p><br><br>
                </div>

                <div class="col-lg-12">
                  <p>Country:</p>
                  <b>Bangladesh</b><br><br>
                </div>
                <div class="col-lg-12">
                  <p>  Street Address:</p>
                </div>
                  <div class="col-lg-6 left" style="float: right;">
                  
                  <input class="form-control" type="text" name="house" onkeyup="return h()" placeholder="HouseNumber & StreetName" style="width:100%;" >
                  <p id="msg3"></p>
                </div>
                <div class="col-lg-6">
                  
                  <input class="form-control" type="text" name="apartment" onkeyup="return apt()" placeholder="Apartment,Unit Etc" style="width:100%">
                   <p id="msg4"></p>
                  <br><br>
                  
                </div>
                 <div class="col-lg-12">
                   <p>Town/City:</p>
                    
                  <input class="form-control" type="text" onkeyup="return t()" name="town" style="width:100%">
                  <p id="msg5"></p><br><br>
                 </div>
                  
                   <div class="col-lg-12">
                   <p>PostCode/ZIP:</p>
                    
                  <input class="form-control" type="text" onkeyup="return pc()" name="postcode" style="width:100%">
                  <p id="msg6"></p><br><br>
                 </div>
                 <div class="col-lg-12">
                   <p>Phone:</p>
                    
                  <input class="form-control" type="tel" name="phone" onkeyup="return phoneValid()" style="width:100%">
                  <p id="msg7"></p><br><br>
                 </div>
                 <div class="col-lg-12">
                   <p>Email:</p>
                    
                  <input class="form-control" type="email" name="email" onkeyup="return emailvalid()" style="width:100%">
                     <p id="msg8"></p>
                  <br><br>
                  </div>

                   
                 </div>
                 <div class="col-lg-6" style="float: left;">
                      <h2>Product Details</h2>
                        <hr>
                        <br><br>
                        <?php
                        if(isset($_POST["Pname"]))
                        {
                          if(isset($_POST["Quantity"]))
                        {
                          if(isset($_POST["Price"]))
                        {
                        ?>
                         <h4>Product Name: <?php echo $_POST["Pname"]?></h4>
                         <h4>Avaliable Quantity: <?php echo $_POST["Quantity"]?></h4>
                         <h4>Price Per Item: <?php echo $_POST["Price"]?></h4>
                         <h4>Need Quantity:</h4>
                         <input type="text" class="form-control" id="qun" name="quan" autocomplete="off" onkeyup="cal()" style="width:50%"></input>
                          <input type="hidden" name="Price" value="<?php  echo $_POST["Price"]; ?>">
                          <input type="hidden" name="Pname" value="<?php  echo $_POST["Pname"]; ?>">
                          <input type="hidden" name="Quantity" value="<?php  echo $_POST["Quantity"]; ?>">
                          <input type="hidden" name="txt">
                          <br>
                         <h4 id="tx">Total Price: <?php echo $_POST["Price"]?></h4> 
                         <?php
                         }
                       }
                     }
                         else
                         {
                          echo "NO Product Selected Yet";
                          echo "<br>";
                         }
                         ?>
                      <input style="color:  #004d00;width:100px;"  type="submit" onclick="return emptyForm()" name="submit"  value="Submit" >

                      <input style="color:  #ff0000;width: 100px; margin-bottom: 40px;" type="reset">
                  </div>

                  </form>
                 
                </div>
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
