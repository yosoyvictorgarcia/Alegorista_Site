<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php get_header(); ?>
    <section>
        <div class="contenedor">
            <br>
                    <hr>
                 <h1>CREANDO ESPACIOS</h1>
                    <hr>
             <?php 
             query_posts(
                     array(
                         'cat' => get_cat_ID('proyecto')
                         )
                     );
             if(have_posts()){
                 while (have_posts()){
                     the_post();
                     $image = (has_post_thumbnail( )) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , 'full' ) : '' ;
                     $imageF = (isset($image[0])) ? $image[0] : get_bloginfo('template_directory').'/img/proyecto-1.jpg' ;
                     ?>
                      <div class="project">
                          <a href="<?php the_permalink(); ?>"><img src="<?php echo $imageF; ?>" alt="<?php the_title(); ?>"></a>
                     </div>
                     <?php
                 }
             }
             ?>

        </div>
    </section>
<?php get_footer(); ?>

