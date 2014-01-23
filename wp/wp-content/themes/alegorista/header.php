<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alegorista</title>
        <meta name="descoración, interiores, arquitectura, remodelación" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="img/favicon.jpg" rel="shortcut icon">
        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/modernizr-2.7.1.min.js"></script>
        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800' rel='stylesheet' type='text/css'>
        <!-- GOOGLE FONTS -->

        <!-- SLIDER BEGINS -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/custom.css" />
        <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr.custom.79639.js"></script>
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/styleNoJS.css" />
        </noscript>
        <!-- SLIDER ENDS -->

        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

    <nav>
        <div class="contenedor">
            <ul class="menu">
                <li class=""><a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/alegorista_logo.png"></a></li>
                <li class="<?php echo (is_home()) ? 'activo' : '' ?>"><a href="<?php echo get_bloginfo('url'); ?>">INICIO</a></li>
                <li class="<?php echo (is_page('nosotros')) ? 'activo' : '' ?>"><a href="<?php echo get_bloginfo('url'); ?>/nosotros">NOSOTROS</a></li>
                <li class="<?php echo (is_page('proyectos') || is_single()) ? 'activo' : '' ?>"><a href="<?php echo get_bloginfo('url'); ?>/proyectos">PROYECTOS</a></li>
                <li class="<?php echo (is_page('blog')) ? 'activo' : '' ?>"><a href="<?php echo get_bloginfo('url'); ?>/blog">BLOG</a></li>
                <li class="<?php echo (is_page('contacto')) ? 'activo' : '' ?>"><a href="<?php echo get_bloginfo('url'); ?>/contacto">CONTACTO</a></li>
             </ul>
        </div>
    </nav>

    <!--<header>
        <div class="contenedor">
            <h1>Titulo</h1>
            <p>Parrafo</p>
        </div>
    </header>-->
    

    <header>
            

            <?php if(!is_single()){ ?>
                <?php 
                //if(is_home()){
                    query_posts(
                        array(
                            'cat' => get_cat_ID('proyecto'),
                            'posts_per_page' => '1'
                        )
                    );
                //}
                ?>
                
                    <?php 
                    if(have_posts()){                        
                        while(have_posts()){
                            the_post();
                            $gallery = dfi_get_featured_images($post->ID);
                        }
                    }
                   /* if(!$gallery){
                        query_posts(
                            array(
                                'cat' => get_cat_ID('proyecto'),
                                'posts_per_page' => '1'
                            )
                        );
                        if(have_posts()){                        
                            while(have_posts()){
                                the_post();
                                $gallery = dfi_get_featured_images($post->ID);
                            }
                        }
                    }*/
                            if($gallery){
                            ?>
                            <div class="container demo-2">
                                <div id="slider" class="sl-slider-wrapper">
                                    <div class="sl-slider">
                            <?php

                                foreach($gallery as $ki => $i){
                                    $postA = get_post($i['attachment_id']);
                                    ?>
                                     <div class="sl-slide" data-orientation="<?php echo ($ki % 2) ? 'horizontal' : 'vertical' ?>" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                        <div class="sl-slide-inner">
                                            <div class="bg-img" style="background-image: url(<?php echo $postA->guid; ?>)"></div>
                                            <h2><?php echo $postA->post_title;?></h2>
                                            <blockquote><p><?php echo $postA->post_content; ?></p><cite><?php echo $postA->post_excerpt; ?></cite></blockquote>
                                        </div>
                                    </div>
                                    <?php
                                }
                            
                   ?>
                </div><!-- /sl-slider -->
                <nav id="nav-dots" class="nav-dots">
                        <?php
                            the_post();
                            foreach($gallery as $ki => $i){
                                $postA = get_post($i['attachment_id']);
                                ?>                                 
                                <span <?php echo ($ki == 0) ? 'class="nav-dot-current"' : ''; ?> ></span>
                                <?php
                            }
                                            
                    ?>
                    </nav>
                    </div><!-- /slider-wrapper -->
                </div>
                        <?php 
                         }
            }  ?>
    </header>