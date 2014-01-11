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
           ?>
           <section>
            <div class="contenedor">
                    <br>
                    <hr>
                 <h1>EN ALEGORISTA</h1>
                    <hr>

                 <div class="colleft">
                     <?php
                     $image = (has_post_thumbnail( )) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , 'full' ) : '' ;
                     $imageF = (isset($image[0])) ? $image[0] : '' ;
                     ?>
                    <img src="<?php echo $imageF; ?>"><br><br>
                    <p><?php //the_excerpt(); ?></p>
                 </div>

                 <div class="colright">
                    <?php the_content(); ?>
                 </div>

            </div>
        </section> 
        <?php
              }
          }
          ?>
        <section>
            <div class="contenedor">
                <hr>
                <h1>SOCIOS</h1>
                <hr>                
                <div class="center">
                    <?php 
                    query_posts(
                            array(
                                'cat' => get_cat_ID('socio')
                            )
                    );
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            $image = (has_post_thumbnail( )) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , 'full' ) : '' ;
                            $imageF = (isset($image[0])) ? $image[0] : '' ;
                            ?>
                            <div class="socio">
                                <img src="<?php echo $imageF;?>">
                                <br><br>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <?php
                        }
                    }
                    ?>

                    <!--<div class="socio">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/socio_1.jpg">
                        <br><br>
                        <h3>TÍTULO</h3>
                        <p>This format can be used to display images as a gallery. To attach images to the post please use Upload Images button.</p>
                    </div>

                    <div class="socio">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/socio_1.jpg">
                        <br><br>
                        <h3>TÍTULO</h3>
                        <p>This format can be used to display images as a gallery. To attach images to the post please use Upload Images button.</p>
                    </div>

                    <div class="socio">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/socio_1.jpg">
                        <br><br>
                        <h3>TÍTULO</h3>
                        <p>This format can be used to display images as a gallery. To attach images to the post please use Upload Images button.</p>
                    </div>

                    <div class="socio">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/socio_1.jpg">
                        <br><br>
                        <h3>TÍTULO</h3>
                        <p>This format can be used to display images as a gallery. To attach images to the post please use Upload Images button.</p>
                    </div>

                    <div class="socio">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/socio_1.jpg">
                        <br><br>
                        <h3>TÍTULO</h3>
                        <p>This format can be used to display images as a gallery. To attach images to the post please use Upload Images button.</p>
                    </div>-->

                </div>


            </div>
        </section>
          
    
<?php get_footer(); ?>

