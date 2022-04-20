
<section class="section-home-rezensionen">

<div class="container">
    <div class="header-container">
        <h2>Real Talk</h2>
        <h3>Das sagen unsere Kunden</h3>
    </div>

    <?php if( have_rows('rezension') ): ?>

        <!-- Slider main container -->
        <div class="swiper carousel-container">

            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <?php while( have_rows('rezension') ) : the_row(); ?>

                <!-- Slides -->
                <div class="swiper-slide rezension-list-item">
                    <div class="list-item-img" style="background-image:url('<?php the_sub_field('projektbild') ?>')">
                        <a class="projekt-ansehen-inside" href='<?php the_sub_field('link') ?>'>Projekt ansehen</a>
                    </div>
                    <div class="list-item-text"><p><?php the_sub_field('rezensionstext') ?></p></div>
                    <div class="list-item-kunde">
                                <span style="letter-spacing: 1px;"><strong><?php the_sub_field('kunde') ?></strong></span><br>
                                <span style="font-size: 12px; letter-spacing: 1px;" ><?php the_sub_field('informationen') ?></span>
                    </div>
                </div>

                <?php endwhile; ?>

            </div>

            <!-- Buttons -->
            <div id="button-prev" class="swiper-button-prev"></div>
            <div id="button-next" class="swiper-button-next"></div>

        </div>


    <?php endif; ?>


</div>

</section>