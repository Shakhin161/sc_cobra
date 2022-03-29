<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link rel="canonical" href="<?php echo get_permalink(); ?>">
	<meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/jpg" href="<?php if (get_option('site_icon')){echo get_site_icon_url();}else{ echo get_template_directory_uri().'/favicon.jpg';}?>">
    
	
    <title>Home</title>

	<?php wp_head(); ?>

    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body class="  <?php echo implode(" ",get_body_class()); ?>">

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->


<!-- Main container -->
<div class="page-container">
    
<?php get_header(); ?>

<!-- bloc-1 -->
<div class="bloc l-bloc scroll-fx-up-out scroll-fx-zoom-pull" id="bloc-1">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col">
				<h3 class="mg-md text-center">
					Галерея<br>
				</h3>
				<p class="text-center">
					2022
				</p>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/IMG_2095.jpg" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/IMG_2095.jpg" class="img-fluid mx-auto d-block animated pulse lazyload " alt="placeholder image" data-appear-anim-style="pulse" /></a>
				<h4 class="mg-md">
					1 Тренировка
				</h4>
				<p>
					Пусто
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-0">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-0">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" data-gallery-id="gallery-1"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image.png" class="img-fluid mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пусто
				</h4>
				<p>
					Пусто
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><path class="scroll-to-top-btn-icon" d="M30,22.656l-14-13-14,13"/></svg></a>
<!-- ScrollToTop Button END-->


<?php get_footer(); ?>

</div>
<!-- Main container END -->
    
<?php wp_footer(); ?>

<!-- Additional JS -->
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/lazysizes.min.js" defer></script>
<!-- Additional JS END -->

<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/scrollFX.js?4485"></script>

</body>
</html>
