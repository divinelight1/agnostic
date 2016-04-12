<?php require('header.php'); ?>
<div class="allPagesHeaderBanner">


    <?php 
echo get_the_title();
    ?>

</div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="blogpost">
    <?php the_content(); ?>
</div>
    <?php endwhile; ?>
<?php else : ?>
<h6 class="center">Not Found</h6>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
<?php require('footer.php'); ?>
