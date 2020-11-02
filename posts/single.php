<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-inner <?php flatsome_blog_article_classes(); ?>">
		<?php
			if(flatsome_option('blog_post_style') == 'default' || flatsome_option('blog_post_style') == 'inline'){
				get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') );
			}
		?>

		<?php get_template_part( 'template-parts/posts/content', 'single' ); ?>
		<div class="bai-viet-tag"><?php the_tags( 'Thẻ tìm kiếm: ', ' • ', '<br />' ); ?></div>
		
<!-- form tư vấn -->	
<?php echo do_shortcode('[contact-form-7 id="630" title="Lien he Yeu cau tu van"]');?>
<!-- /form tư vấn -->	

	</div>
</article>

<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>