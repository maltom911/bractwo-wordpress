<?php
/*
Template Name: Komunikaty
*/
get_fields();
get_header(); ?>
    <section class="releases">
        <div class="container-fluid">
            <div class="row releases-row-padding">
                <div class="col-xs-12 arrow-padding">
                    <a href="http://localhost/bra#categories"><img class="btn-arrow" src="http://localhost/bra/wp-content/themes/bractwo/img/button/arrow.png" alt=""></a>
                </div>
                <div class="col-xs-12">
                    <h1>Komunikaty</h1>
                </div>
            </div>
            <div class="row releases-row-padding">
                <div class="col-md-12">
                    <div class="releases-container">
                        <div class="release one">
                    <?php
                    $args = array (
                      'post_type'         =>     'releases',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                         <div>
                            <p class="release-header"><?php echo $post_fields['komunikat-naglowek']; ?></p>
                            <p class="release-text"><?php echo $post_fields['komunikat-tresc']; ?></p
                        </div>
                            
                        
                          <?php }
                    }
                    ?>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
