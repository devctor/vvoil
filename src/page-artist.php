<?php get_header(); ?>
<h5>Custom</h5>
	<main role="main">
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php $pllid =  pll_get_post($post->ID)?>
            <?php $invo = get_post_meta($pllid,'show_title_voil',true)?>
            <?php $dur_art_voil = get_post_meta($pllid,'duration_data_voil',true)?>
            <?php $public_art_voil = get_post_meta($pllid,'public_data_voil',true)?>
            <?php $from_art_voil = get_post_meta($pllid,'from_data_voil',true)?>
            <?php $calle_voil = get_post_meta($pllid,'calle_voil',true)?>
            <?php $palco_voil = get_post_meta($pllid,'palco_voil',true)?>

            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<!-- article -->
            <?php //$id = get_the_ID();?>
            <div class="titles-voil">
                <h1 class="title-voil"><?php the_title(); ?></h1>
                <p>
                    <span class="show-title-voil"><?php echo $invo; ?></span>
                </p>
            </div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p><?php //echo get_post_meta(118, 'show_titlea', true);?></p>
            <p><?php //echo get_post_meta(124, 'show_titlea', true);?></p>

            <div class="art-info-voil">
            <h3><?php pll_e("Data show");?>:</h3>
                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php pll_e("Timed");?>:   <?php echo $dur_art_voil; ?>|</span>
                    <span><i class="fa fa-users" aria-hidden="true"></i> Publico:  <?php echo $public_art_voil; ?>|</span>
                    <span><i class="fa fa-flag" aria-hidden="true"></i> Procedencia:  <?php echo $from_art_voil; ?></span>
            </div>
<div class="content-voil">
				<?php the_content(); ?>
</div>
                    <?php //echo get_post_meta(118,'duration_data',true)?>
				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>