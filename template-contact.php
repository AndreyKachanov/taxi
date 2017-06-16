<?php 
/**
 * Template Name: Contact Page
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>

<div class="inner">

        <!-- Back -->
        <div class="back-left"></div>
        <div class="back-right"></div>

        <!-- Content -->
        <div class="wrap cf">
            <div class="col-6 left">
                <h2><?php echo ale_get_meta('title_one'); ?> <span><?php echo ale_get_meta('title_two'); ?></span></h2>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>                

                <div class="line"></div>

                <span><?php echo ale_get_meta('title_address'); ?>:</span>
                <p><?php echo ale_get_meta('site_address'); ?></p>
                <br/>
                <span><?php echo ale_get_meta('title_phone'); ?></span>
                <p class="phone"><?php echo ale_get_meta('site_phone'); ?></p>
                <br/>
                <div class="line"></div>

                <div class="social">

                    <?php if(ale_get_option('twi')) {?>
                        <a target="_blank" href="<?php echo ale_get_option('twi'); ?>" class="twitter"></a>
                    <?php } ?>
                    <?php if(ale_get_option('fb')) {?>
                        <a target="_blank" href="<?php echo ale_get_option('fb'); ?>" class="facebook"></a>
                    <?php } ?>
                    <?php if(ale_get_option('you')) {?>
                        <a target="_blank" href="<?php echo ale_get_option('you'); ?>" class="youtube"></a>
                    <?php } ?>                                          

                </div>

            </div>
            <div class="col-6 right">
                <h3><?php echo ale_get_meta('title_form'); ?></h3>

                <div class="form">

                    <form method="post" action="<?php the_permalink();?>">

                            <label for="name"><?php _e('Name:','aletheme'); ?></label>
                            <input name="contact[name]" type="text" placeholder="<?php _e('Your Name (required)','aletheme'); ?>" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            
                            <label for="email"><?php _e('Email:','aletheme'); ?></label>
                            <input name="contact[email]" type="email" placeholder="<?php _e('Email (required)','aletheme'); ?>" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            
                            <label for="message"><?php _e('Message:','aletheme'); ?></label>
                            <textarea name="contact[message]"  placeholder="<?php _e('Your Message (required)','aletheme'); ?>"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            

                            <input type="submit" class="submit" value="<?php _e('Send', 'aletheme')?>"/>

                        <?php wp_nonce_field() ?>
                    </form>                    

                </div>

            </div>
        </div>
    </div>

    <!-- Map -->
    <?php if(ale_get_meta('site_address')) { ?>
        <section class="map">
        <?php echo do_shortcode('[ale_map address="'. ale_get_meta('site_address') . '" width="100%" height="400px"]'); ?>
        </section>
    <?php } ?>
    <!-- Content -->
<!--     <div class="contacts-center">
        <div class="content">

            <div class="h2" ><?php the_title(); ?></div>

            <div class="contact-content">
                <div class="left">
                    <div class="contacts">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>

                <div class="right">
                    <form method="post" action="<?php the_permalink();?>">
                        <?php if (isset($_GET['success'])) : ?>
                            <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                        <?php endif; ?>
                        <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="error"><?php echo $error['msg']?></p>
                        <?php endif; ?>

                        <div class="form">
                            <input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            <input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            <input name="contact[phone]" type="text" placeholder="Phone (required)" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
                            <input name="contact[genre]" type="text" placeholder="Genre (required)" value="<?php echo isset($_POST['contact']['genre']) ? $_POST['contact']['genre'] : ''?>" required="required" id="contact-form-genre" />

                            <textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
                        </div>
                        <?php wp_nonce_field() ?>
                    </form>
                </div>
            </div>

        </div>
    </div> -->
<?php get_footer(); ?>