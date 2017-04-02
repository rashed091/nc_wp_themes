<?php get_header(); ?>


<!-- Here were are calling in the single post partial, and the content divs that house it -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part( 'parts/loop', 'single' ); ?>
<?php endwhile; else : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>

<!-- </main> <!-- end #main -->

<?php get_sidebar(); ?>
<!--
	</div> <!-- end #inner-content -->

<!-- </div> <!-- end #content -->

<?php get_footer(); ?>
