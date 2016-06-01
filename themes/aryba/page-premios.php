<?php get_header(); ?>

<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Premios</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <?php $imagen_banner = get_field('premios_page_imagen', 'options') ?>
            <div class="parallax-inner">
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
                            <h2> Nuestros<strong> Premios </strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/quienes-somos">Quienes Somos</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/premios">Premios</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->


    <div class="content">
        <section>
            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);">
                <span>01</span></div>
            <div class="container">
                <h2 class="section-title premios">Algunos de nuestros<strong> Premios</strong></h2>
                <div class="premios text-center">
                    <?php $premios = get_field('premios_page_premios', 'options') ?>
                    <?php if (count($premios)): ?>
                        <ul class="list-inline">
                            <?php foreach ($premios as $premio): ?>
                                <?php if (isset($premio['premios_page_premios_logo'])): ?>
                                    <li>
                                        <img src="<?php echo $premio['premios_page_premios_logo']['url'];?>" alt="<?php echo $premio['premios_page_premios_logo']['alt'];?>">
                                        <h2><?php echo $premio['premios_page_premios_titulo'];?></h2>
                                        <h3><?php echo $premio['premios_page_premios_subtitulo'];?></h3>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>



    <?php get_footer(); ?>
