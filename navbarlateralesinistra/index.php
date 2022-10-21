<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="indexstyle.css" /> 
  <title>TPI project</title>
</head>

<body>
<!-- The overlay -->
<div id="myNav" class="overlay">


<!-- Button to close the overlay navigation -->
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



<!-- Overlay content -->
 <div class="overlay-content">
 <a href="#">Home</a>
 <a href="#">Oggetti smarriti</a>
 <a href="#">Contatti</a>
 </div>
</div>



<!-- Use any element to open/show the overlay navigation menu -->
<div class="header">
 <div class=titolo>CACCA</div>
<div onclick="openNav()">
 <div class="icona"></div>
 <div class="icona"></div>
 <div class="icona"></div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
/* Open when someone clicks on the span element */
function openNav() {
 document.getElementById("myNav").style.width = "15%";
}



/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
 document.getElementById("myNav").style.width = "0%";

}
</script>

</html>
