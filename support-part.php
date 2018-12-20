
    <div class="row pledge_area">
        <div class="col-sm-6">
            <img src="<?php bloginfo('template_url'); ?>/img/img2.png">
            <div class="align_right p-top">
                <p><?php the_field('first_paragraph', 8); ?></p>
                <h2><?php the_field('support_title', 8); ?></h2>
                <p><?php the_field('second_paragraph', 8); ?></p>
            </div>
        </div>
        <div class="col-sm-5 box text-center">
            <?php the_field('support_description', 8); ?>
            <div class="newsletter_form">
                <?php echo do_shortcode('[contact-form-7 id="97" title="Newsletter Form"]'); ?>
            </div>
        </div>
    </div>
