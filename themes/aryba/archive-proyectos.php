<?php get_header(); ?>
<?php
/*
 * Sacando la información del Loop
 */
$args = array(
    'post_type' => array('proyectos'),
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);

$posts_proyectos = get_posts($args);
$num_total_proyectos = count($posts_proyectos);
?>

<!--=============== wrapper ===============-->
<div id="wrapper">
    <!-- content-holder  -->
    <div class="content-holder">
        <!-- Page title -->
        <div class="dynamic-title">Proyectos</div>
        <!-- Page title  end-->
        <!-- content  -->
        <div class="content hor-content full-height pad-con no-bg-con">
            <!-- filter  -->
            <div class="filter-holder round-filter">
                <div class="gallery-filters hid-filter">
                    <a href="#" class="gallery-filter transition2 gallery-filter_active" data-filter="*">Todos</a>
                    <?php $categorias_proyectos = get_terms('categoria_proyectos'); ?>
                    <?php foreach ($categorias_proyectos as $categoria): ?>
                        <a href="#" class="gallery-filter transition2" data-filter=".<?php echo $categoria->slug ?>"><?php echo $categoria->name; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="clearfix"></div>
                <div class="filter-button">Filtros</div>
                <div class="count-folio round-counter">
                    <div class="num-album"></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!-- filter end -->
            <!--=============== portfolio holder ===============-->
            <div class="resize-carousel-holder hpw">
                <div class="p_horizontal_wrap">
                    <div id="portfolio_horizontal_container" class="two-ver-columns">

                        <?php for ($i = 0; $i < $num_total_proyectos; $i++): ?>
                            <!-- portfolio item -->
                            <?php
                            //Saco la taxonomias asociadas 
                            $post_id = $posts_proyectos[$i]->ID;
                            $taxonomias = get_the_terms($post_id, 'categoria_proyectos');
                            ?>
                            <div class="portfolio_item <?php
                            foreach ($taxonomias as $taxonomy) {
                                echo $taxonomy->slug . " ";
                            }
                            ?> design">
                                 <?php $imagen = get_field('proyectos_imagen_home', $post_id); ?>
                                <img src="<?php
                                if (isset($imagen['url'])) {
                                    echo $imagen['url'];
                                }
                                ?>" alt="">
                                <div class="port-desc-holder">
                                    <div class="port-desc">
                                        <div class="grid-item">
                                            <h3><a href="<?php echo get_permalink($post_id); ?>"><?php echo $posts_proyectos[$i]->post_title; ?></a></h3>
                                            <span>
                                                <?php echo get_field('proyectos_lugar', $post_id); ?>
                                                / 
                                                <?php
                                                $cadena_categorias = "";
                                                foreach ($taxonomias as $taxonomy) {
                                                    $cadena_categorias .= $taxonomy->name . ", ";
                                                }
                                                echo substr($cadena_categorias, 0, -2);
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- portfolio item end -->
                        <?php endfor; ?>

                    </div>
                    <!--portfolio_horizontal_container  end-->
                </div>
                <!--p_horizontal_wrap  end-->
            </div>
        </div>
        <!-- content end -->
        <!-- share  -->
        <div class="share-inner">
            <div class="share-container  isShare" data-share="['facebook','googleplus','twitter','linkedin']"></div>
            <div class="close-share"></div>
        </div>
        <!-- share end -->
    </div>
    <!-- content-holder  end-->
</div>
<!-- wrapper end -->
<!-- Fixed footer -->



<?php get_footer(); ?>
