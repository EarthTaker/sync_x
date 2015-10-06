<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Employment - Programming</title>
		<?php 
			include "head-tag.php";
		?>
	</head>
	<body class="sub">
		<div id="container">
		<?php 	
			include "nav.php";
			include "logo.php";
		?>
		<article>
		<h1>Become a Programmer with Sync-X Inc.</h1>
			<?php if($_SESSION['logged_in']){ ?>			
			<h1>Welcome <?php echo $_SESSION['user_data']['first_name']; ?>!</h1>
			<?php } ?>
		</article>
		</div>
		<?php 
			include "footer.php";
		?>
	</body>
</html>