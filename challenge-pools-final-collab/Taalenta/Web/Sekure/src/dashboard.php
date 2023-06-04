<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Admin is logged in.";
} else {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style>
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
			text-align: center;
		}

		h1 {
			font-size: 4em;
			margin-top: 100px;
		}

		p {
			font-size: 1.5em;
			margin-top: 50px;
		}

		.button {
			background-color: #007bff;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			font-size: 1.2em;
			margin-top: 50px;
			text-decoration: none;
		}

		.button:hover {
			background-color: #0069d9;
		}

		.button:active {
			background-color: #005cbf;
		}
	</style>
</head>
<body>
	<h1>Welcome!</h1>
</body>
<!-- Vm0wd2QyUXlWa2hWV0doVVYwZG9jRlZ0TVZOWFZsbDNXa1JTVjFac2JETlhhMk0xVjBaS2MySkVUbGhoTVhCUVZteFZlRll5VGtsalJtaG9UV3N3ZUZadGNFdFRNVTVJVm10a1dHSkdjRTlaYlhSTFZsWmFkR05GZEZSTlZXdzFWa2QwYzJGV1NuUlZhemxhVmpOb2FGcFdXbUZrUjFaSVpFWlNUbFpVVmxsV1Z6QXhWREpHUjFOdVVsWmlSMmhvVm1wT2IyRkdXa2RYYlhSWVVqRktTVnBGV2xOVWJGcFZWbXhzVjFaNlFYaFZla1pyVTBaT2NtRkdXbWxTYTNCdlZtMXdUMVV4YkZkalJtaHNVak5TV0ZSV1dtRmxWbVJ5VjIwNWFGWnNjSHBaTUZaelZqQXhkVlZ1V2xkU1JYQklWbXBHVDJSV1VuTmhSMmhzWWxob1dsWXhaRFJpTVZWM1RVaG9WMWRIYUZsWmJHaFRWMFpTVjFkdFJteFdiVko1VmpKNGExWlhTa2RqUm14aFUwaENSRlpxUVhoa1ZsWjFWMnhrYUdFeGNGbFhhMVpoVkRKT2RGSnJhR2hTYkVwVVZteG9RMWRXV1hoYVJFSmFWbXN4TkZVeWRHdFdiVXB5WTBac1dtSkhhRlJXTUZwVFZqRndSVkZyT1dsU00yaFlWbXBLTkZReVJrZFhiazVxVTBoQ1lWUlZXbmRrYkZweFVtdDBhazFyTlVoWlZWcDNZa2RGZUdOSWJGZFdSVXBvVmtSS1RtVldUbkphUm1ocFZqSm9lbGRYZUc5aU1rbDRWMjVTVGxaRlNsaFVWbVEwVjFaYWRFNVZPVmRpVlhCSVZqSjRVMWR0UlhsaFJWSmFaV3RhV0ZwRlpGZFRSa3AwWlVaa2FXRXdjRWxXYWtvd1lqRlJlVkpyWkZSaVJscFRXVmQ0WVZkR1duUmxSWFJVVW14d2VGVXlkREJXUmtwelUyeHdXbFpXY0doWlZXUkdaVWRPUjFac2FGaFRSVXBKVjFaU1IyRXhaRWRWYmtwaFVtMW9jRlpxVG05V1ZscEhWMnhrYTAxWFVucFdNalZMVjBkS1NGVnRPVlZXYkhCWVZHdGFZVll5UmtoUFYyaHBVbGhDV1ZacVNqUlZNV1IwVTJ4V1UySkdTbGhaYTFwM1lVWnJlRmRyWkZkV2EzQjZWbGN4YzFVeVNuSlRhM1JYVFc1b1dGbFhjekZXTVdSMVUyczFXRkpZUW5oV1Z6RTBaREZzVjFkWVpHaFNWVFZVVlcxNGMwMHhXWGxOVldSb1lYcEdXVlpYY0VkV2F6RnhVbXRvVjFaRldreFdha3BQVTBVNVYyRkdhRlJTVlhCS1ZtcEdZV0V4VW5SV2EyUmhVMFphVlZsWWNITlhSbXhaWTBaa1YxWnNjRWhXVjNSTFlUQXhSVkpzVGxaU2JFWXpWVVpGT1ZCUlBUMD0= -->
</html>
