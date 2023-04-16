<?php
$data=array();
require("functions.php");
$sql="select * from medicine where Pname='".$_GET["Pname"]."'";

//loadFromText();
loadFromMySQL($sql);
foreach($data as $r){
?>
      <div class="col-lg-6 offset-md-3">
         <form id="medicinelist2" action="up2.php" method="post">
                   <div class="col-lg-6 offset-md-3">
                  
                  
                      
                  
                    <p>Product Name:</p>
                    <input class="form-control" type="text" name="productname" style="width:100%;" value="<?php echo $r["Pname"];?>" required>
                </div>
                
                  <div class="col-lg-6 offset-md-3">

                    <p>Company Name:</p>
                     <input class="form-control" type="text" name="companyname" style="width:100%" value="<?php echo $r["Company"];?>" required><br>
                
                </div>
                <div class="col-lg-6 offset-md-3">
                  <p>Category:</p>
                  
                  <input class="form-control" type="text" name="category" style="width:100%;" value="<?php echo $r["Category"];?>" required>
                  
                </div>
  
                 <div class="col-lg-6 offset-md-3">
                   <p>Quantity:</p>
                    
                  <input class="form-control" type="number" name="quantity" style="width:100%"  value="<?php echo $r["Quantity"];?>" required><br>
                  
                 </div>
                 <div class="col-lg-6 offset-md-3">
                   <p>Price:</p>
                    
                  <input class="form-control" type="number" name="price" style="width:100%" value="<?php echo $r["Price"];?>"  required><br>
                  </div>
          
                    
                  <div class="col-lg-6 offset-md-3">
                   <input style="color:  #004d00;width:100px;" type="submit" name="submit"  value="Update"  onclick="update()"><br><br>
           
                       </div>
					   </form>
                       </div>
<?php
}
?>


