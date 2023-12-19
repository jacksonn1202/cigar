<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIGAR & TOBACCO STORE</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/logo/logo-fev.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        #overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup-onload{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 50%;
width: 50%;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3b0;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}

.btnyes{

background:white;
transition : 0.5s;
height:50px;
width:70px;
border-radius:50%
}


.btnyes:hover{

background:#7BCE11;
transition : 0.5s;
height:50px;
width:70px;
border-radius:50%
}


@media(max-width:500px){
    .cnt223{
min-width: 100%;
width: 100%;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3b0;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;


}
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
.bbbg {
    background-image: url(assets/1.jpg);
    background-size: cover;
    background-position: center;
    height:800px;
    width:100%;
}
    </style>
</head>

<body class="bbbg">


    <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">C</span>
        <span>I</span>
        <span>G</span>
        <span>A</span>
        <span>R</span>
        
    </div>

    <div id="preloader">
    </div>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <main >

      
    <div class='popup-onload' >
<div class='cnt223' style="height:280px">
<center>
<h1 style="color:#6B0E0E;line-height:50px">your age is 21+ <h1></center>

    <center>
<h3 style="color:black;line-height:50px">please select yes or no</h3></center>

<center>
<p style="line-height:50px">
ARE YOU OF LEGAL SMOKING AGE?

<br/>
</p></center>
<center>

<form action="">

<!-- <a href="home.php" class="btnyes" data-animation="fadeInUp" data-delay="1.8s" style="animation-delay: 1.8s;"><span>Yes</span></a>

<a href="" class="btnyes" data-animation="fadeInUp" data-delay="1.8s" style="animation-delay: 1.8s;"><span>No</span></a> -->

<button class="btnyes"><a href="#" style="color:black"><b>Yes</b></a></button>

<a href="index.php"><button class="btnyes" style="margin-left:10px;color:black"><b>No</b></button></a>



</form>
</center>
</div>
</div>

  
    </main>

 

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>

    <script>
        $(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup-onload').show();
$('.close').click(function(){
$('.popup-onload').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
    </script>
</body>


<!-- Mirrored from bluebellbd.net/html/odor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Nov 2023 06:12:27 GMT -->
</html>