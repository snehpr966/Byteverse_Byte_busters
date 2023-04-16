
<script>
function allLetter()
  {
   var letters = /^[A-Za-z]+$/;
   if(document.fm.un.value.match(letters))
     {
      return true;
     }
   else
     {
      document.getElementById("msg").style.color="red";
    document.getElementById("msg").innerHTML="Enter Character Only";
     return false;
     }
  }
  

function validate(){
  v=document.fm.ps.value;
  //v=document.forms[0].elements[1].value;
  //alert(v);
  if(v.length>=8){
    
   // alert("valid data");
    return true;
  }
  else{
    document.getElementById("msg").style.color="red";
    document.getElementById("msg").innerHTML="invalid data";
    //alert("invalid data");
    return false;
  }
}
</script>
<form action="home.php" method="post" name="fm">
<h1>Your info to login</h1>
User Name :
<input value="" onclick="return allLetter()" type="text" name="un" /><br>
Password  : <input type="password" name="ps" /><br>
<br>
<input type="submit" onclick="return validate() && allLetter()" value="Login" /><br>
</form>
<p id="msg"></p>