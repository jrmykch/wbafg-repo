
<section class="section-home-projekte">


<div class="container">

    <div class="section-heading" id="projekte-heading">
        <h2>Projekte</h2>
        <h3>Für tolle Unternehmen</h3>
    </div>

    <!-- LOOP PROJEKTVORSCHAU -->
    <?php if( have_rows('riegel') ): ?>

        <!--MOBILE-->
        <div class="image-container-mobile">
        <?php while( have_rows('riegel') ): the_row(); ?>

            <?php 
                // grabbing the checkbox    
                $layout = get_sub_field('layout');

                // if checkbox = layout 1 then display 1 picture
                if ($layout && in_array('Layout-1', $layout)) { ?>
                    <img src="<?php the_sub_field('bilder_layout_1') ?>" alt="" />
                    <?php
                }
                // if checkbox is not layout 1 the display all three images of layout 2
                else if($layout && in_array('Layout-2', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_2'); ?>
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo $image ?>" alt="" />
                        <?php endforeach; ?>
                    <?php 
                }
                // if checkbox is not layout 1 the display all three images of layout 2
                else if($layout && in_array('Layout-3', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_3'); ?>
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo $image ?>" alt="" />
                        <?php endforeach; ?>
                    <?php 
                } 
                // if checkbox is not layout 1 the display all three images of layout 2
                else if($layout && in_array('Layout-4', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_4'); ?>
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo $image ?>" alt="" />
                        <?php endforeach; ?>
                    <?php 
                } 
                // if checkbox is not layout 1 the display all three images of layout 2
                else if($layout && in_array('Layout-5', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_5'); ?>
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo $image ?>" alt="" />
                        <?php endforeach; ?>
                    <?php 
                }                                                  

        endwhile; ?>

        </div>

        <!--DESKTOP-->    
        <div class="image-container-desktop">
        <?php while( have_rows('riegel') ): the_row(); ?>

            <?php 
                // grabbing the checkbox    
                $layout = get_sub_field('layout');

                // LAYOUT 1 (1 großes Bild)
                if ($layout && in_array('Layout-1', $layout)) { ?>
                    <div class="card card-huge">
                        <img style="display: block;"src="<?php the_sub_field('bilder_layout_1')?>" alt="">
                    </div>
                    <?php
                }
                // LAYOUT 2 (3 kleine Bilder)
                else if($layout && in_array('Layout-2', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_2'); ?>
                        <?php foreach ($images as $image): ?>
                            <div class="card card-layout-2" style="background-image:url('<?php echo $image ?>')"></div>
                        <?php endforeach; ?>
                    <?php 
                } 
                // LAYOUT 3 (1 großes + 2 kleine Bilder)
                else if($layout && in_array('Layout-3', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_3'); ?>
                            <div class="card card-large" style="background-image:url('<?php echo $images[0] ?>')"></div>
                            <div class="card" style="background-image:url('<?php echo $images[1] ?>')"></div>
                            <div class="card" style="background-image:url('<?php echo $images[2] ?>')"></div>
                    <?php
                } 
                // LAYOUT 4 (2 kleine + 1 großes Bild)
                else if($layout && in_array('Layout-4', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_4'); ?>
                            <div class="card" style="background-image:url('<?php echo $images[0] ?>')"></div>
                            <div class="card card-large" style="background-image:url('<?php echo $images[1] ?>')"></div>
                            <div class="card" style="background-image:url('<?php echo $images[2] ?>')"></div>
                    <?php 
                }
                // LAYOUT 5 (2 mittelgroße Bilder)
                else if($layout && in_array('Layout-5', $layout)) { 
                    // grab the gallery array
                    $images = get_sub_field('bilder_layout_5'); ?>
                        <?php foreach ($images as $image): ?>
                            <div class="card card-normal" style="background-image:url('<?php echo $image ?>')"></div>
                        <?php endforeach; ?>
                    <?php 
                }                                  

        endwhile; ?>
        </div>

    <?php endif; ?>






<div class="button-container">
    <button class="mehr-laden">Mehr Projekte laden</button>
</div>



<div class="sub">
    <h2>Gestaltung</h2>
    <h3>Gutes Design ist gute Kommunikation</h3>
    <p>
    Eine zielgerichtete und auf Ihr Unternehmen zugeschnittene Strategie, nach vorausgegangener Analyse der Aufgabenstellung sowie der Ausgangssituation, sind die Schlüssel für eine erfolgreiche Kundenansprache.<br><br> 
Bei Werner Bohr – Agentur für Gestaltung erhalten Sie einen auf Ihre individuellen Bedürfnisse angepasste Umsetzung alles aus einer Hand: stringentes Corporate Design, sinnvoll strukturierte und informative Websites, eindrucksvolle Fotografie, aussagekräf­tige Messe­auftritte, zeitgemäße Innenarchitektur und professionelles Produktdesign. Sinnvoll konzipiert, perspektivisch gedacht.<br><br> 
Wenn Sie wissen möchten, wie wir Sie oder Ihr Unternehmen unterstützen können, dann freuen wir uns auf ein persönliches Kennenlernen in Trier, Berlin oder gerne auch bei Ihnen.
    </p>
</div>

</div>

</section>