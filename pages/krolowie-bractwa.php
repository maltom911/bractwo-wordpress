<?php
/*
Template Name: Królowie Bractwa
*/
get_fields();
get_header(); ?>

<section class="kings">
        <div class="container">
            <div class="row">
                <div class="col-md-12 arrow-padding">
                    <a href="http://localhost/bra#categories"><img class="btn-arrow" src="http://localhost/bra/wp-content/themes/bractwo/img/button/arrow.png" alt=""></a>
                </div>
            </div>
            <div class="row kings-row-padding ">
                <div class="col-md-12 ">
                    <h1>Królowie bractwa</h1>
                </div>
                <?php
                    $args = array (
                      'post_type'         =>     'kings',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                <div class="col-md-12 kings-margin ">
                    <p class="king-header text-right "><?php echo $post_fields['krol-naglowek-data']; ?></p>
                    <div class="col-md-4 ">
                        <div class="king-photo one " style="background: url('<?php echo $post_fields['krol-zdjecie']; ?>'); background-size:cover;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                    <div class="col-md-8 ">
                    <p class="kings-text ">
                        <span class="king-bigger "><?php echo $post_fields['krol-imie']; ?></span> <?php echo $post_fields['krol-opis']; ?></p>
                    </div>
                </div>
                <div class="col-md-12 kings-margin ">
                    <p class="king-header text-right ">Marszałkowie</p>
                    <div class="col-md-4 ">
                        <div class="marshal-photo one " style="background: url('<?php echo $post_fields['marszalek-pierwszy-zdjecie']; ?>'); background-size:cover;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="kings-text ">
                            <span class="king-bigger "><?php echo $post_fields['marszalek-pierwszy-imie']; ?></span> <?php echo $post_fields['marszalek-pierwszy-opis']; ?></p>
                    </div>
                </div>
                <div class="col-md-12 kings-margin ">
                    <div class="col-md-4 ">
                        <div class="marshal-photo two " style="background: url('<?php echo $post_fields['marszalek-drugi-zdjecie']; ?>'); background-size:cover;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="kings-text ">
                        <span class="king-bigger "><?php echo $post_fields['marszalek-drugi-imie']; ?></span> <?php echo $post_fields['marszalek-pierwszy-opis']; ?></p>
                    </div>
                </div>
                    <?php }
                    }
                    ?>

                    <?php
                    $args = array (
                      'post_type'         =>     'kings_text',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                <div class="col-md-12 ">
                    <p class="king-header text-left " ><?php echo $post_fields['tekst-krol-naglowek-data']; ?></p>
                    <p class ="king-bigger"><?php echo $post_fields['tekst-krol-imie']; ?></p>
                    <p class="king-header text-left "><?php echo $post_fields['tekst-marszalkowie-naglowek-data']; ?></p>
                    <p class ="king-bigger"><?php echo $post_fields['tekst-marszalkowie-imiona']; ?></p>
                </div>
                <?php }
                    }
                    ?>
            </div>
        </div>
 </section>
<?php get_footer(); ?>
