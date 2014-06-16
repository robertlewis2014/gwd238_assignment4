<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Silly Sonka</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="wrapper">
  
  	<?php include('includes/header.php'); ?>
  
  <aside>
    <div id="content">
		<div id="home-product">
			<h1>Products</h1>
				<a href="products.php"><img src="img/product.png" alt="Product" width="197" height="181" /></a>
					<p>Take a look at some of our candy products! Click the picture or <a href="products.php">here</a> to get there!</p>
</div>

		<div id="home-gallery">
			<h1>Gallery</h1>
				<a href="gallery.php"><img src="img/gallery.png" alt="Gallery" /></a>
					<p>View our awesome photo gallery by clicking the picture above or <a href="gallery.php">here</a>!</p>
</div>

		<div id="home-contact">
			<h1>Contact</h1>
				<a href="contact.php"><img src="img/contact.png" alt="Contact" width="197" height="181" /></a>
					<p>Have a question about our products or anything else? You know the drill! Click <a href="contact.php">here</a> or the picture above.</p>
</div>


		<div id="home-countdown">
        <hr>
			<img src="img/newsonka.png" alt="New Sonka Candy" title="New Sonka" />
				<h1>A new mouth watery candy coming soon...</h1>
                
		<div id="countdown">

<!-- START COUNTDOWN -->
<script src="countdown.js" type="text/javascript"></script>
<script type="application/javascript">

var myCountdownTest = new Countdown({
								 	year	: 2014,
									month	: 9, 
									day		: 27,
									width	: 300, 
									height	: 50
									});



</script>
<!-- END COUNTDOWN -->

</div><!--END  OF HOME-COUNTDOWN DIV-->
</div><!--END OF COUNTDOWN DIV-->
</div><!--END OF WRAPPER-->


  </aside>
  
  	<?php include('includes/footer.php'); ?>
  
</div>
</body>
</html>
