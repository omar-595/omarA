<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
	<!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/paplic.css">

  <script>
    function aj() {
      var req = new XMLHttpRequest();
      req.onreadystatechange = function() {
        if (req.readyState === 4 && req.status === 200) {
            document.getElementById('chat_1').innerHTML =req.responseText;
        }
      }
    req.open('GET','paple.php',true);
    req.send();
    }
    setInterval(function() {aj()}, 100);
  </script>
</head>
<body onload="gj();">

	<!-- ======= Header ======= -->
  <header id="hdf" class="header fixed-top">
    <div class="logo">
    <a href="index.html"><img src="assets/img/logo.png" alt="">
Omar Ahmed</a>
    </div>
    <nav>
      
      </nav>

      <!-- <a href=""><i class="fa fa-bars mobile-nav-toggle"></i></a> -->

  </header><!-- End Header -->
<!-- ========== About Secshun -->
<div id="contenuor" dir="rtl">
    <div id="chatbox">
      <h4>by: <span>Omar Ahmed</span></h4>
      <div id="chat_1">
        
      </div>
      <div id="chat_2">
        
      </div>

    </div>
    </div>

<script src="assets/js/main.js"></script>
</body>
</html>