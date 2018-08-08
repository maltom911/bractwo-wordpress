<?php
/*
Template Name: Władze Bractwa
*/
get_header();
get_fields();
?>
    <section class="authorities">
        <div class="container-fluid">
            <div class="row authorities-row-padding">
                <div class="col-xs-12 arrow-padding">
                    <a href="http://localhost/bra#categories"><img class="btn-arrow" src="http://localhost/bra/wp-content/themes/bractwo/img/button/arrow.png" alt=""></a>
                </div>
                <div class="col-xs-12">
                    <h1>Władze Bractwa</h1>
                </div>
                <div class="col-xs-12 col-sm-6 authorities-border-left">
                 <?php
                    $args = array (
                      'post_type'         =>     'authorities',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                    <p class="authorities-text"><?php echo $post_fields['prezes']; ?></p>
                    <p class="authorities-text function-mobile"> prezes</p>
                    <p class="authorities-text"><?php echo $post_fields['pierwszy-vice']; ?></p>
                    <p class="authorities-text function-mobile"> v-ce prezes</p>
                    <p class="authorities-text"><?php echo $post_fields['drugi-vice']; ?></p>
                    <p class="authorities-text function-mobile"> v-ce prezes</p>
                    <p class="authorities-text"><?php echo $post_fields['sekretarz-pisarz']; ?></p>
                    <p class="authorities-text function-mobile"> sekretarz (pisarz)</p>
                    <p class="authorities-text"><?php echo $post_fields['skarbnik']; ?></p>
                    <p class="authorities-text function-mobile"> skarbnik</p>
                    <p class="authorities-text"><?php echo $post_fields['gospodarz']; ?></p>
                    <p class="authorities-text function-mobile"> gospodarz</p>
                    <p class="authorities-text"><?php echo $post_fields['czlonek-zarzadu-ceremonial']; ?></p>
                    <p class="authorities-text function-mobile"> członek zarządu d/ceremoniału</p>
                          <?php }
                    }
                    ?>
                </div>
                <div class="col-xs-6 authorities-border-left authorities-set-display-one">
                    <p class="authorities-text-function">prezes</p>
                    <p class="authorities-text-function"> v-ce prezes</p>
                    <p class="authorities-text-function"> v-ce prezes</p>
                    <p class="authorities-text-function"> sekretarz (pisarz)</p>
                    <p class="authorities-text-function"> skarbnik</p>
                    <p class="authorities-text-function"> gospodarz</p>
                    <p class="authorities-text-function two-lines"> członek zarządu d/ceremoniału</p>
                </div>
                <div class="col-xs-6 authorities-set-display-two">
                    <p class="authorities-text"> prezes</p>
                    <p class="authorities-text"> v-ce prezes</p>
                    <p class="authorities-text"> v-ce prezes</p>
                    <p class="authorities-text"> sekretarz (pisarz)</p>
                    <p class="authorities-text"> skarbnik</p>
                    <p class="authorities-text"> gospodarz</p>
                    <p class="authorities-text"> członek zarządu d/ceremoniału</p>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
