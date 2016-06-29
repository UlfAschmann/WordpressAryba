<?php get_header(); ?>
	<?php $post_id = get_the_ID();
?>
		<!-- content-holder  -->
		<div class="content-holder">
			<!-- Page title -->
			<div class="dynamic-title">Desarrollo Individual</div>
			<!-- Page title  end-->
			<!-- content  -->
			<!-- content  -->
			<div class="content">
				<section class="parallax-section">
					<div class="parallax-inner">
						<?php $imagen_banner = get_field('desarrollos_imagen_home', $post_id) ?>
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
									<h2><?php echo get_the_title($post_id); ?></h2>
								</div>
								<div class="col-md-6">
									<ul class="creat-list">
										<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
										<li><a href="<?php echo get_home_url(); ?>/desarrollos">Portfolio</a></li>
										<!--<li><a href="portfolio-single5.html">Portfolio single</a></li>-->
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
						<?php $galeria = get_field('desarrollos_galeria', $post_id); ?>
							<?php if ($galeria): ?>
								<div class="single-slider-holder lightgallery" data-looped="0">
									<div class="single-slider" data-loppsli="0">
										<?php $num_items = count($galeria); ?>
											<!-- 1 -->
											<?php for ($i = 0; $i < $num_items; $i++): ?>
												<div class="item">
													<img src="<?php echo $galeria[$i]['desarrollos_galeria_imagen']['url']; ?>" alt="">
													<a data-src="<?php echo $galeria[$i]['desarrollos_galeria_imagen']['url']; ?>" class="popup-image slider-zoom" data-sub-html="alteration in some">
														<i class="fa fa-expand"></i>
													</a>
												</div>
												<?php endfor; ?>
									</div>
									<div class="customNavigation ssn">
										<a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
										<a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
									</div>
								</div>
								<?php endif; ?>
									<!-- single slider  end -->
									<div class="custom-inner-holder">
										<!-- 1 -->
										<div class="custom-inner">
											<div class="row">
												<div class="col-md-6">
													<h3>Detalles del Proyecto</h3>
												</div>
												<div class="col-md-6">
													<?php
								$content = get_post_field('post_content', $post_id);
								$content = apply_filters('the_content', $content);
								echo $content;
								?>
														<div class="espacio"></div>
														<!-- content-holder  -->
														<div class="content-holder">
															<!-- Page title -->
															<div class="dynamic-title">Desarrollo Individual</div>
															<!-- Page title  end-->
															<!-- content  -->
															<!-- content  -->
															<div class="content">
																<section class="parallax-section">
																	<div class="parallax-inner">
																		<?php $imagen_banner = get_field('desarrollos_imagen_home', $post_id) ?>
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
																					<h2><?php echo get_the_title($post_id); ?></h2>
																				</div>
																				<div class="col-md-6">
																					<ul class="creat-list">
																						<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
																						<li><a href="<?php echo get_home_url(); ?>/desarrollos">Desarrollos</a></li>
																						<!--<li><a href="portfolio-single5.html">Portfolio single</a></li>-->
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
																		<?php $galeria = get_field('desarrollos_galeria', $post_id); ?>
																			<?php if ($galeria): ?>
																				<div class="single-slider-holder lightgallery" data-looped="0">
																					<div class="single-slider" data-loppsli="0">
																						<?php $num_items = count($galeria); ?>
																							<!-- 1 -->
																							<?php for ($i = 0; $i < $num_items; $i++): ?>
																								<div class="item">
																									<img src="<?php echo $galeria[$i]['desarrollos_galeria_imagen']['url']; ?>" alt="">
																									<a data-src="<?php echo $galeria[$i]['desarrollos_galeria_imagen']['url']; ?>" class="popup-image slider-zoom" data-sub-html="alteration in some">
																										<i class="fa fa-expand"></i>
																									</a>
																								</div>
																								<?php endfor; ?>
																					</div>
																					<div class="customNavigation ssn">
																						<a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
																						<a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
																					</div>
																				</div>
																				<?php endif; ?>
																					<!-- single slider  end -->
																					<div class="custom-inner-holder">
																						<!-- 1 -->
																						<div class="custom-inner">
																							<div class="row">
																								<div class="col-md-6">
																									<h3>Project details</h3>
																								</div>
																								<div class="col-md-6">
																									<?php
								$content = get_post_field('post_content', $post_id);
								$content = apply_filters('the_content', $content);
								echo $content;
								?>
																										<div class="espacio"></div>

																										<?php $detalles = get_field('desarrollos_detalles', $post_id); ?>
																											<?php if ($detalles): ?>
																												<?php $num_items = count($detalles); ?>
																													<!-- 1 -->
																													<?php for ($i = 0; $i < $num_items; $i++): ?>
																														<h4 class="lista-single"><?php echo $detalles[$i]['desarrollos_detalles_titulo'];?></h4>
																														<p>>
																															<?php echo $detalles[$i]['desarrollos_detalles_descripcion'];?>
																														</p>
																														<?php endfor; ?>
																															<?php endif; ?>

																																<a href="<?php echo get_home_url(); ?>/desarrollos" class=" btn anim-button   flat-btn   transition  fl-l"><span>Regresar</span><i class="fa fa-eye"></i></a>

																																<div class="content-nav">
																																	<ul>
																																		<?php
										$previous_post = get_previous_post();
										$next_post = get_next_post();
										//var_dump($previous_post);
										?>
																																			<?php if($next_post):?>
																																				<li><a href="<?php echo get_permalink ($next_post->ID);?>" class=" text-link">next project</a></li>
																																				<?php endif;?>
																																					<?php if($previous_post):?>
																																						<li><a href="<?php echo get_permalink ($previous_post->ID);?>" class=" text-link">prev project</a></li>
																																						<?php endif;?>

																																	</ul>
																																</div>
																								</div>
																							</div>
																						</div>
																						<!-- 1 -->
																					</div>
																					<!-- custom-link-holder  end -->
																	</div>
																</section>
															</div>
															<!-- content end -->



															<?php get_footer(); ?>
