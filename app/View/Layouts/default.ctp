<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Salon de Belleza :
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->Html->meta('icon'); echo $this->fetch('meta'); echo $this->fetch('css'); echo $this->fetch('script'); ?>

	<title>Ecospa A Beauty And Spa Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Ecospa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--moving-->
	<script type="text/javascript" src="/js/move-top.js"></script>
	<script type="text/javascript" src="/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--script-->
	<script src="/js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="/css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script type="text/javascript">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
	</script>

</head>

<body>
	<!--header-->
	<?php if ($this->here == '/'): ?>
	<div class="header">
	<?php else: ?>
	<div class="header2">
	<?php endif; ?>
		<div class="header-top">
			<div class="container">
				<div class="logo">

					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""> </span>
					<ul>
						<li class="active"><a href="index.html" class="scroll">Principal</a></li>
						<li><a href="#about" class="scroll">Servicios</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#gallery" class="scroll">Galería</a></li>
						<li><a href="#team" class="scroll">Profesionales</a></li>
						
						<li><?= $this->Html->link(__('Contáctanos'), array('controller' => 'messages', 'action' => 'add')) ?></li>
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
					<script>
						$("span.menu").click(function() {
							$(".top-nav ul").slideToggle(500, function() {});
						});
					</script>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<?php if ($this->here == '/'): ?>
		<div class="container">
			<div class="banner-top">
				<div class=" new-more1">
					<div class="col-md-2 six">
						<img class="img-responsive" src="images/te.jpg" alt="">
					</div>
					<div class="col-md-10 six1">
						<h1>It is a long established fact that</h1>
						<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
						<a href="#"><i ></i></a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
   		<?php endif; ?>
	</div>
	<!--content-->
	<div class="content">
		

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!--//content-->
		<!--footer-->
		<div class="footer">
			<div class="container">
				<div class="footer-top">
					<a href="https://www.facebook.com/chineate/"><i ></i></a>
					<p class="footer-in">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain </p>
					<p class="footer-class"> © 2015 Ecospa . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/

						$().UItoTop({
							easingType: 'easeOutQuart'
						});

					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

			</div>
		</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>

</html>
