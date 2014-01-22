<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<footer>
        <div class="contenedor">            

            <hr class="line-footer">
            <div id="privacidad">
                <p class="privacidad">Alegorista © 2014 • <a href="#" target="_blank">Aviso de Privacidad</a></p>
            </div>
    
            <div id="redes">
                <div class="redsocial"><a href="https://www.facebook.com/Alegorista" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/rs_facebook.png" target="_blank"></a></div>
                <div class="redsocial"><a href="https://twitter.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/rs_twitter.png"></a></div>
                <div class="redsocial"><a href="http://www.pinterest.com/alegorista/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/rs_pinterest.png"></a></div>
             </div>
    
        </div>
    </footer>
        <!-- Ends content here -->

        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
        <?php if(is_single()){ ?>
            <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.js"></script>
            <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/jquery.lightbox-0.5.css" media="screen" />
        <?php } ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->

        <!-- SLIDER BEGINS -->
        <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.slitslider.js"></script>
        <script type="text/javascript"> 
            $(function() {
            
                var Page = (function() {

                    var $nav = $( '#nav-dots > span' ),
                        slitslider = $( '#slider' ).slitslider( {
                            onBeforeChange : function( slide, pos ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $nav.eq( pos ).addClass( 'nav-dot-current' );

                            }
                        } ),

                        init = function() {

                            initEvents();
                            
                        },
                        initEvents = function() {

                            $nav.each( function( i ) {
                            
                                $( this ).on( 'click', function( event ) {
                                    
                                    var $dot = $( this );
                                    
                                    if( !slitslider.isActive() ) {

                                        $nav.removeClass( 'nav-dot-current' );
                                        $dot.addClass( 'nav-dot-current' );
                                    
                                    }
                                    
                                    slitslider.jump( i + 1 );
                                    return false;
                                
                                } );
                                
                            } );

                        };

                        return { init : init };

                })();

                Page.init();

                /**
                 * Notes: 
                 * 
                 * example how to add items:
                 */

                /*
                
                var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
                
                // call the plugin's add method
                ss.add($items);

                */
            
            });
        </script>
        <!-- SLIDER ENDS -->
        <?php if(is_single()){ ?>
         <script type="text/javascript">
            $(function() {
                $('#gallery a').lightBox();
            });
            </script>
        <?php } ?>

    </body>
</html>