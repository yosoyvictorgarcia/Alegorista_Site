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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

    <nav>
        <div class="contenedor">
            <ul class="menu">
                <li class="activo"><a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/alegorista_logo.png"></a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">PROYECTOS</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACTO</a></li>
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
            <div class="container demo-2">

            <div id="slider" class="sl-slider-wrapper">

                <div class="sl-slider">
                    <?php 
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
                        }
                    }
                   ?>
                
                    <!--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-1"></div>
                            <h2>A bene placito.</h2>
                            <blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-2"></div>
                            <h2>Regula aurea.</h2>
                            <blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-3"></div>
                            <h2>Dum spiro, spero.</h2>
                            <blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
                        </div>
                    </div>
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-4"></div>
                            <h2>Donna nobis pacem.</h2>
                            <blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-5"></div>
                            <h2>Acta Non Verba.</h2>
                            <blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
                        </div>
                    </div>-->
                </div><!-- /sl-slider -->

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>

            </div><!-- /slider-wrapper -->
    </header>