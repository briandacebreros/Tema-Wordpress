<?php get_header(); ?>


<section id="contenedor-carousel">
	<img id="logo-carousel" src="<?php bloginfo('template_url'); ?>/img/MT_Logo_BlancoLetra-01.svg">
    <div class="container-fluid no-padding">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
            <?php 
            $posts = get_posts(array(
                'post_type'			=> 'banner',
                'posts_per_page'	=> -1
            ));
            $num_posts=  count($posts);   
            $cont = 0;
            ?>
            <ol class="carousel-indicators">
                <?php
                while( $cont < $num_posts ) : ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $cont; ?>" class="<?php if( $cont == 0 ) : ?>active<?php endif; ?>"></li>
                <?php
                $cont++;
                endwhile; ?>
            </ol>
            
            <div class="carousel-inner" role="listbox">
            <?php 
            
            $contador = 0;
            if( $posts ) : ?>
                <?php foreach( $posts as $post ): 
                        setup_postdata( $post );
                    ?>
                    <div class="item <?php if( $contador == 0 ) : ?> active <?php endif; ?>">
                        <span class="img-carousel hidden-sm hidden-md hidden-lg" style="background:url(<?php the_field('imagen_responsivo'); ?>) no-repeat center center; background-size:cover;">
                        </span>
                        <span class="img-carousel hidden-xs" style="background:url(<?php the_field('imagen'); ?>) no-repeat center center; background-size:cover;">
                        </span>
                    </div>
                     
                <?php $contador++;
                endforeach;
                wp_reset_postdata(); 
            endif; ?>
            </div>
            
              <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span id="flecha-izquierda"><img src="<?php bloginfo('template_url'); ?>/img/flecha-izquierda.svg"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span id="flecha-derecha"><img src="<?php bloginfo('template_url'); ?>/img/flecha-derecha.svg"></span>
            </a>
        </div>
    </div>
</section>

<section id="contenedor-nosotros">
    <div class="container">
        <h2>QUI&Eacute;NES SOMOS</h2>
                <span class="separador-solido-blanco"></span>
        <p class="col-xs-12">

        <?php 
        $post_nosotros = get_post(90);
        $title = $post_7->post_title;
        echo $post_nosotros->post_content;

        ?></p>

    </div>
</section>
<section id="contenedor-servicios">
    <div class="container">
        <h2>SERVICIOS</h2>
                <span class="separador-solido"></span>
    <?php 
        $posts = get_posts(array(
            'post_type'         => 'servicio',
            'posts_per_page'    => -1,
            'orderby'           => 'id',
            'order'             => 'ASC'
        ));
        $num_posts=  count($posts);   
        $cont = 0;
        
        if( $posts ) : ?>
                <?php foreach( $posts as $post ): 
                        setup_postdata( $post );
        ?>
            <span class="item-servicio-container">
                <span class="item-servicio-hover"></span>
                <span class="item-servicio"></span>
                
                <?php 
                    if( get_the_ID() == '71') : ?>
                        <img class="visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/img/icono-venta.svg">
                        <video class="item-loop visible-md visible-lg" preload="auto" autoplay="true" loop="true">
                            <source src="<?php bloginfo('template_url'); ?>/img/LOOP2.mp4" type="video/mp4">
                        </video>
                    <?php
                    endif;
                    if( get_the_ID() == '72') : ?>
                        <img class="visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/img/icono-reconstruccion.svg">
                        <video class="item-loop visible-md visible-lg" preload="auto" autoplay="true" loop="true">
                            <source src="<?php bloginfo('template_url'); ?>/img/LOOP3.mp4" type="video/mp4">
                        </video>

                    <?php
                    endif;
                    if( get_the_ID() == '73') : ?>
                        <img class="visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/img/icono-reparacion.svg">
                        <video class="item-loop visible-md visible-lg" preload="auto" autoplay="true" loop="true">
                                <source src="<?php bloginfo('template_url'); ?>/img/LOOP1.mp4" type="video/mp4">
                        </video>    

                    <?php
                    endif;
                    if( get_the_ID() == '74') : ?>
                        <img class="visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/img/MT_Engrane.svg">
                        <video class="item-loop visible-md visible-lg" preload="auto" autoplay="true" loop="true">
                                <source src="<?php bloginfo('template_url'); ?>/img/LOOP5.mp4" type="video/mp4">
                        </video>

                    <?php
                    endif;
                    if( get_the_ID() == '75') : ?>
                        <img class="visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/img/icono-torneo.svg">
                        <video class="item-loop visible-md visible-lg" preload="auto" autoplay="true" loop="true">
                                <source src="<?php bloginfo('template_url'); ?>/img/LOOP4.mp4" type="video/mp4">
                        </video>
                    <?php
                    endif;
                ?>
                <h3><?php echo the_title(); ?></h3>
                <p><?php echo the_content(); ?></p>
            </span>

        <?php
            endforeach;
            wp_reset_postdata(); 
        endif; ?>

    </div>
</section>

<section id="contenedor-galeria" class="hidden-xs" style="background:url(<?php bloginfo('template_url'); ?>/img/fondo-rojo.svg) no-repeat center center; background-size: 2633px 1500px;">
    <div class="container">
        <div class="row">
        	
            <div> <!-- GALERIA RESPONSIVE -->
                <h2 class="blanco">GALER&Iacute;A</h2>
								<span class="separador-solido-blanco"></span>
                <?php 
                $posts = get_posts(array(
                    'post_type'			=> 'galeria',
                    'posts_per_page'	=> -1
                ));
                $contador = 0;
                if( $posts ) : ?>
                    <?php foreach( $posts as $post ): 
                            setup_postdata( $post );
                        ?>
                        <?php
                            $my_postid = $id_post_actual;
                            $content_post = get_post($my_postid);
                            $content = $content_post->post_content;
                        ?>
                        <?php if( $contador < 8 ) : ?>
                            <a class="item-galeria 
                                <?php if( $contador < 3 ) : ?>col-xs-8 col-xs-offset-2<?php endif; ?>
                                <?php if ($contador >= 3  && $contador < 8) : ?>hidden-xs hidden-sm<?php endif; ?> col-sm-4 col-sm-offset-0 col-md-3" 
                                    href="<?php the_field('imagen'); ?>" 
                                    data-title="<?php the_title(); ?>" data-footer="<?php echo $content; ?>" data-toggle="lightbox" data-gallery="galeria-responsive">
                                <span class="item-foto-galeria" style="background:url('<?php the_field('imagen_responsivo'); ?>') no-repeat center center; background-size:cover;"></span>
                                <div class="titulo-galeria-container">
																		<h3 class="titulo-galeria blanco text-left"><?php the_title(); ?></h3>
																</div>
                                <p class="text-left hidden-xs hidden-sm hidden-md">
                                    <?php
                                		$content = get_the_content();
                                		$content = get_the_excerpt();
                                		$content ="";
                                	?>
                                </p>
                            </a>
                         <?php endif; ?>
                         
                         
                        <?php if( $contador == 8 ) : ?> 
                            <div class="col-xs-12"><span id="ver-galeria-completa-btn">Ver m&aacute;s +</span></div>
                        <?php endif; ?>
                        
                        
                        <?php if( $contador >= 8 ) : ?>
                        
                            <a class="item-galeria item-galeria-oculto
                                    col-sm-4 col-sm-offset-0 col-md-3" href="<?php the_field('imagen'); ?>" 
                                    data-title="<?php the_title(); ?>" data-footer="<?php echo $content; ?>" data-toggle="lightbox" data-gallery="galeria-responsive">
                                <span class="item-foto-galeria" style="background:url('<?php the_field('imagen_responsivo'); ?>') no-repeat center center; background-size:cover;"></span>
                                <div class="titulo-galeria-container">
																		<h3 class="titulo-galeria blanco text-left"><?php the_title(); ?></h3>
																</div>
                                <p class="text-left hidden-xs hidden-sm hidden-md">
                                    <?php
                                		$content = get_the_content();
                                		$content = get_the_excerpt();
                                		$content ="";
                                	?>
                                </p>
                            </a>
                            
                            

                         <?php endif; ?>
                         
                    <?php $contador++;
                    endforeach;
                    wp_reset_postdata(); 
                endif; ?>
                <?php if( $contador > 8 ) : ?> 
                        <div class="col-xs-12"><span id="ocultar-galeria-btn">Ocultar -</span></div>
                <?php endif; ?>
            </div>
            
            

        </div>
    </div>
</section>




<section id="contenedor-galeria-movil" style="background:url(<?php bloginfo('template_url'); ?>/img/fondo-rojo.svg) no-repeat center center; background-size:cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="hidden-sm hidden-md hidden-lg"> <!-- GALERIA RESPONSIVE -->
                <h2 class="blanco">GALER&Iacute;A</h2>
							<span class="separador-solido-blanco"></span>
                <?php 
                $posts = get_posts(array(
                    'post_type'			=> 'galeria',
                    'posts_per_page'	=> -1
                ));
                $contador = 0;
                if( $posts ) : ?>
                    <?php foreach( $posts as $post ): 
                            setup_postdata( $post );
                        ?>
                        <?php
                            $my_postid = $id_post_actual;
                            $content_post = get_post($my_postid);
                            $content = $content_post->post_content;
                        ?>
                        <?php if( $contador < 3 ) : ?>
                            <a class="item-galeria col-xs-8 col-xs-offset-2"
                                    href="<?php the_field('imagen_responsivo'); ?>" 
                                    data-title="<?php the_title(); ?>" data-footer="<?php echo $content; ?>" data-toggle="lightbox" data-gallery="galeria-responsive">
                                <span class="item-foto-galeria" style="background:url('<?php the_field('imagen_responsivo'); ?>') no-repeat center center; background-size:cover;"></span>
                               <div class="titulo-galeria-container">
																		<h3 class="titulo-galeria blanco text-left"><?php the_title(); ?></h3>
																</div>
                                <p class="text-left hidden-xs hidden-sm hidden-md">
                                    <?php
                                		$content = get_the_content();
                                		$content = get_the_excerpt();
                                		$content ="";
                                	?>
                                </p>
                            </a>
                            
                            
                         <?php endif; ?>
                         
                         
                        <?php if( $contador == 3) : ?> 
                            <div class="col-xs-12"><span id="ver-galeria-completa-btn-resp">Ver m&aacute;s +</span></div>
                        <?php endif; ?>
                        
                        
                        <?php if( $contador >= 3 ) : ?>
                        
                            <a class="item-galeria item-galeria-oculto-resp
                                    col-xs-8 col-xs-offset-2" href="<?php the_field('imagen_responsivo'); ?>" 
                                    data-title="<?php the_title(); ?>" data-footer="<?php echo $content; ?>" data-toggle="lightbox" data-gallery="galeria-responsive">
                                <span class="item-foto-galeria" style="background:url('<?php the_field('imagen_responsivo'); ?>') no-repeat center center; background-size:cover;"></span>
                                <div class="titulo-galeria-container">
																		<h3 class="titulo-galeria blanco text-left"><?php the_title(); ?></h3>
																</div>
                                <p class="text-left hidden-xs hidden-sm hidden-md">
                                    <?php
                                		$content = get_the_content();
                                		$content = get_the_excerpt();
                                		$content ="";
                                	?>
                                </p>
                            </a>
                            
                         <?php endif; ?>
                         
                    <?php $contador++;
                    endforeach;
                    wp_reset_postdata(); 
                endif; ?>
                <?php if( $contador > 3 ) : ?> 
                        <div class="col-xs-12"><span id="ocultar-galeria-btn-resp">Ocultar -</span></div>
                <?php endif; ?>
            </div>
            
            

        </div>
    </div>
</section>






<section id="contenedor-mapa" class="no-padding">
    <div id="contenedor-ubicacion" class="container-fluid no-padding">
        <!--<div id="info-mapa"></div>-->
        <a id="foto-mapa" href="<?php bloginfo('template_url'); ?>/img/MTServicentro_web.jpg" class="hidden-xs" data-title="Ubicación" data-toggle="lightbox" data-gallery="galeria-ubicacion" style="background:url(<?php bloginfo('template_url'); ?>/img/MTServicentro_web_xs.jpg) no-repeat bottom center; background-size:cover;">
        </a>
        <div id="direccion-mapa"  class="hidden-xs">
 			<span>
        		Juan de la Barrera y <br />
                Río Presidio #1301, Col. Miraflores,<br />
            </span>
			Mexicali B.C. 21250<br />
        </div>
        <div class="overlay" onClick="style.pointerEvents='none'"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.4366650758025!2d-115.42618948439691!3d32.647822197867974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d771ac9d8bce29%3A0x3059c7262745fc79!2sCalle+Rio+Presidio+%26+Av+Juan+de+la+Barrera%2C+M%C3%A1rtires+de+1906%2C+21250+Mexicali%2C+B.C.%2C+Mexico!5e0!3m2!1sen!2s!4v1470100807615" 
            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    </div>
</section>

<div id="foto-mapa-xs" class="hidden-sm hidden-md hidden-lg" style="background:url(<?php bloginfo('template_url'); ?>/img/MTServicentro_web_xs.jpg) no-repeat bottom center; background-size:cover;"></div>

<?php get_footer(); ?>

