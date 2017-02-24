<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */

global $foxtail_options;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="shortcut icon" href="<?php echo $foxtail_options['favicon']['url'] ?>" type="image/x-icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<?php echo $foxtail_options['header-code'] ?>

	<style>
		<?php echo $foxtail_options['custom-css'] ?>
	</style>

</head>

<body <?php body_class( 'have-ads' ); ?>>

<header>
	<div class="banner-top">
		<div class="container">
			<div class="banner-pop">
				<span class="text">KHAI GIẢNG KHOÁ HỌC <strong>ROBOTIC MINDSTORM</strong> 01/02/2017</span>
				<a href="#" class="btn btn-default">Đăng ký học</a>
				<span class="close"><img src="<?php echo get_template_directory_uri() ?>/img/close.svg" alt="Close" title="Close"/></span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="header">
			<div class="left">
				<a href="#" class="logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="" title=""/></a>
			</div>
			<div class="mid">
				<nav class="navbar">
					<ul>
						<li class="active">
							<a href="#">Trang chủ</a>
						</li>
						<li>
							<a href="#">Khóa học</a>
							<div class="menu-drop menu1">
								<i class="arrow"></i>
								<ul>
									<li>
										<a href="#">
											<span class="menu-ico ico1"></span>
											<span class="text">Programming App Development</span>
											<span class="tag">6-18</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-ico ico2"></span>
											<span class="text">Programming App Development</span>
											<span class="tag">6-18</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-ico ico3"></span>
											<span class="text">Programming App Development</span>
											<span class="tag">6-18</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-ico ico4"></span>
											<span class="text">Programming App Development</span>
											<span class="tag">6-18</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-ico ico5"></span>
											<span class="text">Programming App Development</span>
											<span class="tag">6-18</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-ico ico6"></span>
											<span class="text">Programming App Development</span>
											<span class="tag">6-18</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#">Giới thiệu</a>
							<div class="menu-drop menu2">
								<i class="arrow"></i>
								<div class="drop-title">
									<i class="fa fa-long-arrow-left"></i>
									<span>Programming & App Development</span>
									<span class="tag">6-18</span>
								</div>
								<ul>
									<li>
										<a href="#">
											<span class="menu-left">6-8</span>
											<span class="menu-right">Adventures in Scratch Programming</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-left">6-8</span>
											<span class="menu-right">Adventures in Scratch Programming</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-left">6-8</span>
											<span class="menu-right">Adventures in Scratch Programming</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-left">6-8</span>
											<span class="menu-right">Adventures in Scratch Programming</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="menu-left">6-8</span>
											<span class="menu-right">Adventures in Scratch Programming</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#">Teky shop</a>
							<div class="menu-drop menu3">
								<i class="arrow"></i>
								<ul>
									<li>
										<a href="#">
											<div class="menu-left"><i class="menu-ico ico1"></i></div>
											<div class="menu-right">
												<span class="name">Programming & App Development</span>
												<span class="old">Độ tuổi: 6-18</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="menu-left"><i class="menu-ico ico2"></i></div>
											<div class="menu-right">
												<span class="name">Programming & App Development</span>
												<span class="old">Độ tuổi: 6-18</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="menu-left"><i class="menu-ico ico3"></i></div>
											<div class="menu-right">
												<span class="name">Programming & App Development</span>
												<span class="old">Độ tuổi: 6-18</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="menu-left"><i class="menu-ico ico4"></i></div>
											<div class="menu-right">
												<span class="name">Programming & App Development</span>
												<span class="old">Độ tuổi: 6-18</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="menu-left"><i class="menu-ico ico5"></i></div>
											<div class="menu-right">
												<span class="name">Programming & App Development</span>
												<span class="old">Độ tuổi: 6-18</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="menu-left"><i class="menu-ico ico6"></i></div>
											<div class="menu-right">
												<span class="name">Programming & App Development</span>
												<span class="old">Độ tuổi: 6-18</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<div class="right">
				<ul class="account">
					<li>
						<a href="#">
							<span class="img"><img src="<?php echo get_template_directory_uri() ?>/img/account.svg" alt="" title=""/></span>
							<span class="text">Tài khoản</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="img"><img src="<?php echo get_template_directory_uri() ?>/img/cart.svg" alt="" title=""/></span>
							<span class="text">Giỏ hàng</span>
						</a>
					</li>
					<li>
						<a onclick="openMobileMenu()">
							<span class="img"><img src="<?php echo get_template_directory_uri() ?>/img/bars.svg" alt="" title=""/></span>
							<span class="text">Menu</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

<div class="menu-mobile">
	<span class="close" onclick="closeMobileMenu()"></span>
	<div class="logo-mb"><img src="img/logo-white.png" alt="" title=""/></div>
	<nav class="navbar">
		<ul>
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Khóa học</a></li>
			<li><a href="#">Giới thiệu</a></li>
			<li><a href="#">Teky shop</a></li>
		</ul>
	</nav>
</div>