<?php $time = (int) 20 * 60; ?>

<span id="exam_time"><?= $time?> </span> Secs
<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
			<title>jQuery Countdown</title>
			<link rel="stylesheet" href="css/jquery.countdown.css">
			<style type="text/css">
				#defaultCountdown { width: 200px; height: 45px; }
			</style>
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.plugin.min.js"></script>
			<script src="js/jquery.countdown.min.js"></script>
			<script>
				exam_time = $('#exam_time').html()+"s";
				$(function () {
					$('#defaultCountdown').countdown({until: exam_time, format: 'HMS', expiryUrl: "uche.php", padZeroess: true});
				});
			</script>
		</head>
		<body>
			<div id="defaultCountdown" style="float: right;"></div>
		</body>
	</html>
