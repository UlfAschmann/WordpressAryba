<?php get_header(); ?>

	<!-- content-holder  -->
	<div class="content-holder">
		<!-- Page title -->
		<div class="dynamic-title">Quienes Somos</div>
		<!-- Page title  end-->
		<!-- content  -->
		<div class="content">
			<section class="parallax-section">
				<div class="parallax-inner">
					<?php $imagen_banner = get_field('extras_quienessomos_imagen_1','options')?>
						<div class="bg" data-bg="<?php if(isset($imagen_banner['url'])){echo $imagen_banner['url'];};?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
						<div class="overlay"></div>
				</div>
				<div class="container">
					<div class="page-title">
						<div class="row">
							<div class="col-md-6">
								<h2>Quienes<strong> Somos </strong></h2>
							</div>
							<div class="col-md-6">
								<ul class="creat-list">
									<li><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
									<li><a href="<?php echo get_home_url(); ?>/quienes-somos">Quienes Somos</a></li>
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
			<section id="sec1">
				<div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<h2 class="section-title">Nuestra <strong> Historia</strong></h2>
							<p>GRUPO ARYBA nace bajo la visión y experiencia del Ing. Alejandro Arena Torres Landa (QEPD), quién ideó, proyectó y construyó el centro comercial Plaza Mayor en la ciudad de León, Guanajuato, uno de los más grandes de México. Con su experiencia de más de diez años en el ramo, en 1996 se crea una compañía enfocada a canalizar esta visión en el desarrollo de centros comerciales. A lo largo de estos veinte años, GRUPO ARYBA conformado por profesionistas con gran compromiso y dinamismo, ha realizado obras de gran importancia contribuyendo de esta forma al desarrollo y fortalecimiento del país.Como parte de las inversiones manejadas, hemos contado con el apoyo y la confianza de fondos internacionales desde hace más de diez años.</p>

							<p>Hoy en día, nos especializamos en el desarrollo de inmuebles de cualquier giro comercial, conjuntos empresariales y fraccionamientos residenciales.</p>

							<p>Nuestros servicios abarcan cualquier etapa de su proceso, desde la planeación hasta su comercialización, de manera específica o global.
							</p>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="parallax-box">
								<?php $imagen_historia = get_field('extras_quienessomos_imagen_2','options')?>
									<img src="<?php if(isset($imagen_historia['url'])){echo $imagen_historia['url'];};?>" class="respimg" alt="">
									<div class="overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- content end -->
		<!-- content  -->
		<div class="content dark-bg">
			<div class="sect-subtitle left-align-dec" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);"><span>02</span></div>
			<!-- parallax image  -->
			<div class="parallax-inner">
				<?php $imagen_numeros = get_field('extras_quienessomos_imagen_3','options')?>
					<div class="bg" data-bg="<?php if(isset($imagen_numeros['url'])){echo $imagen_numeros['url'];};?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
					<div class="overlay"></div>
			</div>
			<!-- parallax image  end -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section-title">Algunos de nuestros<strong> Números</strong></h2>
						</div>
						<div class="col-md-8">
							<div class="animaper" data-skcolor="rgba(255,255,255,0.31)">
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
								<div class="row">
									<!-- 4 -->
									<div class="inline-facts col-md-4 ">
										<div class="milestone-counter">
											<div class="stats animaper">
												<div class="num" data-content="20" data-num="20">0</div>
											</div>
										</div>
										<h6>Años de Experiecia</h6>
									</div>
									<!-- 5 -->
									<div class="inline-facts col-md-4">
										<div class="milestone-counter">
											<div class="stats animaper">
												<div class="num" data-content="6" data-num="6">0</div>
											</div>
										</div>
										<h6>Presencia en estados de la república</h6>
									</div>
									<!-- 6 -->
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
					</div>

				</div>
			</section>
		</div>
		<!-- content  end-->
		<!-- content  -->
		<div class="content">
			<div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);"><span>03</span></div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section-title">Valores</h2>
						</div>

						<div class="col-md-4 valores">
							<ul>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i> Honestidad</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Compromiso</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Pro actividad</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Orden</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Compromiso social</li>
							</ul>
						</div>
						<div class="col-md-4 valores">
							<ul>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Trabajo en equipo</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Puntualidad</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Calidad</li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Responsabilidad</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- content  end-->
		<!-- content-->
		<div class="content dark-bg">
			<div class="sect-subtitle left-align-dec" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);"><span>04</span></div>
			<!-- parallax image  -->
			<div class="parallax-inner">
				<?php $imagen_filosofia = get_field('extras_quienessomos_imagen_4','options')?>

					<div class="bg" data-bg=" <?php if(isset($imagen_filosofia['url'])){echo $imagen_filosofia['url'];};?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
					<div class="overlay"></div>
			</div>
			<!-- parallax image  end-->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section-title">FILOSOFÍA<strong> ORGANIZACIONAL</strong></h2>
						</div>
						<div class="col-md-8 filosofia">
							<div class="col-md-4">
								<h3>FILOSOFÍA</h3>
								<p>En Grupo Aryba somos una empresa cuya convicción de que la creatividad no tiene límites, está arraigada en nuestra gente para hacer realidad las ideas de nuestros clientes.</p>
							</div>
							<div class="col-md-4">
								<h3>MISIÓN</h3>
								<p>Colaborar con el desarrollo regional y nacional mediante productos y servicios de categoría mundial vinculado al desarrollo de negocios inmobiliarios, ofreciendo inteligencia de mercado, proyectos, coordinación de obra y comercialización, al amparo de una cultura de calidad, puntualidad y servicio basada en el trabajo en equipo, comprensión y satisfacción de nuestros clientes, accionistas y colaboradores.</p>
							</div>
							<div class="col-md-4">
								<h3>VISIÓN</h3>
								<p>Ser líder nacional en calidad y servicio con el objetivo de consolidar nuestro prestigio ante inversionistas y operadores comerciales, proporcionando además a la sociedad, ambientes que aumenten su calidad de vida, y el desarrollo de nuestros colaboradores en un ambiente óptimo de trabajo.</p>
							</div>
						</div>
					</div>
			</section>
			</div>
			<!-- content  end-->
			<!-- content-->
			<div class="content">
				<section>
					<div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>05</span></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title  dec-title"><span><?php echo get_field('extras_quienessomos_video_titulo','options');?></span></h2>
								<p>
									<?php echo get_field('extras_quienessomos_video_mensaje','options');?>
								</p>
							</div>
						</div>
						<div class="custom-inner-holder">
							<!-- 1 -->
							<div class="custom-inner">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<div class="resp-video">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_field('extras_quienessomos_video','options');?>" frameborder="0" allowfullscreen></iframe>
										</div>
										<span class="custom-inner-dec"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-link-holder">
							<a href="<?php echo get_home_url(); ?>/contacto" class="btn anim-button" data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Contáctanos </span><i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</section>
			</div>
			<!-- content  end-->



			<?php get_footer(); ?>
