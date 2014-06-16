<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Gallery – Silly Sonka</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="wrapper">
  	
	<?php include('includes/gallery_header.php'); ?>
  
  <aside>

    <div id="gallery">
		<div id="gallery-image">
			<h1>Gallery</h1>

				<img src="img/nerds.png" id="pic" alt="gallery" />
 					<p id="description">Ferds Candy</p>


	<nav id="gallery-nav" class="album"> 
 		<a href="img/nerds.png" title="Ferds Candy" class="on"><img src="img/nerds_thumb.png" alt="Nerds" /></a>
 		<a href="img/candyland.png" title="Candy Lannddd!"><img src="img/candyland_thumb.png" alt="Candy Land" /></a>
        <a href="img/tarts.png" title="TARTSweet"><img src="img/tarts_thumb.png" alt="Sweettarts" /></a>
        <a href="img/kid.png" title="Soo many candy to choose from!"><img src="img/kid_thumb.png" alt="Kid" /></a>
        <a href="img/taffy.png" title="Taffy Laffy"><img src="img/taffy_thumb.png" alt="LaffyTaffy" /></a>
	</nav>


</div><!--END OF GALLERY-IMAGE DIV-->
</div><!--END OF GALLERY DIV-->
        

  </aside>

  	<?php include('includes/gallery_footer.php'); ?>

</div><!--END OF WRAPPER-->

	<script src="gallery.js"></script>

</body>


</html>
