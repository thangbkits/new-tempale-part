<!--  Webwp.vn breabcrumb  -->
<div class="webwp_breabcrumb"> 
<?php if (function_exists('webwp_breadcrumbs')) webwp_breadcrumbs(); ?>
<!-- 
<h6 class="entry-category is-xsmall">
	<?php echo get_the_category_list( __( ', ', 'flatsome' ) ) ?>
</h6>
-->
</div>
<!--  End Webwp.vn breabcrumb  -->

<?php
if ( is_single() ) {
	echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
} else {
	echo '<h2 class="entry-title"><a href="' . get_the_permalink() . '" rel="bookmark" class="plain">' . get_the_title() . '</a></h2>';
}
?>

<div class="entry-divider is-divider small"></div>

<?php
$single_post = is_singular( 'post' );
if ( $single_post && get_theme_mod( 'blog_single_header_meta', 1 ) ) : ?>
	<div class="entry-meta uppercase is-xsmall">
		<?php // flatsome_posted_on(); ?>
<!--  Webwp.vn post on  -->
		<div class="tag-meta-post">	<span class="fa fa-eye"></span><span class="luot-xem"> <?php echo getPostViews(get_the_ID()); ?> </span>
		<span class="fa fa-clock-o"></span>	
		<span class="meta-date-capnhat">
		<time class="entry-date published updated" datetime="2017-12-07T17:12:06+07:00"><?php echo get_the_date(); ?></time>
		</span>
		<span class="fa fa-folder"></span>
		<span class="danh-muc">
		<ul class="post-categories">
			<p class="entry-category is-xsmall"><?php echo get_the_category_list( __( ', ', 'flatsome' ) ) ?></p>
		</ul>
		</span>
		</div>
<!-- End Webwp.vn post on  -->
	</div>
<?php elseif ( ! $single_post && 'post' == get_post_type() ) : ?>
	<div class="entry-meta uppercase is-xsmall">
		<?php flatsome_posted_on(); ?>
	</div>
<?php endif; ?>
