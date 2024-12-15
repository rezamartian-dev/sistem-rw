<?php //$url='https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/' ?>
<?php $url = base_url() ?>
<!DOCTYPE html>
<html lang='en'>
<head>

	<meta charset='utf-8'>
	<title>SISTEM RW</title>
	<meta name='description' content>
	<meta name='author' content>
	<meta name='keywords' content>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>

	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>

	<link href='https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'
		  rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i'
		  rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700&display=swap' rel='stylesheet'>


	<link rel='stylesheet' href='<?= $url ?>assets/css/bootstrap.min.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/jquery-ui.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/font-awesome.min.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/flaticon/flaticon.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/owl.carousel.min.css'>
	<link rel='stylesheet' href='<?= $url ?>assets/css/owl.theme.default.min.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/jquery.fancybox.min.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/slicknav.min.css'>
	<link rel='stylesheet' href='<?= $url ?>assets/css/nav-menu.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/vmm.menu.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/animate.css'>
	<link rel='stylesheet' href='<?= $url ?>assets/css/ripple.min.css'>

	<link rel='stylesheet' href='<?= $url ?>assets/css/style.css'>

	<link rel='shortcut icon' type='image/png' href='<?= $url ?>assets/img/favicon.ico'>


	<!--[if lt IE 9]>
	<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
	<script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
	<![endif]-->

	<link rel='stylesheet' type='text/css' href='<?= $url ?>assets/revolution/css/settings.css'>

	<link rel='stylesheet' type='text/css' href='<?= $url ?>assets/revolution/css/layers.css'>

	<link rel='stylesheet' type='text/css' href='<?= $url ?>assets/revolution/css/navigation.css'>
</head>
<body class='dark-bg'>
<div id='preloader'></div>

<header class='header-area fotolia-header header_2'>
	<div class='voidmega-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-12 col-xl-10'>
					<div class='vmm-header header-transparent-on vmm-mega-menu mega-menu-fullwidth'>
						<div class='container'>

							<div class='vmm-header-container'>

								<div class='logo' data-mobile-logo="<?= base_url() . $setting['image'] ?>"
									 data-sticky-logo="<?= base_url() . $setting['image'] ?>">
									<a href='index.html'><img src="<?= base_url() . $setting['image'] ?>"
															  alt='logo'/></a>
								</div>

								<div class='burger-menu'>
									<div class='line-menu line-half first-line'></div>
									<div class='line-menu'></div>
									<div class='line-menu line-half last-line'></div>
								</div>

								<nav class='vmm-menu menu-caret submenu-scale'>
									<ul>
										<li class='mega-menu'><a href='index.html'>Home</a></li>
										<li class='mega-menu'><a href='#'>Gallery</a></li>
										<li class='mega-menu'><a href='#'>Pages</a></li>
										<li class='submenu-right'><a href='blog-1.html'>Blogs</a></li>
										<li><a href='contact.html'>Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class='d-none col-xl-2 d-xl-block'>
					<div class='search-menu-btn'>
						<div class='searchV1-btn'>
							<div class='soc-btn search-open'>
								<i class='fa fa-search'></i>
							</div>
							<div class='soc-btn search-close'>
								<i class='fa fa-close'></i>
							</div>
						</div>
						<span class='menu2nd-btn'>
<i class='fa fa-bars fa-2x'></i>
</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div class='search_V1'>
	<form>
		<input type='text' class='input'>
	</form>
</div>

<div class='secondMenu_V1'>
	<nav class='fotoliaCircular-menu'>
		<div class='circle'>
			<a href='index.html'><i class='flaticon-001-camera'></i></a>
			<a href='portfolio-1.html'><i class='flaticon-030-album'></i></a>
			<a href='portfolio-2.html'><i class='flaticon-025-video-camera'></i></a>
			<a href='gallery-3.html'><i class='flaticon-019-histogram'></i></a>
			<a href='album-1.html'><i class='flaticon-017-len-2'></i></a>
			<a href='album-2.html'><i class='flaticon-004-spotlight'></i></a>
			<a href='portfolio-4.html'><i class='flaticon-022-portrait'></i></a>
			<a href='portfolio-5.html'><i class='flaticon-037-timer'></i></a>
		</div>
		<span class='menu2nd-btn'>
<i class='fa fa-times fa-2x'></i>
</span>
	</nav>
</div>


<section class='hero-rev2 hero_V23'>
	<div id='rev_slider_24_1_wrapper' class='rev_slider_wrapper fullscreen-container' data-alias='website-intro'
		 data-source='gallery' style='background:#000000;padding:0px;'>

		<div id='rev_slider_24_1' class='rev_slider fullscreenbanner tiny_bullet_slider' style='display:none;'
			 data-version='5.4.1'>
			<ul>
				<?php $no = 6;
				foreach ($slider as $row): $no++ ?>
					<li data-index="rs-6<?= $no ?>" data-transition='fade' data-slotamount='default'
						data-hideafterloop='0'
						data-hideslideonmobile='off' data-easein='default' data-easeout='default' data-masterspeed='600'
						data-thumb='assets/img/revslider/3rdRev/woman2-100x50.jpg' data-rotate='0'
						data-saveperformance='off' data-title='Slide' data-param1 data-param2 data-param3 data-param4
						data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description
						data-slicey_shadow='0px 0px 0px 0px transparent'>

						<img src="<?= base_url() . $row['image'] ?>" alt data-bgposition='center center'
							 data-kenburns='on' data-duration='5000' data-ease='Power2.easeInOut' data-scalestart='100'
							 data-scaleend='150' data-rotatestart='0' data-rotateend='0' data-blurstart='20'
							 data-blurend='0' data-offsetstart='0 0' data-offsetend='0 0' class='rev-slidebg'
							 data-no-retina>


						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-9'
							 data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
							 data-width="['250','250','150','150']" data-height="['150','150','100','100']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='250'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:300,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3700&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 5;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-10'
							 data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
							 data-width="['150','150','100','100']" data-height="['200','150','150','150']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='250'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:350,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3650&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 6;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-29'
							 data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
							 data-width="['250','250','150','150']" data-height="['150','150','100','100']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='250'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:400,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3600&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 7;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-12'
							 data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
							 data-width="['250','250','100','100']" data-height='150' data-whitespace='nowrap'
							 data-type='shape' data-slicey_offset='250' data-slicey_blurstart='0'
							 data-slicey_blurend='20'
							 data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:450,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3550&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 8;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-34'
							 data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
							 data-width="['300','300','150','150']" data-height="['200','200','150','150']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='250'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:500,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3500&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 9;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-11'
							 data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
							 data-width='150' data-height="['250','150','50','50']" data-whitespace='nowrap'
							 data-type='shape' data-slicey_offset='250' data-slicey_blurstart='0'
							 data-slicey_blurend='20'
							 data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:550,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3450&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 10;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-27'
							 data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
							 data-width="['250','250','150','150']" data-height="['300','300','150','150']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='300'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:320,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3680&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 11;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-28'
							 data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
							 data-width="['300','300','150','150']" data-height="['250','250','100','100']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='300'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:360,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3640&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 12;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-30'
							 data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
							 data-width="['300','300','150','200']" data-height="['250','250','150','50']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='300'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:400,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3600&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 13;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-31'
							 data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
							 data-width="['300','300','150','150']" data-height="['250','250','100','100']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='300'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:440,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3560&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 14;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-32'
							 data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
							 data-width="['300','300','150','150']" data-height="['200','200','150','150']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='300'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:480,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3520&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 15;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-33'
							 data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
							 data-width="['450','400','250','250']" data-height="['100','100','50','50']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='250'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:310,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3690&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 16;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme' id='slide-67-layer-35'
							 data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
							 data-width="['350','400','250','250']" data-height="['100','100','50','50']"
							 data-whitespace='nowrap' data-type='shape' data-slicey_offset='250'
							 data-slicey_blurstart='0'
							 data-slicey_blurend='20' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:340,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:1;sY:1;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+3660&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 17;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption tp-shape tp-shapewrapper ' id='slide-67-layer-1'
							 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
							 data-width='full' data-height='full' data-whitespace='nowrap' data-type='shape'
							 data-basealign='slide' data-responsive_offset='off' data-responsive='off'
							 data-frames='[{&quot;delay&quot;:10,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;}]'
							 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 18;background-color:rgba(0, 0, 0, 0.5);'></div>

						<div class='tp-caption   tp-resizeme' id='slide-67-layer-2'
							 data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
							 data-fontsize="['90','90','70','50']" data-lineheight="['90','90','70','50']"
							 data-width="['none','none','481','360']" data-height='none'
							 data-whitespace="['nowrap','nowrap','normal','normal']" data-type='text'
							 data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:1000,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:0.9;sY:0.9;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;sX:0.9;sY:0.9;opacity:0;fb:20px;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['center','center','center','center']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff;font-family:Rubik;'>
							<?= $row['title'] ?>
						</div>

						<div class='tp-caption   tp-resizeme' id='slide-67-layer-3'
							 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']"
							 data-fontsize="['25','25','25','20']" data-lineheight="['35','35','35','30']"
							 data-width="['480','480','480','360']" data-height='none' data-whitespace='normal'
							 data-type='text' data-responsive_offset='on'
							 data-frames='[{&quot;delay&quot;:1000,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:0.9;sY:0.9;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;sX:0.9;sY:0.9;opacity:0;fb:20px;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]'
							 data-textAlign="['center','center','center','center']" data-paddingtop='[0,0,0,0]'
							 data-paddingright='[0,0,0,0]' data-paddingbottom='[0,0,0,0]' data-paddingleft='[0,0,0,0]'
							 style='z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Rubik;'>
							<?= $row['caption'] ?>
						</div>

						<a class='tp-caption rev-btn  tp-resizeme' href='#' target='_blank' id='slide-67-layer-7'
						   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
						   data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
						   data-width='250' data-height='none' data-whitespace='nowrap' data-type='button' data-actions
						   data-responsive_offset='on'
						   data-frames='[{&quot;delay&quot;:1000,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;sX:0.9;sY:0.9;opacity:0;fb:20px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;sX:0.9;sY:0.9;opacity:0;fb:20px;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;fb:0;&quot;,&quot;style&quot;:&quot;c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;&quot;}]'
						   data-textAlign="['center','center','center','center']" data-paddingtop='[0,0,0,0]'
						   data-paddingright='[50,50,50,50]' data-paddingbottom='[0,0,0,0]'
						   data-paddingleft='[50,50,50,50]'
						   style='z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);font-family:Rubik;background-color:rgb(235, 157, 55);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;'>GET
							STARTED </a>
					</li>
				<?php endforeach; ?>


			</ul>
			<div class='tp-bannertimer tp-bottom' style='height: 5px; background: rgb(235, 157, 55);'></div>
		</div>
	</div>

</section>


<section id='about' class='about-area about-1 section-padding'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-6'>
				<div class='about-img about3-img'>
					<img src='<?= base_url() . $about['image'] ?>' alt class='a3img-1'>
					<img src='<?= $url ?>assets/img/section-img/about-3.png' alt class='a3img-2 wow fadeInLeft'
						 data-wow-delay='.4s'>
				</div>
			</div>
			<div class='col-md-6'>
				<div class='about-text about3-text'>
					<h3 class='wow fadeInUp' data-wow-delay='.2s'><?= $about['title'] ?></h3>
					<p class='wow fadeInUp' data-wow-delay='.4s'><?= $about['caption'] ?></p>
					<a href="#" class="btn-style-1 wow fadeInUp" data-wow-delay=".8s">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class='portfolio-area'>
	<div class='gallery6-area'>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-12'>
					<div class='section-titleV1'>
						<p class='wow fadeInUp' data-wow-delay='.15s'>Our Recent Works</p>
						<h3 class='wow fadeInUp' data-wow-delay='.35s'>Our Portfolio</h3>
					</div>
				</div>
			</div>
			<div class='gallery6-wrappper'>
				<?php foreach ($this->M_crud->read_data('portofolio', '*') as $row): ?>
					<div class='g6-single'>
						<div class='g6s-img'>
							<img src="<?= base_url() . $row['image'] ?>" alt>
						</div>
						<div class='g6s-info'>
							<h4><a class='fancyGallery' data-fancybox='group-4'
								   href="<?= base_url() . $row['image'] ?>"><?= $row['title'] ?></a></h4>
							<p><?= $row['caption'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>


<section class='testimonial-area'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<div class='section-titleV1'>
					<p class='wow fadeInUp' data-wow-delay='.15s'>Testimonials</p>
					<h3 class='wow fadeInUp' data-wow-delay='.25s'>clients feedbacks</h3>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<div class='testimonial-wrapper'>
					<div id='sync1' class='testimonial-carouselV1 owl-carousel owl-theme wow fadeInUp'
						 data-wow-delay='.45s'>
						<?php foreach ($this->M_crud->read_data('testimoni', '*') as $row): ?>
							<div class='item'>
								<div class='chrisSingle-testimonial'>
									<div class='tc-text'>
										<p><?= $row['caption'] ?></p>
									</div>
									<div class='tc-name'>
										<h4><?= $row['title'] ?></h4>
									</div>
								</div>
							</div>
						<?php endforeach; ?>


					</div>
					<div id='sync2' class='tc-avatar-carousel owl-carousel owl-theme wow fadeInUp'
						 data-wow-delay='.65s'>
						<?php foreach ($this->M_crud->read_data('testimoni', '*') as $row): ?>
							<div class='item'>
								<div class='tc-avatar'>
									<img src="<?= $row['image'] ?>" alt>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class='section-padding'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<div class='section-titleV1'>
					<p class='wow fadeInUp' data-wow-delay='.15s'>Partners</p>
					<h3 class='wow fadeInUp' data-wow-delay='.25s'>Our Partners</h3>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12 no-pad'>
				<div id='sync1' class='imagePorto testimonial-carouselV1 owl-carousel owl-theme wow fadeInUp'>
					<?php foreach ($this->M_crud->read_data('partner', '*') as $row): ?>
						<div class='item' style="text-align: center!important;">
							<img src="<?= $row['image'] ?>" style='vertical-align: middle !important;height: 100px;'>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="footer-area section-padding">
	<div class="container">
		<div class="col-md-12">
			<div class="footer-copyr-logo">
				<img src="<?= base_url() . $setting['image'] ?>" alt>
				<p>© 2019 All rights reserved by <?= $setting['name'] ?></p>
			</div>
			<div class="footer-social">
				<ul>
					<li><a href="<?=$setting['twitter']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="<?=$setting['behance']?>"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="<?=$setting['facebook']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?=$setting['pinterest']?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="<?=$setting['linkedin']?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="<?=$setting['instagram']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="<?= $url ?>assets/js/jquery-3.2.0.min.js"></script>
<script src="<?= $url ?>assets/js/jquery-ui.js"></script>

<script src="<?= $url ?>assets/js/owl.carousel.min.js"></script>

<script src="<?= $url ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?= $url ?>assets/js/countdown.js"></script>
<script src="<?= $url ?>assets/js/jquery.scrollUp.js"></script>
<script src="<?= $url ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= $url ?>assets/js/shuffle.min.js"></script>
<script src="<?= $url ?>assets/js/jquery.fancybox.min.js"></script>
<script src="<?= $url ?>assets/js/jquery.ripples.min.js"></script>

<script src="<?= $url ?>assets/js/jquery.slicknav.min.js"></script>

<script src="<?= $url ?>assets/js/vmm.menu.js"></script>

<script src="<?= $url ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $url ?>assets/js/imagesloaded.pkgd.js"></script>
<script src="<?= $url ?>assets/js/masonry.pkgd.js"></script>
<script src="<?= $url ?>assets/js/wow.js"></script>

<script type="text/javascript" src="<?= $url ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= $url ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= $url ?>assets/revolution/js/revolution.addon.slicey.min.js"></script>

<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
		src="<?= $url ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<script src="<?= $url ?>assets/js/theme.js"></script>


<script>
	$(document).ready(function () {
		$('.imagePorto').owlCarousel({
			items: 6,
			slideSpeed: 2000,
			margin: 10,
			nav: true,
			autoplay: true,
			dots: true,
			loop: true,
			responsiveRefreshRate: 200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 3
				},
				600: {
					items: 3
				},
				1000: {
					items: 6
				}
			}
			// navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		});
	});
</script>
</body>
</html>
