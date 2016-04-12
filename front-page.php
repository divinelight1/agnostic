
<?php require('header.php');?>

                <!-- Banner -->

                    <section id="banner">

                        <div class="inner">

                        <h2><?php echo get_option('maintittle'); ?></h2>

                        <p><?php echo get_option('mainsubtittle'); ?><br />

                            </p>

                            <ul class="actions">

                            <li><a href="<?php echo get_option('buttonlink'); ?>" class="button special"><?php echo get_option('mainbuttontext'); ?></a></li>

                            </ul>

                        </div>

                        <a href="#one" class="more scrolly">See More</a>

                    </section>

    <!-- One -->

                    <section id="one" class="wrapper style1 special">

                        <div class="inner">

                            <header class="major">

                            <h2><?php echo get_option('firstsectionheading'); ?></h2>

                                <p><?php echo get_option('firstsectionsubheading'); ?></p>

                            </header>

                            <ul class="icons major">

                                <li><span class="icon <?php echo get_option('fafirst'); ?> major style1"><span class="label">Lorem</span></span></li>

                                <li><span class="icon <?php echo get_option('fasecond'); ?> major style2"><span class="label">Ipsum</span></span></li>

                                <li><span class="icon <?php echo get_option('fathird'); ?> major style3"><span class="label">Dolor</span></span></li>

                            </ul>

                        </div>

                    </section>

    <!-- Two -->

                    <section id="two" class="wrapper alt style2">

                        <section class="spotlight">

                        <div class="image"><img src="<?php echo get_option('pictext1'); ?>" alt="" /></div><div class="content">

                        <h2><?php echo get_option('headingtext1'); ?></h2>

                        <p><?php echo get_option('firstparagraphtext1')?></p>

                            </div>

                        </section>

                        <section class="spotlight">

                        <div class="image"><img src="<?php echo get_option('pictext2'); ?>" alt="" /></div><div class="content">

                        <h2><?php echo get_option('headingtext2')?></h2>

                        <p><?php echo get_option('secondparagraphtext2')?></p>

                            </div>

                        </section>

                        <section class="spotlight">

                            <div class="image"><img src="<?php echo get_option('pictext3'); ?>" alt="" /></div><div class="content">

                                <h2><?php echo get_option('headingtext3')?></h2>

                                <p><?php echo get_option('thirdparagraphtext3')?></p>

                            </div>

                        </section>

                    </section>



                <!-- Three -->

                    <section id="three" class="wrapper style3 special">

                        <div class="inner">

                            <header class="major">

                                <h2>Accumsan mus tortor nunc aliquet</h2>

                                <p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />

                                fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>

                            </header>

                            <ul class="features">

                                <li class="icon fa-paper-plane-o">

                                    <h3>Arcu accumsan</h3>

                                    <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>

                                </li>

                                <li class="icon fa-laptop">

                                    <h3>Ac Augue Eget</h3>

                                    <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>

                                </li>

                                <li class="icon fa-code">

                                    <h3>Mus Scelerisque</h3>

                                    <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>

                                </li>

                                <li class="icon fa-headphones">

                                    <h3>Mauris Imperdiet</h3>

                                    <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>

                                </li>

                                <li class="icon fa-heart-o">

                                    <h3>Aenean Primis</h3>

                                    <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>

                                </li>

                                <li class="icon fa-flag-o">

                                    <h3>Tortor Ut</h3>

                                    <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>

                                </li>

                            </ul>

                        </div>

                    </section>



                <!-- CTA -->

                    <section id="cta" class="wrapper style4">

                        <div class="inner">

                            <header>

                                <h2>Arcue ut vel commodo</h2>

                                <p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>

                            </header>

                            <ul class="actions vertical">

                                <li><a href="#" class="button fit special">Activate</a></li>

                                <li><a href="#" class="button fit">Learn More</a></li>

                            </ul>

                        </div>

                    </section>




<?php require('footer.php');?>
