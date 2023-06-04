<?php error_reporting(0); ?>

<!--
Admin Notes:
TODO:
	1) Disallow external logins
	2) Our server is at 192.168.100.140
-->

<!DOCTYPE html>
<html lang="en">
	<?php include "includes/head.php" ?>
	<body>
		<?php include "includes/nav.php" ?>
		<main>
			<div class="jumbotron landing-head text-white">
				<h1 class="display-4 landing-title" align="center">Garis Start</h1>
				<p class="lead" align="center">Dimulailah petualangan di balik garis start.</p>
				<div class="landing-img"></div>
			</div>
			<div class="container">
				<section id="about" class="section">
					<h2 align="center" data-aos="zoom-in-up">About Us</h2>
					<p class="pt-4" data-aos="zoom-in-up" style="font-size:16pt; color: #333333;" align="center"> 
					Di sana, di tengah hening yang mencekam, terletak sebuah garis start yang mengandung segala kemungkinan. 
					Dalam sekejap, energi yang tak terbendung meletup dan mengisi udara. Jantung berdegup kencang, siap melompat keluar dari dada. 
					Dengan napas terhela, mata terfokus, dan pikiran yang terarah, semua siap untuk memasuki dunia yang baru. 
					Garis start adalah ambang batas antara harapan dan kenyataan, antara mimpi dan pencapaian. Di sinilah keberanian dan tekad bertemu dengan kesempatan, menciptakan sebuah titik awal yang menjanjikan.
					</p>
					<p class="pt-4" data-aos="zoom-in-up" style="font-size:16pt; color: #333333;" align="center">
					Di sepanjang garis start, terhampar deretan peserta yang bermacam-macam: para atlet yang berkeringat dan terlatih, pemimpi yang tak pernah menyerah, serta penjelajah yang haus akan petualangan. 
					Tepat di balik garis itu, mereka meletakkan segala beban dan keraguan, siap melangkah maju dengan penuh keyakinan. Dalam setiap detak jantung, semangat melonjak tinggi dan mendorong mereka maju. 
					Garis start melambangkan kesempatan baru, sebuah permulaan yang penuh tantangan dan kemungkinan. Di sini, semua mimpi dan aspirasi berpadu menjadi satu, dan ketika tembakan starter menggelegar, 
					langkah pertama yang diperbuat akan mengubah takdir dan membuka pintu menuju keajaiban yang belum terungkap.
					</p>
				</section>
				<section id="contact" class="section">
					<h2 align="center" data-aos="zoom-in-up">Kontak Kami</h2>
					<form action="/" method="post" data-aos="zoom-in-up">
						<div class="form-group">
							<label for="email">Email</label>
						  	<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email">
						    	<small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda kepada orang lain.</small>
					  	</div>
					  	<div class="form-group">
						    	<label for="query">Pesan</label>
						    	<textarea class="form-control" id="query" name="query" rows="3"></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-primary" style="background-color: #00D6AB; border-color: #00D6AB;">Submit</button>
					</form>
				</section>
			</div>
		</main>
	</body>
</html>
