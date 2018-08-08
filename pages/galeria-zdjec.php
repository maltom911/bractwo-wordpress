<?php
/*
Template Name: Galeria-Zdjec
*/
get_fields();
get_header(); ?>
    <section class="gallery">
        <div class="container-fluid">
            <div class="row gallery-row-padding">
                <div class="col-xs-12 arrow-padding">
                    <a href="http://localhost/bra#categories">
                        <img class="btn-arrow" src="http://localhost/bra/wp-content/themes/bractwo/img/button/arrow.png" alt="">
                    </a>
                </div>
                <div class="col-xs-12">
                    <h1>Galeria</h1>
                </div>
            </div>
            <div class="row gallery-row-padding">
                 <?php
                    $args = array (
                      'post_type'         =>     'gallery',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3  gallery-padding">
                    <div class="gallery-background">
                        <div class="gallery-container">
                            <div class="gallery-label one" style="background: url('<?php echo $post_fields['miniaturka']; ?>'); background-size:cover;background-repeat:no-repeat;background-position:center">
                                <div class="gallery-mask">
                                    <a href="<?php echo get_the_permalink(); ?>"></a>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_the_permalink(); ?>">
                            <p class="gallery-title"><?php echo $post_fields['folder-opis']; ?></p>
                        </a>
                    </div>
                </div>
                <?php }
                    }
                    ?>     
            </div> 
        </div>
    </section>
    <?php get_footer(); ?>