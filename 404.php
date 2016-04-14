
<?php require('header.php'); ?>

<article id="main">

                        <header>

                        <h2>
<?php 
echo get_the_title();
?>
Error 404.Nothing found
</h2>


                        </header>

                        <section class="wrapper style5">

                            <div class="inner">




                                <p>
                                <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
</p>





                            </div>

                        </section>

                    </article>


<?php require('footer.php'); ?>
