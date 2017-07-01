<?php get_header(); ?>

    <!-- Content -->
    <div class="wrap">
        <section class="content">

            <h2><?php _e('Our Blog', 'aletheme'); ?></h2>
          
                <?php 
                // get_breadcrumbs(); 
                ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('postpreview' );?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>


        </section>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <div class="wrap">
            <div class="col-1 left_link_pag">
                <?php  
                   if (get_previous_posts_link()) {
                        echo get_previous_posts_link();
                   } else {
                    echo "<span class='notactive'></span>";
                   }
                ?>
            </div>
            <div class="col-10">
                <?php ale_page_links(); ?>
            </div>
            <div class="col-1 right_link_pag">
                <?php  
                   if (get_next_posts_link()) {
                        echo get_next_posts_link();
                   } else {
                    echo "<span class='notactive'></span>";
                   }
                ?>
            </div>
        </div>
    </div> 
<?php get_footer(); ?>