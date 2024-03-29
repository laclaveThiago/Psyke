<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<style>
	html,
	body {
		padding: 0;
		margin: 0;
	}
	.loader {
		background-color: #f2eee3;
		position: fixed;
		z-index: 2000; 

		width: 100%;
		height: 100%;
		min-height: 100vh;

		display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
		display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
		display: -ms-flexbox;      /* TWEENER - IE 10 */
		display: -webkit-flex;     /* NEW - Chrome */
		display: flex;             /* NEW, Spec - Opera 12.1, Firefox 20+ */

		align-items: center;
		justify-content: center;

		-moz-transition: all 300ms ease-in-out;
		-webkit-transition: all 300ms ease-in-out;
		transition: all 300ms ease-in-out;
	}
	.loader:before {
		position: absolute;
		content: '';
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: radial-gradient(circle, rgba(2,0,36,0) 60%, rgba(2,0,36,0.15) 100%);
		z-index: 1;
	}
	.loader__inner {
		margin: auto;

		width: 172px;
		height: 172px;
		padding: 42px;

		position: relative;
		
	}
	.loader__inner svg {
		position: relative;
		z-index: 2;
		opacity: 0;
		animation: animaLogotypeHome 1s linear;
	}
	
	.loader.loaderOut {
		opacity: 0;
	}
	.loader.loaderNone {
		display: none;
		visibility: hidden;
		z-index: -1;
	}

	@keyframes animaLogotypeHome {
		0% {
			opacity: 0;
			transform: translate3d(0,40px,0);
		}
		25% {
			opacity: 1;
			transform: translate3d(0,0,0);
		}
		75% {
			opacity: 1;
			transform: translate3d(0,0,0);
		}
		100% {
			opacity: 0;
			transform: translate3d(0,-40px,0);
		}
	}
	@media (prefers-reduced-motion: reduce) {
		.marquee span {
			animation: none;
			text-shadow: none;
			width: auto;
			display: block;
			line-height: 1.5;
			text-align: center;
			white-space: normal;
		}
	}
	
	
</style>
<div class="loader" id="triggerLoader">
	<div class="loader__inner">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 142 142" style="enable-background:new 0 0 142 142;" xml:space="preserve">
			<g class="psyke-logo">
				<circle fill="#8ab1b8" class="smile-base" cx="71" cy="71" r="71"/>
				<g class="smile-group">
					<path d="M69.6,112.5c-10.4,0.2-21.2-2.1-31.4-6.9c-1-0.5-1.9-0.9-2.8-1.6c-1-0.7-1.6-1.7-1-3.1c0.7-1.4,1.7-1.9,3.3-1.4
						c0.5,0.2,0.9,0.3,1.2,0.7c20.7,9.9,41.3,9.4,62.1,0.9c1-0.3,1.9-0.9,3-1.4c1.4-0.5,2.6-0.3,3.3,1c0.7,1.2,0.2,2.6-1.2,3.6
						c-0.7,0.3-1.6,0.7-2.3,1C93.2,110.2,81.9,112.5,69.6,112.5z"/>
					<path d="M45,65.8c-5.2-0.2-9.7-1.7-13.7-5.2c-0.7-0.5-1.4-1.2-1.6-1.9c-0.2-0.9,0-2.3,0.5-2.8s1.9-0.5,2.8-0.3
						c0.7,0.2,1.4,1,1.9,1.6c6.2,4.7,13.9,4.7,20.1,0c0.5-0.3,1-0.9,1.7-1.4c1.2-0.9,2.4-0.9,3.5,0.3s0.9,2.4-0.2,3.5
						c-0.5,0.5-1.2,1.2-1.9,1.7C54.3,64.4,50,65.8,45,65.8z"/>
					<path d="M99.5,65.8c-6.1-0.2-10.2-1.6-13.9-4.5c-0.7-0.5-1.6-1.2-1.9-2.1c-0.3-0.7-0.3-2.1,0.2-2.6c0.7-0.7,1.7-0.7,2.8-0.9
						c0.5,0,1,0.5,1.4,0.9c5.6,5.2,14.4,5.2,20.1,0c0.2,0,0.2-0.2,0.3-0.2c1.7-1.2,3.1-1.2,4,0c1,1.2,0.9,2.6-0.9,4
						c-1.6,1.2-3.1,2.6-5,3.3C104,64.8,101,65.3,99.5,65.8z"/>
				</g>
			</g>
		</svg>
	</div>
</div>
<script>
	var elementLoader = document.getElementById("triggerLoader");
	setTimeout(function(){ 
		elementLoader.classList.add("loaderOut");
		setTimeout(function(){ 
			elementLoader.classList.add("loaderNone");
		}, 300);
	}, 1500);
</script>

<div class="cursor"></div>
<div class="cursor-follower"></div>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md fixed-top" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 142 142" style="enable-background:new 0 0 142 142;" xml:space="preserve">
                                <g class="psyke-logo">
                                    <circle  class="smile-base" cx="71" cy="71" r="71"/>
                                    <g class="smile-group">
                                        <path d="M69.6,112.5c-10.4,0.2-21.2-2.1-31.4-6.9c-1-0.5-1.9-0.9-2.8-1.6c-1-0.7-1.6-1.7-1-3.1c0.7-1.4,1.7-1.9,3.3-1.4
                                            c0.5,0.2,0.9,0.3,1.2,0.7c20.7,9.9,41.3,9.4,62.1,0.9c1-0.3,1.9-0.9,3-1.4c1.4-0.5,2.6-0.3,3.3,1c0.7,1.2,0.2,2.6-1.2,3.6
                                            c-0.7,0.3-1.6,0.7-2.3,1C93.2,110.2,81.9,112.5,69.6,112.5z"/>
                                        <path d="M45,65.8c-5.2-0.2-9.7-1.7-13.7-5.2c-0.7-0.5-1.4-1.2-1.6-1.9c-0.2-0.9,0-2.3,0.5-2.8s1.9-0.5,2.8-0.3
                                            c0.7,0.2,1.4,1,1.9,1.6c6.2,4.7,13.9,4.7,20.1,0c0.5-0.3,1-0.9,1.7-1.4c1.2-0.9,2.4-0.9,3.5,0.3s0.9,2.4-0.2,3.5
                                            c-0.5,0.5-1.2,1.2-1.9,1.7C54.3,64.4,50,65.8,45,65.8z"/>
                                        <path d="M99.5,65.8c-6.1-0.2-10.2-1.6-13.9-4.5c-0.7-0.5-1.6-1.2-1.9-2.1c-0.3-0.7-0.3-2.1,0.2-2.6c0.7-0.7,1.7-0.7,2.8-0.9
                                            c0.5,0,1,0.5,1.4,0.9c5.6,5.2,14.4,5.2,20.1,0c0.2,0,0.2-0.2,0.3-0.2c1.7-1.2,3.1-1.2,4,0c1,1.2,0.9,2.6-0.9,4
                                            c-1.6,1.2-3.1,2.6-5,3.3C104,64.8,101,65.3,99.5,65.8z"/>
                                    </g>
                                </g>
                            </svg>
                        </a>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon">
						<span class="icon--line icon--line-1"></span>
						<span class="icon--line icon--line-2"></span>
						<span class="icon--line icon--line-3"></span>
					</span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<div class="fixed-menu">
		<div class="fixed-menu--inner">
			<nav class="menu-user">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>?p=80" class="nav-link nav-link--user" data-toggle="tooltip" data-placement="left" title="Contacto">
							<svg version="1.1" id="Capa_1_copia_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 46 46" style="enable-background:new 0 0 46 46;" xml:space="preserve">
								<path class="stColor" d="M23,0C10.3,0,0,10.3,0,23c0,12.7,10.3,23,23,23s23-10.3,23-23C46,10.3,35.7,0,23,0z M31,27.2
								c0,0.4-0.1,0.8-0.4,1.1s-0.6,0.4-1.1,0.4h-13c-0.4,0-0.8-0.1-1.1-0.4S15,27.6,15,27.2v-6.4c0-0.1,0-0.1,0.1-0.2s0.1,0,0.2,0
								c0.7,0.5,2.3,1.7,4.8,3.5l0.3,0.3c0.5,0.4,0.9,0.6,1.2,0.8c0.5,0.3,1,0.4,1.4,0.4s0.9-0.1,1.4-0.4c0.3-0.2,0.7-0.4,1.2-0.8l0.3-0.2
								c2.5-1.8,4.1-2.9,4.8-3.5c0.1-0.1,0.1-0.1,0.2,0s0.1,0.1,0.1,0.2V27.2z M31,18.8c0,0.2-0.1,0.4-0.3,0.6l-0.2,0.1
								c-0.9,0.7-2.7,2-5.3,3.9L25,23.6c-0.4,0.3-0.7,0.6-1,0.7c-0.4,0.2-0.7,0.4-1,0.4s-0.6-0.1-1-0.4c-0.2-0.1-0.6-0.4-1-0.7l-0.3-0.2
								c-2.6-1.9-4.3-3.2-5.2-3.9l-0.2-0.2C15.1,19.2,15,19,15,18.8v-0.6c0-0.4,0.1-0.8,0.4-1.1s0.6-0.4,1.1-0.4h13c0.4,0,0.8,0.1,1.1,0.4
								s0.4,0.6,0.4,1.1V18.8z"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="nav-link nav-link--user" data-toggle="tooltip" data-placement="left" title="Búsqueda">
							<svg version="1.1" id="Capa_1_copia" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 46 46" style="enable-background:new 0 0 46 46;" xml:space="preserve">
								<g>
									<path class="stColor" d="M23.5,17.7c-0.6-0.4-1.3-0.5-2-0.5s-1.4,0.2-2,0.5s-1.1,0.8-1.5,1.5s-0.5,1.3-0.5,2s0.2,1.4,0.5,2
										s0.8,1.1,1.5,1.5s1.3,0.5,2,0.5s1.4-0.2,2-0.5c0.6-0.4,1.1-0.8,1.5-1.5s0.5-1.3,0.5-2s-0.2-1.4-0.5-2S24.1,18.1,23.5,17.7z"/>
									<path class="stColor" d="M23,0C10.3,0,0,10.3,0,23c0,12.7,10.3,23,23,23s23-10.3,23-23C46,10.3,35.7,0,23,0z M30.8,29.6l-0.9,0.9
										c-0.1,0.1-0.3,0.2-0.5,0.2s-0.4-0.1-0.5-0.2l-3.1-3.1c-0.1-0.1-0.2-0.3-0.2-0.5v-0.5c-1.2,0.9-2.5,1.4-4,1.4
										c-1.2,0-2.3-0.3-3.3-0.9s-1.8-1.4-2.4-2.4c-0.6-1-0.9-2.1-0.9-3.3s0.3-2.3,0.9-3.3s1.4-1.8,2.4-2.4s2.1-0.9,3.3-0.9
										s2.3,0.3,3.3,0.9c1,0.6,1.8,1.4,2.4,2.4S28,20,28,21.2c0,1.5-0.5,2.8-1.4,4h0.5c0.2,0,0.4,0.1,0.5,0.2l3.1,3.1
										c0.1,0.1,0.2,0.3,0.2,0.5S30.9,29.5,30.8,29.6z"/>
								</g>
							</svg>
						</a>
					</li>
				</ul>
			</nav>
			<nav class="nav-slider">
				<ul>
					<li><a href="javascript:void(0)" class="goToSlider" data-slider="1"><span class="dot"></span></a></li>
					<li><a href="javascript:void(0)" class="goToSlider" data-slider="2"><span class="dot"></span></a></li>
					<li><a href="javascript:void(0)" class="goToSlider" data-slider="3"><span class="dot"></span></a></li>
				</ul>
			</nav>
		</div>
	</div>
