<?php do_action('flatsome_before_footer'); ?>

<!-- FOOTER 1 -->
<?php if ( is_active_sidebar( 'sidebar-footer-1' ) && get_theme_mod('footer_1', 1) ) : ?>
<div class="footer-widgets footer footer-1">
		<div class="<?php echo flatsome_footer_row_style('footer-1'); ?> mb-0">
	   		<?php dynamic_sidebar('sidebar-footer-1'); ?>        
		</div>
</div>
<?php endif; ?>

<!-- FOOTER 2 -->
<?php if ( is_active_sidebar( 'sidebar-footer-2' )  && get_theme_mod('footer_2', 1) ) : ?>
<div class="footer-widgets footer footer-2 <?php if(flatsome_option('footer_2_color') == 'dark') echo 'dark'; ?>">
		<div class="<?php echo flatsome_footer_row_style('footer-2'); ?> mb-0">
	   		<?php dynamic_sidebar('sidebar-footer-2'); ?>  
			   <div class="kdkd_info"><span><?php the_field('kdkd_ft_info', 'option'); ?></span></div>      
		</div>
		
</div>
<?php endif; ?>

<?php do_action('flatsome_after_footer'); ?>
<?php get_template_part('template-parts/footer/footer-absolute'); ?>