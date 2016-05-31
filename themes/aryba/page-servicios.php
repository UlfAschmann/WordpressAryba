<?php get_header(); ?>

<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Servicios</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <div class="parallax-inner">
                <?php $imagen_banner = get_field('extras_servicios_imagen_1', 'options') ?>
                <div class="bg" data-bg="<?php if (isset($imagen_banner['url'])) {
                    echo $imagen_banner['url'];
                }; ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2> Nuestros <strong> Servicios</strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/servicios">Servicios</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->
    <!-- content  -->
    <div class="content" id="top-servicios">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">Qué <strong> hacemos</strong></h2>
                        <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>-->
                    </div>
                </div>
                <div class="services-holder" id="servicios">
                    <!-- 1 -->
                    <a class="serv-item" href="#arquitectura">
                        <div class="serv-item-inner">
                             <?php $imagen_1 = get_field('extras_servicios_imagen_2','options')?>
                            <img src="<?php if(isset($imagen_1['url'])){echo $imagen_1['url'];};?>" alt="">
                            <div class="ser-title">
                                <h3>Arquitectura</h3>
                            </div>
                        </div>
                    </a>
                    <!-- 1 end-->
                    <!-- 2 -->
                    <a class="serv-item" href="#construccion">
                        <div class="serv-item-inner">
                            <?php $imagen_2 = get_field('extras_servicios_imagen_3','options')?>
                            <img src="<?php if(isset($imagen_2['url'])){echo $imagen_2['url'];};?>" alt="">
                            <div class="ser-title">
                                <h3>Construcción</h3>
                            </div>
                        </div>
                    </a>
                    <!-- 2 end -->
                    <!-- 3 -->
                    <a class="serv-item" href="#comercializacion">
                        <div class="serv-item-inner">
                            <?php $imagen_3 = get_field('extras_servicios_imagen_4','options')?>
                            <img src="<?php if(isset($imagen_3['url'])){echo $imagen_3['url'];};?>" alt="">
                            <div class="ser-title">
                                <h3>Comercialización</h3>
                            </div>
                        </div>
                    </a>
                    <!-- 3 end -->
                    <!-- 4 -->
                    <a class="serv-item" href="#administracion">
                        <div class="serv-item-inner">
                            <?php $imagen_4 = get_field('extras_servicios_imagen_5','options')?>
                            <img src="<?php if(isset($imagen_4['url'])){echo $imagen_4['url'];};?>" alt="">
                            <div class="ser-title">
                                <h3>Administración de Activo</h3>
                            </div>
                        </div>
                    </a>
                    <!-- 4 end-->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- serv-post  -->
                        <div class="serv-post">
                            <!-- 1 -->
                            <div id="arquitectura" class="serv-details">
                                <h3>Arquitectura</h3>
                                <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>-->
                                <ul class="ser-list">
                                    <li>Planeación de Espacios</li>
                                    <li>Anteproyecto</li>
                                    <li>Proyecto Ejecutivo</li>
                                </ul>
                                <a href="#top-servicios"><span class="price">Servicios</span></a>
                            </div>
                            <!-- 1 end -->
                            <!-- 2 -->
                            <div id="construccion" class="serv-details">
                                <h3>Construcción</h3>
                                <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>-->
                                <ul class="ser-list">
                                    <li>Gerecia de Obra</li>
                                    <li>Coordinación de Obra</li>
                                    <li>Ejecucción de Obra</li>
                                    <li>Supervisión de Obra</li>
                                </ul>
                                <a href="#top-servicios"><span class="price">Servicios</span></a>
                            </div>
                            <!-- 2 end -->
                            <!-- 3 -->
                            <div id="comercializacion" class="serv-details">
                                <h3>Comercialización</h3>
                                <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. You need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. You need to be sure there isn't anything embarrassing hidden in the middle of text. </p>-->
                                <ul class="ser-list">
                                    <li>Diseño de mezcla comercial y Rent Roll</li>
                                    <li>Promoción y contratación de Locatarios</li>
                                    <li>Diseño de contratos de Arrendamiento</li>
                                </ul>
                                <a href="#top-servicios"><span class="price">Servicios</span></a>
                            </div>
                            <!-- 3 end -->
                            <!-- 4 -->
                            <div id="administracion" class="serv-details">
                                <h3>Administración de Activos</h3>
                                <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>-->
                                <ul class="ser-list">
                                    <li>Control y administración de activos</li>
                                    <li>Administración de negocios en operación</li>
                                </ul>
                                <a href="#top-servicios"><span class="price">Servicios</span></a>
                            </div>
                            <!-- 4 end -->
                        </div>
                        <!-- serv-post end-->
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->

<?php get_footer(); ?>
