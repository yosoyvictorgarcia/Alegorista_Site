<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
    <div id="contacto">
        <div class="contenedor">
            <hr>
            <h1><?php echo strtoupper(get_the_title()); ?></h1>
            <hr>            
            <?php the_content(); ?>
            


        </div>
    </div>
<?php get_footer(); ?>

