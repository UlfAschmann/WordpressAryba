<?php get_header(); ?>
<?php
$items_carrusel = get_field('extras_home_carrusel_principal', 'options');
$total_items_carrusel = count($items_carrusel);

$items_bienvenidos = get_field('extras_home_bienvenidos', 'options');
$total_items_bienvenidos = count($items_carrusel);
?>
<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Inicio</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content full-height no-bg-con">
        <!-- Hero section   -->
        <div class="hero-wrap">
            <!-- hero-wrap-image-slider-holder  end -->
            <div class="hero-wrap-image-slider-holder">
                <div class="overlay"></div>
                <!-- hero-wrap-image-slider  -->
                <div class="hero-wrap-image-slider">
                    <!-- 1  -->
                    <?php for ($i = 0; $i <= $total_items_carrusel; $i++): ?>
                        <?php if (isset($items_carrusel[$i]['extras_home_carrusel_item_imagen'])): ?>
                            <div class="item">
                                <div class="bg" data-bg="<?php echo $items_carrusel[$i]['extras_home_carrusel_item_imagen']['url']; ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>

                </div>
                <!-- hero-wrap-image-slider  end -->
            </div>
            <!-- hero-wrap-image-slider-holder  end -->
            <!-- hero-wrap-image-slider-holder  end -->
            <div class="hero-wrap-text-slider-holder">
                <!-- hero-wrap-image-slider  -->
                <div class="hero-wrap-text-slider">
                    <?php for ($i = 0; $i < $total_items_carrusel; $i++): ?>
                        <div class="item">
                            <div class="hero-wrap-item center-item">
                                <h2> <?php echo $items_carrusel[$i]['extras_home_carrusel_item_titutlo']; ?></h2>
                                <h3><?php echo $items_carrusel[$i]['extras_home_carrusel_item_subtitutlo']; ?></h3>
                                <a href="<?php echo $items_carrusel[$i]['extras_home_carrusel_item_url']; ?>" class="hero-link custom-scroll-link"><?php echo $items_carrusel[$i]['extras_home_carrusel_item_boton']; ?></a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <!-- hero-wrap-text-slider  end -->
                <!--  navigation -->
                <div class="customNavigation fhsln">
                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                </div>
                <!--  navigation end-->
            </div>
            <!-- hero-wrap-image-text-holder  end -->
        </div>
        <!-- Hero section   end -->
    </div>
    <!-- content end -->
    <!-- content  -->
    <div class="content">
        <section id="sec1">
            <!-- section number   -->
            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
            <!-- section number  end  -->
            <!--  container  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- single slider  -->
                        <div class="parallax-box slider-box ">
                            <div class="single-slider-holder">
                                <div class="single-slider">
                                    <!-- 1 -->
                                    <?php for ($i = 0; $i <= $total_items_bienvenidos; $i++): ?>

                                        <?php if (isset($items_bienvenidos[$i]['extras_home_bienvenidos_imagen'])): ?>
                                            <div class="item">
                                                <img src="<?php echo $items_bienvenidos[$i]['extras_home_bienvenidos_imagen']['url']; ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                </div>
                                <div class="customNavigation ssn">
                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- single slider  end -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- section title  -->
                        <h2 class="section-title">Bienvenidos somos <strong> GROUPO ARYBA</strong></h2>
                        <!-- section title  end -->
                        <p>Grupo Aryba nació en el año de 1996 con el objetivo de emprender desarrollos de centros comerciales de gran proyección y cumpliendo con estándares de calidad mundial.</p>
                        <p>Nuestra experiencia dentro del ramo inmobiliario a nivel nacional, nos coloca como una empresa consolidada y comprometida que brinda confianza y seguridad a nuestros clientes.
                            <br> Contamos con personal especializado por áreas, una vasta infraestructura y tecnología para llevar a cabo sus proyectos, ya sea para negocios pequeños, medianos o de gran dimensión.</p>
                        <div class="process-box">
                            <h3>SE DISTINGUE POR SER :</h3>
                            <ul class="creat-list">
                                <li><a href="#">Prestigiado</a></li>
                                <li><a href="#">Versátil</a></li>
                                <li><a href="#">Profesional</a></li>
                                <li><a href="#">Innovador</a></li>
                                <li><a href="#">Accesible</a></li>
                            </ul>
                        </div>
                        <a href="<?php echo get_home_url(); ?>/proyectos" class="btn anim-button fl-l"><span>Ver Proyectos</span><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--  container end  -->
        </section>
    </div>
    <!-- content  end  -->
    <!-- content   -->
    <div class="content dark-bg">
        <!-- section number   -->
        <div class="sect-subtitle left-align-dec" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);"><span>02</span></div>
        <!-- section number   end -->
        <!-- parallax image  -->
        <div class="parallax-inner">
            <div class="bg" data-bg="<?php
            if ($fondo_numeros = get_field('extras_home_numeros_fondo', 'options')) {
                echo $fondo_numeros['url'];
            }
            ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
        </div>
        <!-- parallax image  end -->
        <section>
            <!--  container  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="section-title">Algunos de nuestros <strong> números</strong></h2>
                    </div>
                    <!--<div class="col-md-8">
                                            <h2>Nuestros números nos respaldan.</h2>
                                    </div>-->
                    <div class="col-md-8">
                        <!-- facts   -->
                        <div class="row borders-facts">
                            <!-- 1 -->
                            <div class="inline-facts col-md-4 ">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="20" data-num="20">0</div>
                                    </div>
                                </div>
                                <h6>Años de Experiecia</h6>
                            </div>
                            <!-- 3 -->
                            <div class="inline-facts col-md-4">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="6" data-num="6">0</div>
                                    </div>
                                </div>
                                <h6>Presencia en estados de la república</h6>
                            </div>
                            <!-- 3 -->
                            <div class="inline-facts col-md-4">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="4" data-num="4">0</div>
                                    </div>
                                </div>
                                <h6>Certificados</h6>
                            </div>
                        </div>
                        <!-- facts   end -->
                        <div class="row">
                            <!-- 1 -->
                            <div class="inline-facts col-md-4 ">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="20" data-num="20">0</div>
                                    </div>
                                </div>
                                <h6>Años de Experiecia</h6>
                            </div>
                            <!-- 3 -->
                            <div class="inline-facts col-md-4">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="6" data-num="6">0</div>
                                    </div>
                                </div>
                                <h6>Presencia en estados de la república</h6>
                            </div>
                            <!-- 3 -->
                            <div class="inline-facts col-md-4">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="4" data-num="4">0</div>
                                    </div>
                                </div>
                                <h6>Certificados</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>

                </div>
            </div>
            <!--  container  end -->
        </section>
    </div>
    <!-- content  end  -->
    <!-- content   -->
    <div class="content">
        <section>
            <!-- section number     -->
            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>03</span></div>
            <!-- section number   end -->
            <!--  container  -->
            <div class="container">
                <!--  section title -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title algn-right dec-title"><span>Nuestros últimos <strong> Proyectos</strong></span></h2>
                    </div>
                </div>
                <!--  section title end  -->
                <!--  Parallax items  -->

                <?php
                /*
                 * Sacando la información del Loop
                 */
                $args = array(
                    'post_type' => array('proyectos'),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 3,
                );

                $posts_proyectos = get_posts($args);
                $num_total_proyectos = count($posts_proyectos);
                ?>

                <?php //var_dump($posts_proyectos);?>
                <?php for ($i = 0; $i < $num_total_proyectos; $i++): ?>

                    <?php $post_id = $posts_proyectos[$i]->ID; ?>
                    <div class="row">
                        <?php if (!($i % 2)) {
                            echo '<div class="col-md-5"></div>';
                        } ?>

                        <div class="col-md-7">
                            <div class="parallax-item <?php if ($i % 2) {
                            echo "left-direction";
                        } else {
                            echo "right-direction";
                        } ?>">
                                <div class="paralax-media">
                                    <div class="paralax-wrap">
    <?php $imagen = get_field('proyectos_imagen_home', $post_id); ?>
    <?php if (isset($imagen['url'])): ?>
                                            <img src="<?php echo $imagen['url']; ?>" class="respimg" alt="">
    <?php endif; ?>
                                    </div>
                                </div>
                                <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                    <div class="parallax-deck-item">
                                        <h3><?php echo $posts_proyectos[$i]->post_title; ?></h3>
                                        <a href="<?php echo get_permalink($post_id); ?>" class="btn anim-button fl-l"><span>Ver Proyecto</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<?php endfor; ?>







                <!-- 3 end-->
                <!-- custom-link-holder  -->
                <div class="custom-link-holder">
                    <a href="<?php echo get_home_url(); ?>/proyectos" class="btn anim-button" data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Ver todos los proyectos</span><i class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- custom-link-holder  end -->
            </div>
            <!--  container  end -->
        </section>
    </div>


<?php get_footer(); ?>
