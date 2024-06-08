<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Omar Ahmed | Chate</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styleo.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/repoart.css">
	<link rel="icon" type="text/css" href="Assets/26.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<script>
		function aj() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState === 4 && req.status === 200) {
            document.getElementById('chat_1').innerHTML =req.responseText;
        }
			}
		req.open('GET','chat.php',true);
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
      <a href="index.html">Home</a>
      <a href="#" class="ho">Repoart</a>
      <a href="article.php" target="_blank">Articles</a>
      </nav>

      <button class="bar" id="bre" onclick="muneo();"><i class="fa fa-bars"></i></button>

  </header><!-- End Header -->
  <center>
  <div class="nav-mopail">
    <button class="exi" onclick="exit();"><svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#000000"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></button>
    <ul>
      <a href="index.html">Home</a><br>
      <a href="#" class="ho">Repoart</a><br>
      <a href="article.php" target="_blank">Article</a><br>
    </ul>
  </div>
</center>

	<!-- <div id="ty"><img src="welcome.png"></div> -->
	<div id="contenuor">
		
		<div id="chatbox">
			<div id="chat_1">
				
			</div>
			<div id="chat_2">
				
			</div>

		</div>
		</div>
	<center>
	<div class="for">
		<form action="repoart.php" method="post" class="pg">
			<input class="text" type="text" name="name" placeholder="Enter Your Name..."><br>
			<textarea id="inputArea" class="ms" type="text" cols="50" rows="4" name="masg" placeholder="Enter Your Masge..."></textarea><br>
			<input class="but" type="submit" value="send" name="submit">
		</form>
		<?php
		if (isset($_POST['submit'])) {
			$n = $_POST['name'];
			$m = $_POST['masg'];
		$insert = "insert into chat (name, masg) values ('$n','$m')";
		$run_insert = mysqli_query($con, $insert);
		if ($run_insert) {
			echo '<embed loop="false" hidden="true" src="sound.mp3" autoplay="true">';
		}
		header('location: repoart.php');
	}
		?>
	</div>
</center>

<script src="assets/js/main.js"></script>
</body>
</html>