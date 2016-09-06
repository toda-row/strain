<?php if ( get_header_image() && is_front_page()  && !is_paged() ) : ?>
<?php if ( get_option( 'post_options_headerimg' ) ) : ?>
<div id="custom_header_full">
<img src="<?php header_image(); ?>" class="custom_header_img">
</div>
<?php else:?>
<div id="custom_header" style="background: url(<?php header_image(); ?>) no-repeat center center;">
</div>
<?php endif; ?>
<?php endif; ?>