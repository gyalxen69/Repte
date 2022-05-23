<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration of star</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">
    	<h2>Get The Star</h2>
    </div>

    <form method="post" action="buystar.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    		<label>Name The Star!</label>
    		<input type="text" name="name" >
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="GetTheStar"><a href="final.php">Get The Star</a></button>
    	</div>
    </form>
  </div>
  <?php include("../starfield.php") ?>
</body>
</html>
