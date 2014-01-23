<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php get_header(); ?>
        <div id="single">

        <div class="contenedor">
            <hr>
            <h1 class="left">BLOG</h1>
                <form id="search" method="get" action="<?php echo get_bloginfo('url'); ?>/blog" >
                    <span><input type="text" name="buscar" class="search rounded" placeholder="BUSCAR..."></span>
                </form>

            <div id="mijas"><strong>Home  </strong>/  Blog</div>
            <hr>
            
            <div class="center">
            	<?php
            	$s = (isset($_GET['buscar']) && $_GET['buscar']) ? $_GET['buscar'] : false;
            	query_posts(
            		array(
            			'cat' => get_cat_ID('noticia'),
            			'posts_per_page' => '3',
            			's' => $s,
            			'paged' => $page
            		)
            	);
            	?>
            	<?php 
            	if(have_posts()){
            		while(have_posts()){
            			the_post();
            			$image = (has_post_thumbnail( )) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , 'full' ) : '' ;
                     	$imageF = (isset($image[0])) ? $image[0] : get_bloginfo('template_directory').'/img/blog_img.jpg' ;
            			?>
            			<div class="post">
		                    <h2><?php echo strtoupper(get_the_title()); ?></h2>
                                    <div class="content" style="height: 400px;" >
                                        <img class="blog_img" src="<?php echo $imageF; ?>">
                                        <p>
                                            <?php the_content(); ?>
                                        </p>

                                        <br>

                                        <a href="<?php the_permalink(); ?>"><button>LEER MÁS</button></a>

                                        <br><br>
                                    </div>
		                    <hr>
		                    <p>Fecha: <?php the_time('j \d\e\ F \d\e\ Y'); ?></p><br>

		                    <hr>

		                </div>
            			<?php
            		}
            	}else{
            		echo "No se encontraron entradas";
            	}
            	?>
                <!--<div class="post">
                    <h2>TENDENCIAS EN SPAS</h2>
                    <img class="blog_img" src="<?php echo get_bloginfo('template_directory'); ?>/img/blog_img.jpg">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        <br><br>
                        Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.<br><br>

                    Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.<br><br>

                    Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.
                    </p>

                    <br>

                    <button>LEER MÁS</button>

                    <br><br>

                    <hr>
                    <p>Fecha: 20 de enero de 2014</p><br>

                    <hr>

                </div>

                <div class="post">
                    <h2>TENDENCIAS EN SPAS</h2>
                    <img class="blog_img" src="<?php echo get_bloginfo('template_directory'); ?>/img/blog_img.jpg">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        <br><br>
                        Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.<br><br>

                    Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.<br><br>

                    Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.
                    </p>

                    <br>

                    <button>LEER MÁS</button>

                    <br><br>

                    <hr>
                    <p>Fecha: 20 de enero de 2014</p><br>

                    <hr>

                </div>

                <div class="post">
                    <h2>TENDENCIAS EN SPAS</h2>
                    <img class="blog_img" src="<?php echo get_bloginfo('template_directory'); ?>/img/blog_img.jpg">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        <br><br>
                        Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.<br><br>

                    Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.<br><br>

                    Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.
                    </p>

                    <br>

                    <button>LEER MÁS</button>

                    <br><br>

                    <hr>
                    <p>Fecha: 20 de enero de 2014</p><br>

                    <hr>

                </div>-->

            </div>

        </div>
    </div>
<?php get_footer(); ?>

