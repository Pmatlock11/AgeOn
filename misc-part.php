<div class="misc_area">
			<div class="container">
				<div class="row pledge_area">
					<div class="col-sm-6 no-left-padding">
						<h2><?php the_field('newsletter_section_title', 8); ?></h2>
						<ul class="list-unstyled demo_links">
                            <?php if (have_rows('feature', 8)) : ?>
                            <?php while (have_rows('feature', 8)) : the_row(); ?>
                            <li><?php the_sub_field('feature_title'); ?></li>
                            <?php endwhile;
                            endif; ?>
                        </ul>
					</div>
					<div class="col-sm-5 box text-center">
						<div class="newsletter_form">
							<form>
								<strong><?php the_field('newsletter_heading', 8); ?></strong>
								<div class="layout_clear">
									<?php echo do_shortcode('[contact-form-7 id="97" title="Newsletter Form"]'); ?>
								</div>
								<p><?php the_field('newsletter_text', 8); ?></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>