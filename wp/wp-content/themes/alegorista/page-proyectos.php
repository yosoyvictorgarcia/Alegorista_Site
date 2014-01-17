<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php get_header(); ?>
<div id="proyectos">
    <div class="contenedor">
        <hr>
        <h1>PROYECTOS</h1>
        <hr>

        <div class="center">
            <?php
            query_posts(
                    array(
                        'cat' => get_cat_ID('proyecto')
                    )
            );
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $image = (has_post_thumbnail( )) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , array('310','180') ) : '' ;
                    $imageF = (isset($image[0])) ? $image[0] : '' ;
                    ?>
                    <div class="proyecto">
                        <img src="<?php echo $imageF; ?>">
                        <br><br>
                        <h3><?php the_title(); ?></h3>
                        <p class='excerpt'><?php echo substr(get_the_excerpt(), 0, 140) ?></p>
                        <br>
                        <a href='<?php the_permalink(); ?>'><button>VER MÁS</button></a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>


    </div>
</div> 


<?php get_footer(); ?>

