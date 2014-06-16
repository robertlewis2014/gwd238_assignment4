<?php

// * IMPORTANT * Set your email information here
define('DESTINATION_EMAIL ',' robertl1990@yahoo.com');
define('MESSAGE_SUBJECT','Feedback from your website');
define('REPLY_TO' , 'robertl1990@yahoo.com');
define('FROM_ADDRESS', 'robertl1990@yahoo.com');
define('REDIRECT_URL' , 'http://yahoo.com/');
 
 require_once('validation.php');
 
 ?>

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

	<?php include('includes/contact_header.php'); ?>
  
  <aside>
  
    <div id="contact_content">
    	<h1>Contact</h1>
    
      		<div id="form">
				<p>If you have questions about the our Silly Sonka products or need futher information about the nunitions, we're here to help. We look forward to hearing from you.</p>


		<h1>send us an email</h1>
        
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    	<fieldset>
        	<legend>Contact</legend>
            <p>
            <label for="name">Name:</label><?php echo $name_error; ?>
            <input type="text" name="name" placeholder="Name here"
            value="<?php echo $name; ?>" class="required" />
            </p>
            
            <p>
            <label for="email">Email: </label><?php echo $email_error; ?>
            <input type="email" name="email" placeholder="email@here.com" 
            value="<?php echo $email; ?>" class="required" />
            </p>
            
            <p>
            <label for="message">Message: </label><?php echo $message_error; ?>
            <textarea name="message" rows="8" cols="45" placeholder="message here">
            <?php echo $message; ?></textarea>
            </p>
            
            <p>
            	<input type="submit" name="submitted" value="Contact Us Now" />
            </p>
        </fieldset>


</div><!--END OF FORM-->

</div><!--END OF CONTACT FORM-->


 </aside>
 
  <?php include('includes/contact_footer.php'); ?>
  
</div><!--END OF WRAPPER-->


</body>
</html>
