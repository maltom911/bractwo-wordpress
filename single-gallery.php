
<?php 
get_header(); 
$fields = get_fields();
?>
<section class="gallery-photos">
    <div class="container-fluid">
        <div class="row gallery-photos-row-padding">
            <div class="col-xs-12 arrow-padding">
                <a href="http://localhost/bra/galeria"><img class="btn-arrow" src="http://localhost/bra/wp-content/themes/bractwo/img/button/arrow.png" alt=""></a>
            </div>
            <div class="col-xs-12">
                <h1>2018 Uroczystości Katyńskie</h1>
            </div>
        </div>
        <div class="row gallery-photos-row-padding">
            

                    <?php 

$images = get_field('zdjecie');

if( $images ): ?>
        <?php foreach( $images as $image ): ?>
        <div class="col-xss-12 col-xs-6 col-sm-4 col-lg-3 gallery-photos-padding">
            <div class="gallery-photo-container">
                <div class="gallery-photo" style="background: url('<?php echo $image['url']; ?>'); background-size:cover;background-repeat:no-repeat;background-position:center">
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
                        <!-- <a href="http://localhost/bra/wp-content/themes/bractwo/img/categories/ciekawostki.jpg" data-lightbox="ciekawostki"></a> -->
                    
            
        </div>
    </div>
</section>
<?php get_footer(); ?>