<?php
$flag = "flag";
setcookie ($flag, md5(0));

if(isset($_COOKIE[$flag])){
	if($_COOKIE[$flag] == md5(1)){
		$uri = $_SERVER['REQUEST_URI'];
		header("Location: ".$uri."sup3r_s3cret_th1ng");
		setcookie($flag, "", time()-3600);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cybersecurity Article</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Cybersecurity Article</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#section1">What is Cybersecurity?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#section2">Types of Cyber Attacks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#section3">How to Protect Yourself</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container my-5">
		<h1>My Cybersecurity Article</h1>
		<hr>
		<div id="section1">
			<h2>What is Cybersecurity?</h2>
			<p>Cybersecurity is the practice of protecting electronic devices, networks, and sensitive information from unauthorized access or theft. It involves implementing security measures to ensure the confidentiality, integrity, and availability of digital information. In today’s world, cybersecurity has become a critical issue due to the increasing number of cyber attacks and data breaches.</p>
		</div>
		<div id="section2">
			<h2>Types of Cyber Attacks</h2>
			<p>There are several types of cyber attacks, including:</p>
			<ul>
				<li><strong>Phishing:</strong> A type of social engineering attack where the attacker tries to obtain sensitive information such as login credentials, credit card numbers, or other personal information by posing as a trustworthy entity in an electronic communication.</li>
				<li><strong>Malware:</strong> Malicious software that can infect a computer, network, or device and cause damage or steal data. Examples include viruses, spyware, and ransomware.</li>
				<li><strong>DDoS:</strong> A distributed denial-of-service (DDoS) attack involves flooding a website or network with traffic in order to overwhelm it and make it unavailable to users.</li>
				<li><strong>Man-in-the-middle:</strong> A type of attack where the attacker intercepts communication between two parties to steal data or impersonate one of the parties.</li>
			</ul>
		</div>
		<div id="section3">
			<h2>How to Protect Yourself</h2>
			<p>Here are some tips to protect yourself from cyber attacks:</p>
			<ul>
				<li><strong>Use strong passwords:</strong> Use a different, complex password for each account, and consider using a password manager to generate and store your passwords securely.</li>
                <li><strong>Keep software up to date:</strong> Install software updates and patches as soon as they become available, as they often include security fixes.</li>
                <li><strong>Be wary of suspicious links and attachments:</strong> Don’t click on links or open attachments from unknown or suspicious sources, and be cautious of unexpected emails or messages asking for personal information.</li>
                <li><strong>Use antivirus software:</strong> Install and use reputable antivirus software to protect your computer from malware.</li>
                <li><strong>Secure your network:</strong> Use a firewall, and consider using a virtual private network (VPN) to encrypt your internet connection.</li>
            </ul>
        </div> 
	</div>
	
	<!-- jQuery and Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
