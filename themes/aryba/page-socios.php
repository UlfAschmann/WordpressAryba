<?php get_header(); ?>
<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Socios</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <div class="parallax-inner">
                <?php $imagen_banner = get_field('socios_page_imagen', 'options') ?>
                <div class="bg" data-bg="<?php
                if (isset($imagen_banner['url'])) {
                    echo $imagen_banner['url'];
                }
                ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2> Nuestros Socios <strong> Comerciales </strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/quienes-somos">Quienes Somos</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/socios">Socios Comerciales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->
    <!-- content  -->
    <div class="content">
        <section>
            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);">
                <span>01</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title socios">ALGUNOS DE<strong> NUESTROS CLIENTES</strong></h2>
                        <h3 class="section-sub-title"><strong>RESPALDAN</strong> NUESTRA EXPERIENCIA</h3>

                        <div class="clients text-center">
                            <?php $socios = get_field('socios_page_socios', 'options') ?>
                            <?php if (count($socios)): ?>
                                <ul class="list-inline">
                                    <?php foreach ($socios as $socio): ?>
                                        <?php if (isset($socio['socios_page_socios_logo'])): ?>
                                            <li>
                                                <img class="img-responsive" src="<?php echo $socio['socios_page_socios_logo']['url']; ?>" alt="<?php echo $socio['socios_page_socios_logo']['alt']; ?>" />
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php get_footer(); ?>
