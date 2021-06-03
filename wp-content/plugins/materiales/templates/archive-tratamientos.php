<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper wrapper-tratamientos" id="archive-wrapper">


<div class="hero hero-01 hero-generic hero-tratamientos--archive" data-bg-color="<?php echo get_post_meta( get_the_ID(), 'configurar_elementos_de_la_pagina_color-de-fondo', true ); ?>" style="background-color:<?php echo get_post_meta( get_the_ID(), 'configurar_elementos_de_la_pagina_color-de-fondo', true ); ?>;">
        <div class="hero--wrapper">
            <div class="hero--inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumbs">
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url(); ?>">
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3848 2.751L11.5502 3.03751C11.5398 3.04422 11.5292 3.05078 11.5189 3.05768C11.4984 3.06907 11.479 3.08227 11.4609 3.09714C11.6097 3.41557 11.34 3.75541 11.5094 4.07517C11.4656 4.11029 11.3754 4.14006 11.4042 4.20553C11.4576 4.32705 11.467 4.42143 11.3415 4.49614C11.3358 4.49854 11.331 4.50266 11.3277 4.50792C11.3245 4.51318 11.3229 4.51933 11.3233 4.52552C11.3236 4.53171 11.3259 4.53763 11.3298 4.54246C11.3337 4.54729 11.339 4.5508 11.3449 4.55251C11.5097 4.63676 11.4428 4.74818 11.4127 4.88077C11.3848 5.00371 11.4328 5.14216 11.4351 5.274C11.4412 5.62718 11.3432 5.97802 11.3987 6.33136C11.4166 6.44508 11.2306 6.46299 11.3082 6.6147C11.3441 6.68504 11.3811 6.81961 11.3192 6.93858C11.2698 7.03353 11.3326 7.14924 11.3176 7.26482C11.302 7.36886 11.317 7.4752 11.3608 7.57084C11.4046 7.66648 11.4754 7.74727 11.5644 7.80333L11.4973 7.84211C11.5074 8.00294 11.5747 8.06164 11.726 7.97017C11.752 8.01527 11.7779 8.06024 11.8041 8.1057L11.7129 8.16542C11.7387 8.31139 11.965 8.33794 11.9372 8.49058C11.9155 8.60723 11.9164 8.72694 11.9398 8.84325C11.8545 8.95013 11.7587 8.80811 11.683 8.88024C11.7008 8.93679 11.7716 8.98463 11.6836 9.07209C11.5873 9.05781 11.4589 9.07056 11.3888 8.93025C11.2599 9.03355 11.1958 9.16963 11.1515 9.32884C11.1049 9.49637 11.019 9.6441 10.8064 9.6589C10.6459 9.67007 10.5902 9.89515 10.3852 9.84554C10.3751 9.83323 10.3441 9.79573 10.3108 9.76013C10.1834 9.62345 10.097 9.48197 10.1058 9.26176C10.1194 8.91666 10.0108 8.56474 10.0398 8.22295C10.0642 7.93487 9.87749 7.86001 9.71642 7.76002C9.60155 7.69054 9.48049 7.63186 9.35478 7.58474C8.98238 7.44288 8.65157 7.20497 8.25744 7.11815C8.04413 6.89531 7.71638 6.94544 7.4714 6.78367C7.23333 6.62648 6.91454 6.6556 6.67147 6.52274C6.2232 6.27762 5.72515 6.21708 5.25022 6.07385C4.77812 5.93149 4.2981 5.81525 3.82155 5.68756C3.33245 5.5565 2.85008 5.37079 2.35239 5.30972C1.85227 5.24833 1.38485 5.08907 0.907174 4.99059L0.678239 4.59411L0.969684 4.42584C0.849464 4.28115 0.896207 4.14907 0.958853 4.07272C1.21713 3.75821 1.50968 3.50231 1.93449 3.39973C2.58314 3.24306 3.2206 3.03891 3.86068 2.8473C4.35177 2.70032 4.83775 2.53201 5.31485 2.35696C5.92936 2.1315 6.55785 1.93179 7.14954 1.64095C7.38178 1.52681 7.66083 1.50042 7.86518 1.33806C7.96707 1.2571 8.09631 1.45516 8.16045 1.26355C8.20163 1.14078 8.36527 1.20289 8.45469 1.1366C8.55773 1.0602 8.69103 1.04996 8.79524 0.992618C8.89945 0.93528 9.01923 0.963084 9.11284 0.886933C9.20049 0.815653 9.31783 0.803316 9.42037 0.763093C9.6597 0.671569 9.90519 0.597027 10.155 0.54002C10.4527 0.469381 10.7161 0.555828 10.9371 0.766414C10.9649 0.788759 10.9901 0.814115 11.0123 0.842018C11.0724 0.952896 11.246 0.931367 11.2735 1.03033C11.3419 1.27567 11.4879 1.50557 11.4803 1.76273C11.4794 1.88374 11.497 2.00417 11.5325 2.11984C11.5636 2.23299 11.4617 2.32546 11.5175 2.45195C11.5565 2.53947 11.5347 2.68092 11.3848 2.751ZM3.57504 4.20832C3.68809 4.23916 3.71337 4.48316 3.89989 4.3418C3.91206 4.33816 3.92497 4.3377 3.93737 4.34046C3.94978 4.34321 3.96127 4.34909 3.97076 4.35754C4.06732 4.53796 4.26036 4.5028 4.4114 4.5504C4.70805 4.64379 5.01386 4.70754 5.31149 4.79798C5.61237 4.88939 5.92277 4.93504 6.20689 5.10335C6.41111 5.22432 6.67308 5.2639 6.91521 5.29983C7.17433 5.33832 7.36616 5.53159 7.61508 5.57089C7.95914 5.62533 8.23187 5.87081 8.57785 5.91312C8.59093 5.91341 8.60373 5.91697 8.61508 5.92347C8.91931 6.15928 9.29905 6.24558 9.62721 6.43444C9.75035 6.5053 9.85009 6.64169 10.0221 6.59394C10.0954 6.50156 10.0258 6.40444 10.0332 6.31222C10.0558 6.03156 10.0207 5.74685 10.0913 5.46977C9.95931 5.34958 10.1151 5.21388 10.0706 5.07086C10.0332 4.95045 10.0462 4.77795 10.0809 4.64001C10.1156 4.50207 10.0168 4.36491 10.101 4.23587C9.98761 4.05851 10.1294 3.88239 10.1013 3.69174C10.0512 3.35086 10.077 2.99694 10.0538 2.64765C10.0415 2.47868 9.98959 2.31498 9.90229 2.16979C9.69617 2.06361 9.51747 2.10365 9.35925 2.14866C8.92556 2.27183 8.4887 2.39743 8.07461 2.57288C7.42674 2.84737 6.7647 3.08065 6.10407 3.31886C5.56379 3.51377 5.0183 3.69498 4.47418 3.87951C4.17182 3.98196 3.85152 4.03508 3.57504 4.20832Z" fill="currentColor"/>
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero--collumn hero--collumn-content">
								<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
								?>
								<div class="hero-content">
									<?php the_archive_description( '<div class="taxonomy-description mb-6">', '</div>' ); ?>
								</div>
                                
                            </div>
                        </div>
                    </div><!-- ./row -->
					<?php
						if ( have_posts() ) :
					?>
					<div class="row">
						<?php
							// Start the loop.
							
							while ( have_posts() ) :
								the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								echo '<div class="col-md-4 col-lg-4 col-xl-3 mb-3">';
								get_template_part( 'loop-templates/content-card--tratamiento' );
								echo '</div>';
							endwhile;

						?>
					</div>
					<?php
						else :
							get_template_part( 'loop-templates/content', 'none' );
						endif;
					?>
					<div class="row">
						<div class="col-md-12">
							<?php
								// Display the pagination component.
								understrap_pagination();
							?>
						</div>
					</div>
                </div><!-- ./container -->
            </div><!-- ./hero--inner -->
            <div class="blob">
                <svg width="914" height="1265" viewBox="0 0 914 1265" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M158.764 524.287C201.764 424.287 105.12 375.287 16.7635 278.287C-75.2364 177.287 249.764 46.2868 309.764 24.2868C369.764 2.28677 692.764 -44.7132 791.764 117.287C890.764 279.287 1029.76 481.287 739.764 563.287C449.764 645.287 494.764 957.287 563.764 1078.29C632.764 1199.29 499.764 1264.29 412.764 1264.29C325.764 1264.29 178.764 1219.29 197.764 1103.29C226.463 928.069 40.1818 972.031 6.76356 824.287C-31.2365 656.287 115.764 624.287 158.764 524.287Z" fill="<?php if(get_post_meta( get_the_ID(), 'configurar_elementos_de_la_pagina_color-blob', true )) : echo get_post_meta( get_the_ID(), 'configurar_elementos_de_la_pagina_color-blob', true ); else: echo "currentColor"; endif; ?>"/>
                </svg>
            </div>
            <div class="texture">
                <svg idth="515" height="446" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 515 446" style="enable-background:new 0 0 515 446;" xml:space="preserve">
                    <style type="text/css">
                        .st0{opacity:0.1;}
                        .st1{fill:#828DAB;}
                    </style>
                    <g class="st0">
                        <path class="st1" d="M465.8,355.6c-3.3,2.6-4.9,6.4-5.6,10.6c-0.4,2.3-2.5,2.7-4.1,3.1c-1.4,0.4-2.7,0.4-3.8,1.6
                            c-0.4,0.2-0.8,0.4-1.2,0.4c-0.4,0-0.9,0-1.3-0.2c-2-1.2-4-2.1-5.8-3.6c-6.3-5.6-11-12.5-15.3-19.5c-4.4-7.2-9.1-14.3-12.5-22.1
                            c-1.1-2.4-1.1-2.4,1.6-4.3c2.2,4.1,4.2,8.3,6.5,12.3c1.9,3.2,4.1,6.1,6.3,9.4c0.3-0.5,0.4-1.1,0.4-1.7c-0.1-0.6-0.3-1.2-0.7-1.6
                            c-4.7-6.5-8.7-13.4-12.1-20.7l1.8-1.2c0.1,0.1,0.5,0.4,1.1,0.9v-2.7l4.9-1c1.5,0.7,2.2,3.3,4.6,3.6c-0.1,2.6,2.2,4,3.4,5.9
                            c1.5,2.2,3,4.3,4.8,6.2c1.6-0.2,2.7-0.4,3.9-0.5c4.1-0.3,4-0.2,6.6,2.1c2.9,2.5,4.8,6,8.5,7.6c0.1,0.1,0.2,0.2,0.3,0.3
                            c0.1,0.1,0.1,0.3,0.2,0.4c0.1,2.7,1.6,3.6,4.1,4.3c2.1,0.5,2.7,2.7,2.8,4.9C465.3,351.8,465.6,353.4,465.8,355.6z"/>
                        <path class="st1" d="M97.3,47.6c3,1.5,3,1.5,4.5-1.6c2-0.7,4.5,0.7,6.3-1.2c2,0.6,4.1,1.1,6.2,1.5c3.4,0.5,5.1,3.1,7,5.3
                            c1.3,1.5,2.6,3,3.8,4.6c1.4,1.9,3,3.6,4.4,5.5c1.3,1.7,2.3,3.6,3.4,5.4c0.4,0.5,0.6,1,0.7,1.6c-0.1,0.6,0,1.3,0.3,1.9
                            c0.2,0.6,0.6,1.1,1.1,1.5c1.9,1.9,1.8,4.8,2.4,7.2c0.6,2.3,0.3,4.8,0.1,7.3c-0.1,0.9-0.2,2.9-2.2,1.4c-0.1-0.1-0.9,0.7-1.3,0.9
                            c-0.5,0.3-1.4,0.9-1.6,0.7c-2.1-1.9-2.7-0.5-3.6,1.3c-1.4,2.7-2.3,2.5-6.2,1.8c-2.4-0.4-4.8-0.5-6.2-2.5c-3.7-5.5-7.5-11-8.1-18.1
                            c-0.2-2.8-1-5.8-3.3-7.8c-2-1.8-3.3-4.3-6.1-5.2c-0.8-0.3-1.4-1.3-2.1-2c-1.4-1.5-2.1-3.4-2.1-5.5C94.6,49.4,96.4,48.8,97.3,47.6z"
                            />
                        <path class="st1" d="M413.2,232.2c-2.4-2.4-4.4-4.8-6.8-6.7c-6.8-5.6-10-13.6-14-21c-1.8-3.3-1.3-7.1-1.2-10.7
                            c0-0.6,0.9-1.2,1.4-1.9c0.7,1.4,1.3,2.6,2.3,4.5v-6.7c1.4-0.7,2.8-1.1,3.8-2c0.5-0.4,1.1-0.7,1.7-0.8c0.6-0.1,1.3,0,1.9,0.2
                            c1.3,0.3,2.3,1.4,3.6,2.2c-0.7,3.5,0.6,6.4,2.3,9.5c1.5-0.4,3.3,0.7,4.9-0.9c0.3-0.2,0.6-0.3,0.9-0.3c0.3,0,0.6,0.1,0.9,0.2
                            c3.7,2.2,8.3,3.4,10.2,8.1c0.3,0.8,0.7,1.9,1.4,2.3c1,0.6,0.1,2.3,1.9,2.4c1.5,0.1,0.5,1.5,0.8,2.3c0.4,1,0.7,2,0.9,3
                            c0.1,1,0.1,1.9,0,2.9c-3.6,3.2-6.3,7.3-8,11.9L413.2,232.2z"/>
                        <path class="st1" d="M7.2,4.9c0.9-1.2,1.6-2.2,2.3-3.2c0.3-0.3,0.7-0.6,1.1-0.8c1.1-0.6,2,1.2,3.2,0.4c1-0.7,2.1-1.1,3.3-1.3
                            c1-0.1,2.4,1.1,2.9,0.7c1.1-0.8,1.8-1.1,2.8,0c0.2,0.2,0.9,0.1,1.3-0.1C27.3-0.1,27.3-0.1,29,3l0.8-2.3c0.5,1.1,0.9,2.2,1.2,3.3
                            c0.2,1.2,0.3,2.5,0.4,3.7c-0.1,1.3,0.2,2.6,0.7,3.8l0.5-4.7l0.5,0c0.1,0.8,0.2,1.7,0.3,2.5c0,4.2-0.2,8.4,0.1,12.6
                            c0.3,3.6-0.5,7.1-2.5,10.1c-0.8-0.8-1.5-1.9-2.4-0.1c-1,2-2.5,1.8-4.6,0.9c-0.3,2.2-0.5,4.7-4.1,3.9v-5.4L19,31.3
                            c-0.6,1.8-1.1,3.7-1.7,5.6c-1.6-1.1-2.9-2.2-2.6-4.5c0.1-0.6-0.7-1.3-0.9-2c-1-3.1-1-3.1-3.6-3.1c-0.5,0-1,0-1.5,0H7.4
                            c-1.2-1.2-2.3-2.4-3.5-3.5c-2.5-2.3-3.3-5.4-3.7-8.7c-0.2-1.6,0.1-3.3-0.1-4.9c-0.2-1.8,0.7-3,1.4-4.3C3.1,3.5,4,3.4,7.2,4.9z"/>
                        <path class="st1" d="M291.5,43.5c-2.1,1.4-4.1,2.8-6.2,4.1c-0.2,0.1-0.9-0.6-1.7-1.2c-0.4,0.8-0.8,1.6-1.3,2.3
                            c-0.6,0.7-1.3,1.4-2,2.1c-1.4,1.4-2.7,3-4.7,0.8c-0.2-0.2-0.6,0-0.9,0c-2.3-0.2-4.5,0.3-6.7-1.5c-1.8-1.5-4.2-2.5-5.9-4.3
                            c-1.7-1.6-3.2-3.4-4.4-5.5c-1.7-3.3-3.5-6.6-2.8-10.5c0.3-1.1,0.8-2.2,1.4-3.2l3,2.5c0.8-2.6,0.6-5.7,3.1-8l3,2.3v-3.6
                            c3.2-0.5,6.1-1.6,9.3-1.5c1.7,0,3.3,0.7,4.6,1.8c1.5,1.4,3.3,2.5,4.6,4.3c1.1,1.7,2.6,3.1,3.8,4.8c1.9,2.8,2.5,6.1,3.9,9.1
                            C292,39.8,291.5,41.8,291.5,43.5z"/>
                        <path class="st1" d="M85,136.7v10.5c1-2.6,0.8-5.3,0.9-8c0-1.1-0.5-2.4,0.8-3c1.3-0.7,2.7-1.2,4.2-1.5c0.5-0.1,1.4,1.1,1.7,1.9
                            c0.2,1,0.2,1.9,0.1,2.9c0.8-0.3,1.3-0.7,1.7-0.7c0.9,0.1,2.1,0.9,2.6,0.6c2.5-1.9,5.3-0.6,7.9-0.8c0.7,0,1.4,0.1,2,0.4
                            c0.6,0.3,1.2,0.7,1.6,1.2c1.4,2.4,4.2,3.1,5.7,5.9c0,1.5,0.5,3,1.4,4.2c1.6,2.1,3,4.7,2.5,7.7c-0.1,1.5-0.1,3.1,0,4.6
                            c-3.3,2-6.8,3.9-10.1,6c-3.5,2.2-6.6,0.7-9.6-0.8c-2.2-1.1-5-1.7-5.8-4.7c-4.8-2.2-5.7-7.2-8.2-11.1c-1.7-2.6-1.7-5.6-2.2-8.3
                            c-0.4-2.3,1.2-4.9,1.9-7.3L85,136.7z"/>
                        <path class="st1" d="M179.4,189.4l-6.7-6.7c-0.1-1.8-0.1-3.6,0.1-5.4c0.1-0.7,1.1-1.4,1.9-1.8c0.3-0.2,1,0.5,1.5,0.8
                            c0.7-1.4,1.1-3.3,3.5-2.8c0.5,0.1,1,0.1,1.4-0.1c1.2-1,2.5-1.9,4-1.5c2.7,0.8,5.8,1.2,7.9,3.1c4.2,3.7,8.2,7.8,10.3,13.2
                            c1.3,3.2,2.3,6.5,3,9.9c0.2,0.9,0.1,1.8-0.2,2.6s-0.9,1.5-1.6,2.1c-2.8,1.9-5.4,4-8.3,5.9c-1,0.7-2.2,1-3.4,1
                            c-7.1-0.6-12.1-3.9-14.2-11.9c-0.3-1.2-1-2.4-0.9-3.5C178,192.5,178.6,190.9,179.4,189.4z"/>
                        <path class="st1" d="M191.5,365.5l-0.6-2.9c0,3.9-4.1,5.3-5,8.6c-0.1,0.3-0.2,0.5-0.4,0.7c-0.2,0.2-0.4,0.4-0.7,0.5
                            c-0.3,0.1-0.6,0.1-0.8,0.1c-0.3,0-0.6-0.1-0.8-0.2c-1.2-1.1-2-0.3-2.6,0.1c-0.7,0.5-1.6,0.8-2.5,0.8c-0.9,0-1.8-0.3-2.5-0.8
                            c-5.2-3-10.6-5.8-13.6-11.4c-3.7-2-4.8-6.1-7.1-9.2c-1.1-1.5-1.5-3.6-2.3-5.6c1.4-2,3.3-1.5,5.7-0.3c-0.2-1.1-0.2-2.2-0.6-2.8
                            c-0.7-0.9,0-1.2,0.4-1.4c1.7-0.7,3.4-1.2,4.8-2.5c0.3-0.3,1.3-0.2,1.9,0c1.1,0.3,2,1,3.1,0c0.3-0.3,1.4,0.3,2.1,0.6
                            c5.9,2.6,11.2,5.8,14.7,11.5c0.7,0.9,1.5,1.6,2.3,2.3c2.3,2.1,2.7,5.2,4.4,7.4C192.5,362.7,192.2,364,191.5,365.5z"/>
                        <path class="st1" d="M487.4,138.3l0.4-2.8c0.4,0.3,0.7,0.4,0.8,0.6c1.2,3.1,2.8,6,3.5,9.3c0.5,2.1,1.1,4-0.9,5.6
                            c-1.4,1.1,0,4.2-3,4c-1.4,2.3-3.7,2.1-5.9,1.9c-0.4,1.5-0.9,3-1.5,4.4c-0.7,1.5-3.1,1.9-5.6,1.2c-0.6-0.2-1.1-0.7-1.6-0.7
                            c-4.1,0.4-4,0.4-5.8-2.8c-0.9-1.5-1.8-3.1-2.5-4.8c-0.3-1-0.9-1.8-1.6-2.5c-0.7-0.7-1.6-1.3-2.5-1.6c-1.5-0.6-2.7-1.6-3.7-2.8
                            c-1-1.2-1.6-2.7-1.9-4.3c-0.5-2.9,0.9-5.5,3.4-7.5c1.3,1.6,2.5,3.3,4.3,5.6c0-2.4,0-3.9,0-5.5c0-1.6,0.2-1.3,2.7-2.4
                            c1.8-0.8,4.4,0.2,5.4-2.3c1.8-0.1,3.5-0.1,5.3-0.2c3.2-0.1,6.1,0.2,7.6,3.8C484.8,135.8,486.3,136.9,487.4,138.3z"/>
                        <path class="st1" d="M6.8,161.9c-1.4-0.2-2.8-1-3.8-2c-1-1.1-1.6-2.5-1.8-3.9c-0.4-3.1-1.5-6.1-1.2-9.3c0.3-4.2,0.3-8.4,0-12.6
                            c-0.2-2,1.2-3.5,1.1-5.4c0-0.5,0.7-1.5,1-1.4c2.5,0.1,3.7-2.6,6.3-2.6c1.7,0,3.5-1.6,5.4-2.7c1.9,1.9,6-0.5,7.6,3.8
                            c-1,3,1.5,5.6,2.4,8.7c0.1,0.4,0.6,0.8,0.6,1.2c0,4.8,0,9.6,0,14.9l-2-1.7c0.3,1.1,0.2,2,0.6,2.3c0.4,0.3,1.3,0,1.9,0.2
                            c0.3,0.1,0.4,0.8,0.4,1.2c0,0.2-0.4,0.6-0.6,0.6c-1.2-0.2-2.3-0.6-3.6-0.9c-0.9,1.9-1.8,3.9-2.5,5.4l-2.9-0.2
                            c1.4,1.4-0.2,1.9-0.8,2.8c-0.5,0.9-1,1.8-1.5,2.7c-3.1-0.3-4.2-2.3-5-4.9L6.8,161.9z"/>
                        <path class="st1" d="M365.6,386.1c-2.5-0.1-4.9-0.8-6.1,2c-2.1-2.7-2.3-4.6-0.2-6.8c1.4-1.5,2.4-3.3,4.2-4.6
                            c1.6-1.1,2.2-3.6,3.6-5.2c1.1-1.2,2.7-2,4-2.9l1.6,1.6l-2.3,1.6l0.3,0.6l3.5-0.5c0.3,0.5,0.7,1.8,1.5,2.2c5,2.6,8.1,6.9,11.2,11.3
                            c1,1.5,1.3,3.3,2.1,4.9c2,4,2.5,4.7,1.9,8.3c-0.4,2.6-0.9,5.4-3,7.5c-0.9,0.8-1.5,1.9-1.7,3.1c-0.1,2.7-1.6,3.2-3.8,3
                            c-0.6,0-1.3,0-1.9,0.2c-3.8,1-4.2,0.9-6.1-2c-2.8-4.3-4.2-9.3-5.8-14.1C367.5,393,366.6,389.5,365.6,386.1z"/>
                        <path class="st1" d="M303.7,332.6c-2.7-1.5-5.4-2.9-7.7-5.1c-4.1-4.2-8.5-8-12.3-12.5c-4-4.7-8.2-9.2-10.6-14.7
                            c0.3-2.2,3.1,0.1,3.1-2.4c0-0.7,1.8-1.4,2.8-2.1c2.4-1.7,3.8-2,5.6-0.1c1.6,1.6,3.8,2.7,6.1,3c3.6,0.8,6,3.5,9.1,5.2
                            c3.3,1.8,5.6,4.7,8.2,7.2c1.4,1.3,3.1,2.3,4.3,3.7c1.3,1.4,2.2,3.1,2.7,5c0.3,1.1-0.6,2.7-1.4,3.7c-1,1.2-1.5,2.9-3.3,3.5
                            c-1,0.3-0.9,1.5-1.1,2.4c-0.2,1.1-0.5,2.4-2.4,1.1C305.3,329.6,304.2,331,303.7,332.6z"/>
                        <path class="st1" d="M499.9,304.4c-5.6-2.3-7.9-6.5-10.3-10.7c-2.1-3.6-4-7.4-5.5-11.3c-1.5-3.9-4.2-7.6-3-12.5
                            c3.5,2.4,3.2,7.1,6.6,10.3c-0.6-4.9-3.2-8.8-4.5-14l3.2,1.8c0.2-0.8,0.3-1.7,0.5-2.6l4.6-0.9c0.5,0.7,1,1.8,1.8,2.8
                            c2.8,3.9,2.8,3.8,7.8,5.6c0.6,0.2,1.1,0.5,1.6,0.8c3.9,2.5,7.4,5.2,9.6,9.5c1,1.9,1.6,4,1.8,6.2c0.1,0.5,0.3,0.9,0.6,1.2
                            c0.2,0.1,0.3,0.3,0.3,0.5c0.1,0.2,0.1,0.4,0,0.6c0,0.2-0.1,0.4-0.3,0.5c-0.1,0.2-0.3,0.3-0.5,0.3c-2.2,1.2-3.1,3.7-5.1,5.1
                            c-0.4,0.3-0.6,0.7-0.8,1.1s-0.3,0.9-0.3,1.4c-0.2,1.4-2.9,3.2-4.2,2.9c-0.8-0.2-1.3-1.6-2.4-0.6
                            C500.9,303.1,500.4,303.8,499.9,304.4z"/>
                        <path class="st1" d="M342.1,190.8l-3,0.5l1.2,2.2l-7.2,7.2c-0.5,0-0.9,0-1.4,0c-5.5,1-9.1-2.1-12.1-5.8c-2.4-2.9-4.4-6.2-6-9.7
                            c-1-2.2-1.9-4.2-1.2-7.2c1.7,3.6,3.1,6.9,4.6,10.1l0.8-0.3c-0.1-0.6-0.2-1.2-0.4-1.9c-1-2.3-2.1-4.6-3-7c-0.4-1-1.3-2.4,1-2.8
                            c0.7-0.2,1.1-1.7,1.6-2.5c0.5-0.8,0.9-1.6,1.3-2.2c2.3-0.2,2.3,1.8,3.7,2.6l-1.1-4.2l2.7-2.1c0.6,0.6,1.4,1.6,2.2-0.2
                            c0.8-1.9,2-2.7,4-1.4c0.2,0.1,0.5,0.2,0.7,0.1c2.3-1.9,3.6,0,4.7,1.4c2.5,3.4,3.7,7.5,5.2,11.5c0.4,0.9,1.1,3.1-1.5,3.2
                            c-0.1,0-0.3,0.8-0.4,1.2c0.5,0.1,1.4,0.5,1.6,0.3c0.1-0.2,0.4-0.4,0.6-0.5c0.2-0.1,0.5-0.1,0.8,0c0.2,0.1,0.4,0.3,0.6,0.5
                            c0.1,0.2,0.2,0.5,0.2,0.7C341.2,186.8,343.2,188.8,342.1,190.8z"/>
                        <path class="st1" d="M324.4,86.8l2,2c0.2-1.4,0.3-2.5,0.4-3.8c2-0.4,4.1-0.9,6.2-1.3c1.3-0.2,2.6-0.2,3.9,0c1,0.1,0.2,1.9,2,2.1
                            c1.2,0.1,2.1,2.1,2.9,3.5c0.7,1.1-0.3,3.5,2.2,3.4c0.1,1.6,0.2,3.2,0.3,4.7c0,0.2,0,0.3,0.1,0.5l7.2,7.2c0.8-0.1,1.6,0,2.4,0
                            c1.2,0.2,2.5,1.4,1.9,2.1c-1.4,1.7,1.1,2.8,0.1,4.1c-3.8,1.1-5,1.3-8,0.7c0.8,1.7,1.4,3.1,2.3,4.9c-0.5,0.5-1.1,1.6-1.8,1.6
                            c-4,0-8.2,1-11.8-1.9c-1-0.7-2-1.4-2.9-2.3c-1.7-2.2-3.3-4.5-4.8-6.7c-0.8-1.1-1.4-2.3-2.2-3.5c-1.2-1.8-0.8-4.3-2.9-5.6
                            c0.3-2.1-0.9-3.8-1.7-5.6c-0.3-0.6-0.5-1.2-0.5-1.8c0-0.6,0-1.3,0.3-1.9c0.2-0.6,0.5-1.1,1-1.6C323.3,87.5,323.8,87.1,324.4,86.8z"
                            />
                        <path class="st1" d="M174,14.6c1.9,0,3.2,0,4.5,0c1.7,0,3.6-0.3,4,2.2c0.1,0.2,0.2,0.3,0.4,0.5s0.4,0.2,0.6,0.2
                            c2.1-0.3,2.6,1.6,3.9,2.5c3.4,2.3,3.9,6.1,4.8,9.7c0.5,2-0.2,3.5-2.5,4.8c-2.6,1.5-5.8,2.5-7.6,5.3c-1.6,0-2.8,2.5-4.7,0.5
                            c-0.4-0.3-0.8-0.4-1.3-0.4c-6.2,0.1-10-3.4-13.2-8.1c-1.6-2.4-3.7-4.5-4.3-7.5c-0.3-1.2-0.4-2.4-0.5-3.7c0-0.4,0.2-1.1,0.5-1.2
                            c2.5-0.9,4.3-3,6.7-3.9C168,14.6,171,14.2,174,14.6z"/>
                        <path class="st1" d="M166.1,251c0.7,1.1,1.2,1.9,2.3,3.5c0.2-1.7,0.3-2.3,0.4-2.9c0.2-1.9,0.2-1.9,2.7-2.2c0.3,0,0.8,0,0.9-0.2
                            c0.4-0.8,1.2-1.4,2-1.7c0.8-0.3,1.8-0.3,2.6,0c2,0.5,4,1.4,5.7,2.7c6,5.1,9.6,11.9,12.4,19.2c0.5,1.2,0.1,2.8,0.1,4.2l-1.9-0.2
                            c0.1,1.7-0.3,3-2.3,3.5c-0.4,0.1-0.7,0.4-1,0.6c-0.3,0.3-0.5,0.6-0.6,1c-0.2,2.1-2.4,1.1-3.1,2.2c-1.2-1.9-3.3,0.4-4.6-1
                            c-1.3-1.3-3.1-2.3-3.9-3.9c-2-3.4-3.6-6.9-4.8-10.6c-0.2-0.8-0.5-1.6-1-2.3c-0.5-0.7-1.1-1.3-1.8-1.7c-2.3-1.3-4.2-3.2-5.4-5.7
                            C163.7,253.5,163.6,253.5,166.1,251z"/>
                        <path class="st1" d="M257.5,194.3c-0.1-0.6-0.1-1.2,0-1.8c0.1-0.4,0.8-0.7,0.9-1.1c0.1-0.4-0.4-0.9-0.4-1.4c0-0.4,0.6-0.9,0.5-1.2
                            c-0.2-0.6-0.6-1.1-1.1-1.5c-0.5-0.2-1-0.4-1.5-0.4c0.3,1.1,0.5,1.9,0.8,2.8c-1.7-1-3.6-1.9-2.8-4.4l2.3,1c0.3-3-2.5-1.5-3.6-2.9
                            c1.6,0.2,2.6-0.9,4.2-0.7c0.7,0.1,1.7-1.5,2.8-2.6l5.4,4.4c0.2-1.2,0.3-2.1,0.5-3.2l7.2-1.4c1.2,1.6,2.2,3,3.4,4.3
                            c1,1.1,2.4,1.8,3.4,2.9c2.8,3.1,4.1,7.1,5.2,11c0.4,1.4,0.9,3.6-1.8,4c0,2.6-2.7,2.9-3.9,4.6c-1.5,2-4.2,2.4-7.1,1.2
                            c-4.4-1.8-7.2-5.2-10-8.5C260.4,197.8,258.9,196.2,257.5,194.3z"/>
                        <path class="st1" d="M337.8,257.5l2.4,0.8c0.2-4.1-4.1-5.2-4.6-9c0.7,0.2,1.4,0.6,2.1,0.9c0.9,0.8,1.7,1.6,2.5,2.5
                            c-0.1-1.5-0.7-2.9-1.7-3.9c2.6-3.1,2.6-3.1,5.6-3.1c1.7,1.9,3.1,4.3,5.2,5.6c2.4,1.4,3,3.9,4.8,5.7c1.6,1.8,2.9,3.9,3.9,6.1
                            c0.7,1.2,1,2.6,0.9,3.9c-0.2,1.6-0.9,3.9-2,4.3c-1.8,0.7-1.4,2-2,3.1c-0.8,1.5-1.9,3-3.8,3.3c-1.2,0.2-2.5,1.1-3.4,0.7
                            c-2.1-0.9-4.1-2.1-5.7-3.7c-2.8-3.1-5.5-6.4-7.9-9.8c-0.6-0.9-0.3-2.4-0.5-4l1.8,1.5C334.9,259.9,337.1,259,337.8,257.5z"/>
                        <path class="st1" d="M312.2,436.3l-2.6-1.4c-1.1,4-1.4,4.2-4.6,2.7l2.3,5.3l-2.6,1.5l-4.9-4.9c-1.1,2.4,1.8,3.5,1.6,5.8
                            c-2.6,0.4-4.1-1.4-5.6-3c-0.8-0.9-1.3-2.1-2.1-3c-3.7-3.8-7.2-7.9-10.3-12.3c-0.3-0.4-0.7-0.7-1-1c-1.9-1.8-3.9-3.6-4-6.5
                            c1.9-1.2,2.9,0.6,4.2,1.7c1.3-2.2-1.7-2.5-1.6-4.1c0.1-1.9,3.8,0.5,2.9-2.6h5.3c1.5,1.1,3,2.1,4.5,3.2c1.5,1.1,2.5,2.7,4.3,3.6
                            c1.8,0.9,3,2.9,4.6,4.3c1,0.9,1.7,2.1,3.3,2.6c1.2,0.3,1.8,2.1,3.6,1.9c0.5-0.1,1.4,0.8,1.7,1.5
                            C311.6,433.1,311.9,434.7,312.2,436.3z"/>
                        <path class="st1" d="M278.7,110.3c1.7,0.1,2.8-0.8,4.4,0.4l-2,0.7c0.6,2,1.2,3.9,1.7,5.9c0.1,0.5-0.1,1.5-0.5,1.7
                            c-2,0.8-2.5,2.9-4.1,4.1c-0.8,0.5-1.7,0.7-2.6,0.8c-0.4,0-1-0.6-1.4-0.6c-0.6,0.2-1.1,0.5-1.6,0.8c-0.8-3-0.8-3.1-4.1-4.2
                            c-2-0.7-2.4-2.6-3.8-3.8c-0.3,0.7-0.6,1.3-1,2c-0.5-0.5-1.3-1-1.3-1.4c0-5.8,0-5.9-2.6-9.4c-1.5,2.6,1.4,4.1,1.5,6.7
                            c-0.7-0.1-1.8,0-1.9-0.3c-1.2-3-3.1-5.9-1.2-9.5c0.6-1.1,0.7-1.7,2.1-1.7c0.9-0.1,1.8-0.4,2.5-1c1.9-1.2,3.8-2.6,5.9-4l0.8,1.2
                            c1.6,1.1,3.3-1.9,3.6,1.3c0.1,0.9,2.1-1.3,2.1,1.1c0,0.9,1.7,1.8,2.5,2.7c-0.3,0.8-0.6,1.5-0.9,2.3c0.2,0.2,0.5,0.3,0.7,0.5
                            c0.4-0.8,0.8-1.6,1.4-2.6c0.9,1.5,1.4,2.3,2,3.5C280.3,108.1,279.5,109.2,278.7,110.3z"/>
                        <path class="st1" d="M114.9,255.9l-3-3.8l-1.2,2.5c-1.7-0.9-3.2-2.2-4.2-3.8c-2.4-3.3-4.2-7-6.6-10.4c-1.5-2.1-1.6-4.7-1-7.3
                            c2.2-0.5,2.7,2.2,4.6,2.8v-4.7l10-1.4c3,2.7,5.4,6,6.9,9.7c0.9,2.1,2.6,3.6,3.2,6c0.2,0.9-1,2.2,0.5,2.9c-0.1,0.4-0.3,0.8-0.5,1.1
                            c-2.4-0.9-3.2,2.6-5.5,2.1c-0.2,0-0.6,0.9-0.8,1.4c-0.2,0.6-0.4,1.1-0.7,1.7C116,255.1,115.4,255.5,114.9,255.9z"/>
                        <path class="st1" d="M222.8,314.8l1.9,4.5l0.9-2.4c0.2,0.1,0.6,0.2,0.6,0.4c0.4,1.6,1.3,3.1,2.4,4.4c0.7,0.8,1.3,1.7,1.7,2.7
                            c0.4,0.8,0.9,1.5,1.6,2.1c0.7,0.6,1.6,0.9,2.4,1.1c0.3-0.6,0.6-1.3,0.8-1.6l2.7,2c0,0.6,0.1,0.9,0,0.9c-0.9,0.6-1.8,1.1-2.6,1.6
                            c0.2,1.3,0.5,2.5,0.8,4.3l-3.4-1.7c-0.6,1.3-1.3,2.6-2,4l-2.4,0.3v2.2c-2.4,1.8-4.5,1.6-6.6-0.3c-2.3-2.1-4.9-3.9-7.3-6.4l3-2
                            c-0.6-2-1.6-3.8-2.9-5.4c-1.4-1.7-2.1-3.9-3.1-5.9c1.4-1.8,2.6-0.5,3.9,0.1c0.1-0.5,0.3-1,0.1-1.4c-1-2.2-0.6-3.3,1.5-3.4
                            C219,314.8,220.9,314.8,222.8,314.8z"/>
                        <path class="st1" d="M84.1,334.1l2.3,3.4c0.2-0.7,0.5-1.1,0.4-1.5c-0.3-1.8-0.8-3.5-1.2-5.5h2.8c0.2,0.5,0.5,1.1,1.1,2.4v-4
                            c0.5-0.1,0.9-0.3,1.4-0.5c0.8-0.6,2-1.8,2.1-1.7c1.2,1,2.8,0.4,4,0.9c1.8,0.7,3.5,1.9,3.5,4.2c0,0.7-0.9,1.4-0.8,2
                            c0.1,0.5,1.4,0.6,1.7,1.1c0.2,0.3,0.2,0.6,0.2,0.9c0,0.3-0.1,0.6-0.2,0.9c-1.3,1-1,2.3-0.9,3.5c0.1,0.6,0,1.3-0.4,1.8
                            c-0.4,0.5-0.9,0.9-1.5,1c-1.4,0.4-1.8,1.3-2.1,2.7c-0.1,0.9-0.6,1.8-1.4,2.4c-0.8,0.6-1.7,0.9-2.7,0.8c-0.8,0-1.6,0-2.4,0.2
                            c-1.9,0.4-4.4,0-5-1.5c-1.5-3.5-3.6-6.7-3.2-10.8C82.1,335.3,83.1,334.8,84.1,334.1z"/>
                        <path class="st1" d="M240.4,246.4l4,1.2c0.7-1.6,0.9-3.1-0.5-4.5c1.7-1.6,2.8,0.8,4.5,0.5l0.5-2.6c1.3-1.4,2.5,1.2,4.1,0
                            c1.6-1.2,2,1.4,3.4,1.8c0.8,0.3,1.6,0.9,2.1,1.7c1.8,2.2,2.1,5.4,4.6,7.4c0.6,0.5,0.3,2.1,0.4,3.5c-2.7-1.3-2.9,3-5.5,2
                            c-0.8,1.3,0,3.7-3,4l-1.5-2.6c-0.6,1.2-0.9,1.8-1.2,2.5c-1.7,0.4-2.4-1-3-1.9c-1.7-3-4.2-5.4-7.2-7.2
                            C240.2,250.9,239.2,249.1,240.4,246.4z"/>
                        <path class="st1" d="M216.7,116.9l-6.2,4.8h-4.1c-1.6-2.3-2.1-5.3-4.5-7.2c-0.2-3.2-2.5-5.2-4.4-7.4c-0.6-0.7-0.5-2.1-0.7-3.4
                            c0.7-0.2,1.4-0.2,1.8-0.5c3.7-3.5,7.3-1.5,10.2,0.9c2.5,2.1,4.7,4.7,6.5,7.5C216.4,113,216.3,115.3,216.7,116.9z"/>
                    </g>
                </svg>
            </div>
        </div>
    </div><!-- ./hero -->

<?php
get_template_part( 'global-templates/testimonials' );
get_footer();