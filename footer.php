<footer id="contenedor-contacto" style="background:url(<?php bloginfo('template_url'); ?>/img/fondo-azul.svg) no-repeat center center; background-size:cover; background-size: 3300px 1500px;">
    <div class="container">
        <div class="row">
            <div id="contenedor-informacion-contacto" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-0">
                <span>CONTACTO</span>
                                <span class="separador-solido-blanco" style="margin:0; margin-bottom:25px;"></span>
                                +52 1 (686) 147-4100<br>
                +52 (686) 565-1257<br />
                tornosmexicali@gmail.com<br />
                <a id="facebook" href="https://www.facebook.com/tornosmexicali" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/fb_blanco.svg"> /tornosmexicali</a><br />
                <br />
                
                <h4>DIRECCI&Oacute;N</h4>
                Juan de la Barrera y <br />
                Río Presidio #1301, Col. Miraflores,<br />
                Mexicali B.C. 21250<br />
                <br />
                1137 Calle Tesoro<br />
                Chula Vista, CA. 91915<br />
                +1 (619) 870-0191<br />
            </div>
            <img class="col-md-2 hidden-xs hidden-sm" src="<?php bloginfo('template_url'); ?>/img/degradado.png">
            <div id="contenedor-formulario-contacto" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                <?php
                    $my_postid = 8;//This is page id or post id
                    $content_post = get_post($my_postid);
                    $formulario = $content_post->post_content;
                    $formulario = apply_filters('the_content', $formulario);
                    $formulario = str_replace(']]>', ']]&gt;', $formulario);
                    echo $formulario;
                ?>
            </div>
            
        </div>
    </div>
    <!-- style="background:url(<?php bloginfo('template_url'); ?>/img/fondo-azul.svg) no-repeat center center; background-size:cover;" -->
</footer>
<div class="container-fluid" id="madeby-container">
	<div class="row">
		<span><font style="font-weight:700;">Servicentro MT</font> 2009&copy;</span>
  </div>
</div>
    


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mobile.custom.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/funciones.js"></script>

</body>
</html>