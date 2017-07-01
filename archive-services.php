<?php get_header(); ?>

    <!-- Content -->
    <div class="wrap">
        <section class="content">

            <h2><?php _e('Services', 'aletheme'); ?></h2>

            <?php get_breadcrumbs(); ?>
            <div class="text">
                <p>
                    <?php echo ale_get_option('service_description'); ?>
                </p>
            </div>

            <!-- # # # # # # # # -->
            <div class="tiles cf">
                    <?php global $query_string; query_posts($query_string.'&posts_per_page=-1');?>
                    <?php

                    $i = 0; 
                    if (have_posts()) : while (have_posts()) : the_post(); ?>

                    	<?php 
                    	$i++;
                    	$j = $i % 4;

                    	if ($j == 1 || $j == 2) { ?> 
                    	
                    	<div class="col-6 airport cf">
		                    <div class="col-6 img">
		                        <?php echo get_the_post_thumbnail($post->ID,'services-mini'); ?>
		                    </div>
		                    <div class="col-6 txt left">
		                        <h3><?php echo  the_title(); ?></h3>
		                        <p>
		                           <?php echo the_excerpt();; ?>
		                        </p>
		                    </div>
                		</div>

                		<?php } else {?>

                    	<div class="col-6 airport cf">
		                    <div class="col-6 txt right">
		                        <h3><?php echo  the_title(); ?></h3>
		                        <p>
		                           <?php echo the_excerpt();; ?>
		                        </p>
		                    </div>                    	
		                    <div class="col-6 img">
		                        <?php echo get_the_post_thumbnail($post->ID,'services-mini'); ?>
		                    </div>

                		</div>

                		<?php } ?>
                    <?php endwhile;  endif;  ?>                                
            </div>


        </section>
    </div>

<?php get_footer(); ?>