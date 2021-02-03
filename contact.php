<!DOCTYPE html>
<html>
<head>
  <link rel = "icon" href = "images/e.jpg" type = "image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Contact Info</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<style type="text/css">
  body{
   margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
}
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}


.topnav {
  overflow: hidden;
  background-color: #111;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
   
    .topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: red;
  color: white;
}

.topnav .icon {
  display: none;
}

a.right{
  float: right;
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  a.right{
    float: left;
  }
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.container img {
  float: left;
  margin-right: 20px;
  border-radius: 75%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}
p a{
  text-decoration: none;
  color: #333;
}
a:hover{
  color:black;
}
@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
</style>
</head>
<body>
 <header>
 <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
 
  <a href="contact.php" class="active" >Contact</a>
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
</header>  

<div class="container" style="color: red; ">
  <img src="img/avatar1.jpg" alt="Avatar" style="width:90px">
  <p><span style="color:red; ">Benaka H N</span></p>
 
  <p><i class="fa fa-mobile-phone"></i>
  <a href="tel:6362789920" style="color: red; ">+91-6362789920</a></p>
  <p><i class="fa fa-envelope"></i>
    <a href="mailto:benaka.jeeva10@gmail.com" style="color: red; ">benaka.jeeva10@gmail.com</a></p>
</div>



</script>
</body>
</html>