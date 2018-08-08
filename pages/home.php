<?php /* Template Name: Główna */
get_header(); 
$fields = get_fields();
?>
<!-- Main Header -->
<header class="header-wrapper">
    <div class="header-menu-container">
        <h1 class="header">Bractwo Kurkowe <br>w Tarnowie</h1>
        <div class="slider-images">
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/1.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/1_1.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/2.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/3.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/4.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/5.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/6.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/7.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/8.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/9.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/10.jpg" alt=""></div>
            <div><img src="http://localhost/bra/wp-content/themes/bractwo/img/slider/11.jpg" alt=""></div>
        </div>
    </div>
</header>
<!--Categories Section-->
<section id="categories">
    <div class="container-fluid">
        <div class="row categories-row-padding">
            <div class="col-sm-6 col-md-4 padding">
                <div class="category-wrapper">
                    <div class="category-container one">
                        <p class="category-text">Władze Bractwa</p>
                        <a class="subpages-link" href="http://localhost/bra/wladze-bractwa/"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 padding">
                <div class="category-wrapper">
                    <div class="category-container two">
                        <p class="category-text">Królowie Bractwa</p>
                        <a class="subpages-link" href="http://localhost/bra/krolowie-bractwa/"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 padding">
                <div class="category-wrapper">
                    <div class="category-container three">
                        <p class="category-text">Galeria</p>
                        <a class="subpages-link" href="http://localhost/bra/galeria-zdjec/"></a>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 padding">
                <div class="category-wrapper">
                    <div class="category-container four">
                        <p class="category-text">Historia</p>
                        <a class="subpages-link" href="http://localhost/bra/historia/"></a>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 padding">
                <div class="category-wrapper">
                    <div class="category-container five">
                        <p class="category-text">Komunikaty</p>
                        <a class="subpages-link" href="http://localhost/bra/komunikaty/"></a>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 padding">
                <div class="wrapper">
                    <div class="category-container six">
                        <p class="category-text">Ciekawostki</p>
                        <a class="subpages-link" href="http://localhost/bra/ciekawostki/"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Categories Section End-->
<!--Section Parallax-->
<section class="parallax">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="photo-sword">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section Parallax End-->
<!--Section News-->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="news-header">Aktualności</h2>
            </div>
            <div class="col-md-12">
                <div class="news-background">
                    <div class="col-md-12  news-scroll news-padding">
                        <div class="col-md-6">
                        <?php
                    $args = array (
                      'post_type'         =>     'news',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                            <div>
                                <p class="news-topic"><?php echo $post_fields['aktualnosci-naglowek']; ?></p>
                                <p class="news-content"><?php echo $post_fields['aktualnosci-tresc']; ?></p>
                            </div>
                          <?php }
                    }
                    ?>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section News End-->
<!--Section Border--->
<div class="section-border">
    <div class="section-border-line"></div>
</div>
<!--Section Border End--->
<!--Section Contact-->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Siedziba Bractwa</h3>
            </div>
            <div class="col-md-6">
                <div class="contact-details">
                <?php
                    $args = array (
                      'post_type'         =>     'contact',
                      'posts_per_page'    =>     -1
                  );
                    $hojda = new WP_Query( $args );
                    if ( $hojda->have_posts() ) {
                      while ( $hojda->have_posts() ) {
                         $hojda->the_post();
                         $post_fields = get_fields();                         
                         ?>
                    <p class="contact-name"><?php echo $post_fields['nazwa']; ?></p><br>
                    <p><?php echo $post_fields['ulica']; ?></p>
                    <p><?php echo $post_fields['kod']; ?></p>
                    <p><?php echo $post_fields['email']; ?></p>
                    <p><?php echo $post_fields['prezes-nr']; ?></p><br>
                    <p><?php echo $post_fields['krs']; ?></p>
                    <p><?php echo $post_fields['nip']; ?></p>
                    <p><?php echo $post_fields['regon']; ?></p>
                    <p><?php echo $post_fields['nr-rachunku']; ?></p>
                    <p><?php echo $post_fields['bank']; ?></p>
                    <!-- <p class="contact-name">TOWARZYSTWO STRZELECKIE BRACTWO KURKOWE W TARNOWIE</p><br>
                    <p>ul. Słowackiego 3, (Dom Ogrodnika - Park Strzelecki)</p>
                    <p>33 – 100 Tarnów </p>
                    <p>e-mail: bractwotarnow@wp.pl</p>
                    <p>prezes 14/ 62 165 62</p><br>
                    <p>KRS 0000061191</p>
                    <p>NIP – 873-187-72-65</p>
                    <p>REGON - 850448998</p>
                    <p>NR RACHUNKU: 20 8589 0006 0250 0024 0015 0001</p>
                    <p>BANK SPÓŁDZIELCZY RZEMIOSŁA</p> -->
                    <?php }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="residence"></div>
            </div>
        </div>
    </div>
</section>
<!--Section Contact End-->


<?php 
if(is_page(75)) {
 get_footer('other');
}
else {
 get_footer();
}
 wp_footer();
?>
