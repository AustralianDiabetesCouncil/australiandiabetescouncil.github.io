<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Style Guide - Australian Diabetes Council</title>
	<meta name="viewport" content="width=device-width">
	
	<!-- From ADC website -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap-responsive.css">
	<link rel="stylesheet" href="../css/website.css">
	
	<!-- For the Style Guide -->
	<link rel="stylesheet" href="../css/styleguide.css">
	
	<!-- Added stylesheet which fixes website bugs -->
	<link rel="stylesheet" href="../updates.css">
	
	<style>
		.box {
			text-align: center;
			background: #ccc;
		}

		.box h4 {
			display: inline-block;
			margin-top: 20px;
		}

		.navbar h4 {
			margin-top: 10px;
		}

		.navbar-inner, .container-footer {
			background: #ccc;
		}
		
		.spanwidth {
			display: inline;
			float: none;
			margin-left: 0;
		}
		
		.span3-right {
			border-radius: 0;
			height: 226px;
			box-shadow: none;
		}

		.example-header {
			margin-bottom: 15px;
			margin-top: 15px;
		}

		.example-header > .box {
			height: 110px;
		}

		.example-courasel {
			height: 390px;
			margin-bottom: 20px;
		}

		.example-thumbnail {
			height: 292px;
			margin-bottom: 20px;
		}

		.example-news, .example-events {
			height: 440px;
			margin-bottom: 20px;
		}

		.container-footer {
			height: 120px;
		}
	</style>
	
</head>
<body class="style-guide">
	
	<div class="container container-body">
		<div class="row  hidden-tablet hidden-phone example-header">
			<div class="span12 box"><h4>Header (<span class="spanwidth"></span>)</h4></div>
		</div>
		<!-- NAVBAR -->
		<div class="navbar box">
			<div class="navbar-inner">
				<div class="container">
					<h4>Navigation (<span class="spanwidth"></span>)</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<div class="box example-courasel"><h4>Courasel (<span class="spanwidth"></span>)</h4></div>
				<div class="row">
					<div class="span3 box example-thumbnail"><h4>Box (<span class="spanwidth"></span>)</h4></div>
					<div class="span3 box example-thumbnail"><h4>Box (<span class="spanwidth"></span>)</h4></div>
					<div class="span3 box example-thumbnail"><h4>Box (<span class="spanwidth"></span>)</h4></div>
				</div>
			</div>
			<div class="span3 span3-right box"><h4>Side (<span class="spanwidth"></span>)</h4></div>
			<div class="span3 span3-right box"><h4>Side (<span class="spanwidth"></span>)</h4></div>
			<div class="span3 span3-right box"><h4>Side (<span class="spanwidth"></span>)</h4></div>
		</div>
		<div class="row">
			<div class="span6 box example-news"><h4>Latest News (<span class="spanwidth"></span>)</h4></div>
			<div class="span6 box example-events"><h4>Events (<span class="spanwidth"></span>)</h4></div>
		</div>
	</div>
	<div class="container container-footer">  
		<div class="row example-footer">
			<div class="span12 box"><h4>Footer (<span class="spanwidth"></span>)</h4></div>
		</div>
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
	<!-- Scripts from Website -->
	<script src="../js/bootstrap.js"></script>
	<script src="../js/website.js"></script>
	
	<!-- Scripts for Style Guide Website -->
	<script src="../js/prism.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/styleguide.js"></script>
	<script>
	$(document).ready(function() {
		$(".box").each(function(){
			var box = $(this);
			var width = box.width();
			$(this).find(".spanwidth").text( width + "px");
		});
	});
	
	$(window).resize(function() {
		$(".box").each(function(){
			var box = $(this);
			var width = box.width();
			$(this).find(".spanwidth").text( width + "px");
		});
	});
	</script>
	
</body>
</html>


