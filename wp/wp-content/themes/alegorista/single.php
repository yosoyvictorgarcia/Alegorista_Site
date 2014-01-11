<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php get_header(); ?>
<?php 
if(have_posts()){
    while(have_posts()){
        the_post();
        $gallery = dfi_get_featured_images($post->ID);
        $postMeta = get_post_meta($post->ID);
            ?>
            <div id="single">
                <div class="contenedor">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                    <hr>

                    <div class="center">

                        <div class="colleft">
                            <?php 
                            if($gallery){
                            foreach($gallery as $ki => $i){
                                $postA = get_post($i['attachment_id']);
                                ?>
                                <div class="galeria"><img src="<?php echo $postA->guid; ?>"></div>
                                <?php
                            }
                            ?>
                            <!--<div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>

                            <div class="galeria"><img src="img/Foto.jpg"></div>-->
                            <?php } ?>
                        </div>

                        <div class="colright">
                            <hr>
                            <?php if(isset($postMeta['cliente'][0])){ ?><p><strong>Cliente:</strong> <?php echo $postMeta['cliente'][0]; ?></p><?php } ?>
                            <?php if(isset($postMeta['fechas'][0])){ ?><p><strong>Fechas:</strong> <?php echo $postMeta['fechas'][0]; ?></p><?php } ?>
                            <?php if(isset($postMeta['info'][0])){ ?><p><strong>Info:</strong><?php echo $postMeta['info'][0]; ?></p><?php } ?>
                            <br>
                            <hr>
                            <p><?php the_content(); ?></p>
                            <br>
                            <hr>
                        </div>

                    </div>


                </div>
            </div>
            <?php
    }
}
?>
    
<?php get_footer(); ?>

