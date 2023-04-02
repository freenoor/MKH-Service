
<?php 
/*
* Template Name: Blog Posts
*/
get_header(); ?>
<div class="container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_blog_post"><?php the_title(); ?></div>
<span><?php echo get_the_date(); ?></span>
<!-- <?php echo get_the_post_thumbnail() ?> -->
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>