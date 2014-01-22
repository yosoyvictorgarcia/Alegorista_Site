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
                    <h1 class="left"><?php the_title(); ?></h1>
    <div id="mijas"><strong><a href="<?php echo get_bloginfo('url'); ?>">Home</a>  /  <a href="<?php echo get_bloginfo('url'); ?>/proyectos">Proyectos </a>  </strong>/   <?php the_title(); ?></div>
                    <hr>

                    <div class="center">

                        <div id="gallery" class="colleft">                                       
                            <?php 
                            if($gallery){
                            foreach($gallery as $ki => $i){
                                $postA = get_post($i['attachment_id']);
                                ?>
                                <a href="<?php echo $postA->guid; ?>" title="">
                                <div class="galeria"><img src="<?php echo $postA->guid; ?>"></div>
                                </a>
                                <?php
                            }
                            ?>                            
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
                            <div class="fb-share-button" data-href="https://www.facebook.com/Alegorista" data-type="button_count"></div>
                            <br><br>
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

