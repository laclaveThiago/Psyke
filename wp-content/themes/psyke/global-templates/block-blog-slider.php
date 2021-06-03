<?php
/**
 * Posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<!-- Lasts Posts-->     
<?php 
$posts = new WP_Query(
    array(
        'post_type'   => 'post',
        'posts_per_page' => 3
    )
);

if( $posts->have_posts() ) : 
  ?>
  <section class="section-blog"> 
    <div class="section-blog--inner">
        <div class="padding-regular bg-tertiary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h3 class="text-center text-alternate text-terracota-dark">Lunes Mindful en Psyke</h3>
                        <p class="text-center text-white text-uppercase">Reflexiones terapéuticas para iniciar la semana con la intención de vivir el presente y aspirar a una vida plena con sentido</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding-regular">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="slick-posts">
                        <?php
                            while( $posts->have_posts() ) : 
                                $posts->the_post(); 
                                    ?>
                                    <div class="slick-item">
                                        <?php get_template_part( 'loop-templates/content-card--post' ); ?>
                                    </div>
                                    <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding-regular">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p class="text-center"><a href="/blog" class="btn btn-outline btn-outline--primary">Ver todas</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>