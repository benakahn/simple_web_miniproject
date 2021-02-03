 <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
 
  <a href="contact.php" >Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <br>
</div>
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>