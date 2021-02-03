<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo.png" type="image/x-icon">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <title></title>
</head>

<style type="text/css">

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
*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}
a{
  text-decoration: none;
}


.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 0px;
  text-align: center;
 
        border-bottom-right-radius: 2px;
  border-bottom-left-radius:2px;
}
button{
  margin-top: 20px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

img{
  width: 250px;
  height: 150px;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  .title {font-size:11px}
  
}

</style>
<body>
 <header>
 <div class="topnav" id="myTopnav">
  <a href="index.php" class="active" >Home</a>
 
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
</header>

<div class="main">

<div class="card">
<div class="image">
   <img src="img/corona1.jpg">
</div>
<div class="title">
 <h1>
Corona</h1>
</div>
<div class="des">
<a href="corona.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/cancer1.jpg">
</div>
<div class="title">
 <h1>Cancer</h1>
</div>
<div class="des">
<a href="cancer.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/heart.jpg">
</div>
<div class="title">
 <h1>
Heart Attack</h1>
</div>
<div class="des">
<a href="heart.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/kidney.jpg">
</div>
<div class="title">
 <h1>Kidney Stone
</h1>
</div>
<div class="des">
<a href="kidney.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/plague.jpg">
</div>
<div class="title">
 <h1>Plague
</h1>
</div>
<div class="des">
<a href="plague.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/tb.jpg">
</div>
<div class="title">
 <h1>Tuberculosis
</h1>
</div>
<div class="des">
<a href="tb.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/malaria.jpg">
</div>
<div class="title">
 <h1>Malaria
</h1>
</div>
<div class="des">
<a href="malaria.html"><button>Read More...</button></a>
</div>
</div>


<div class="card">
<div class="image">
   <img src="img/paralysis.jpg">
</div>
<div class="title">
 <h1>Paralysis
</h1>
</div>
<div class="des">
<a href="paralysis.html"><button>Read More...</button></a>
</div>
</div>



<!--
<div class="card">
<div class="image">
   <img src="kidney.jpg">
</div>
<div class="title">
 <h1>Kidney Stone
</h1>
</div>
<div class="des">
<a href="kidney.html"><button>Read More...</button></a>
</div>
</div>








<div class="card">
<div class="image">
   <img src="kidney.jpg">
</div>
<div class="title">
 <h1>Kidney Stone
</h1>
</div>
<div class="des">
<a href="kidney.html"><button>Read More...</button></a>
</div>
</div>


-->










</div>

</body>
</html>