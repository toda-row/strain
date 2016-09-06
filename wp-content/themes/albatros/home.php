<?php get_header(); ?>

<?php get_template_part( 'parts_homeheader' ); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="//schema.org/Blog">

<?php get_template_part( 'parts_slide' ); ?>

<?php get_template_part( 'parts_add_top' ); ?>

<?php $toplayout = get_option('opencage_toppage_archivelayout');?>
<?php if ( $toplayout == "toplayout-big" ) : ?>
<?php get_template_part( 'parts_archive_big' ); ?>
<?php else : ?>
<?php get_template_part( 'parts_archive_simple' ); ?>
<?php endif;?>

<?php get_template_part( 'parts_add_bottom' ); ?>
						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
