<?php require('header.php'); ?>

<article id="main">

                        <header>

                        <h2>
<?php 
echo get_the_title();
?>

</h2>


                        </header>

                        <section class="wrapper style5">

                            <div class="inner">




                                <p>
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
</p>





                            </div>

                        </section>

                    </article>


<?php require('footer.php'); ?>
