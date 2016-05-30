<?php get_header(); ?>
<?php
/*
 * Sacando la información del Loop
 */
$args = array(
    'post_type' => array('desarrollos'),
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);

$posts_desarrollos = get_posts($args);
$num_total_desarrollos = count($posts_desarrollos);
?>

<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Desarollos</div>
    <!-- Page title  end-->
    <!-- content  -->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <div class="parallax-inner">
                <div class="bg" data-bg="/bg/imagen-1.png" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Nuestros <strong> Desarrollos </strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="desarrollo.html">Desarollos</a></li>
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
            <div class="container">
                <!-- filter -->
                <div class="filter-holder inline-filter">
                    <div class="gallery-filters">
                        <a href="#" class="gallery-filter transition2 gallery-filter_active" data-filter="*">Todos</a>
                        <?php $categorias_desarrollos = get_terms('categoria_proyectos'); ?>
                        <?php foreach ($categorias_desarrollos as $categoria): ?>
                            <a href="#" class="gallery-filter transition2" data-filter=".<?php echo $categoria->slug ?>"><?php echo $categoria->name; ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="count-folio">
                        <div class="num-album"></div>
                        <div class="all-album"></div>
                    </div>
                </div>
                <!-- filter end-->
                <!--=============== portfolio holder ===============-->
                <div class="gallery-items   three-columns grid-small-pad ">
                    <?php for ($i = 0; $i < $num_total_desarrollos; $i++): ?>
                        <?php
                        $post_id = $posts_desarrollos[$i]->ID;
                        $taxonomias = get_the_terms($post_id, 'categoria_proyectos');
                        ?>

                        <div class="gallery-item   
                        <?php
                        foreach ($taxonomias as $taxonomy) {
                            echo $taxonomy->slug . " ";
                        }
                        ?>">
                            <div class="grid-item-holder">
                                <?php $imagen = get_field('desarrollos_imagen_home', $post_id); ?>
                                <img src="<?php
                                if (isset($imagen['url'])) {
                                    echo $imagen['url'];
                                }
                                ?>" alt="">
                                <div class="port-desc-holder">
                                    <div class="port-desc">
                                        <div class="grid-item">
                                            <h3><a href="<?php echo get_permalink($post_id); ?>"><?php echo $posts_desarrollos[$i]->post_title; ?></a></h3>
                                            <span><?php echo get_field('desarrollos_lugar', $post_id); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endfor; ?>



                </div>
                <!-- end gallery items -->
                <!-- custom-link-holder  -->
                <div class="custom-link-holder">
                    <a href="contact.html" class="btn anim-button" data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Contáctanos</span><i class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- custom-link-holder  end -->
            </div>
        </section>
    </div>


    <?php get_footer(); ?>
