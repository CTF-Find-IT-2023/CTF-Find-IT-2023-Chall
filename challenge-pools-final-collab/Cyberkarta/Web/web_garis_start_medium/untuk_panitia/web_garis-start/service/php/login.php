<?php
	error_reporting(0);
	session_start();
	
	include "includes/process_login.php";
?>

<!DOCTYPE html>
<html lang="en">
	<?php include "includes/head.php" ?>
	<body>
		<?php include "includes/nav.php" ?>
		<main>
			<div class="container">
				<h2 align="center">Login</h2>
				
				<?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
				<div class="alert alert-success" role="alert">
					Selamat Datang Admin! Flag:  <?php echo readfile("flag.txt") ?>
				</div>
				
				<?php elseif (isset($_SESSION['admin'])): ?>
				<div class="alert alert-danger" role="alert">
					Login failed!
				</div>
				
				<?php else: ?>
				<div class="alert alert-warning" role="alert">
					Error
				</div>
				
				<?php endif; ?>
				<?php unset ($_SESSION['admin']); ?>
				
				<form action="/login.php" method="post">
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				  	</div>
				  	<div class="form-group">
						<label for="pass">Password</label>
						<input type="pass" class="form-control" id="pass" name="pass" placeholder="Enter password">
				  	</div>
					<button type="submit" class="btn btn-primary" style="background-color: #00D6AB; border-color: #00D6AB;">Submit</button>
				</form>
			</div>
		</main>
	</body>
</html>
